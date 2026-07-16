<?php

namespace App\Models;

use App\Concerns\Auditable;
use App\Enums\ProductStatus;
use App\Enums\StockStatus;
use App\Services\StockStatusResolver;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

/**
 * @property-read StockStatus $stock_status
 */
class Product extends Model
{
    /** @use HasFactory<ProductFactory> */
    use Auditable, HasFactory, HasUlids, Searchable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'slug',
        'sku',
        'short_description',
        'description',
        'price',
        'compare_at_price',
        'status',
        'is_featured',
        'is_flash_deal',
        'flash_deal_ends_at',
        'meta_title',
        'meta_description',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'compare_at_price' => 'decimal:2',
            'status' => ProductStatus::class,
            'is_featured' => 'boolean',
            'is_flash_deal' => 'boolean',
            'flash_deal_ends_at' => 'datetime',
        ];
    }

    /**
     * @return BelongsTo<Category, $this>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsTo<Brand, $this>
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * @return HasMany<ProductImage, $this>
     */
    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class)->orderBy('position');
    }

    /**
     * @return HasMany<ProductSpecification, $this>
     */
    public function specifications(): HasMany
    {
        return $this->hasMany(ProductSpecification::class)->orderBy('position');
    }

    /**
     * @return HasMany<ProductVariant, $this>
     */
    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    /**
     * @return HasMany<Review, $this>
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    /**
     * @return HasMany<InventoryItem, $this>
     */
    public function inventoryItems(): HasMany
    {
        return $this->hasMany(InventoryItem::class);
    }

    /**
     * @return HasMany<Wishlist, $this>
     */
    public function wishlist(): HasMany
    {
        return $this->hasMany(Wishlist::class);
    }

    /**
     * @return HasMany<CompareListItem, $this>
     */
    public function compareList(): HasMany
    {
        return $this->hasMany(CompareListItem::class);
    }

    /**
     * @return Attribute<StockStatus, never>
     */
    protected function stockStatus(): Attribute
    {
        return Attribute::make(
            get: fn () => app(StockStatusResolver::class)->resolve($this),
        );
    }

    /**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', ProductStatus::Active);
    }

    /**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */
    public function scopeCategorySlug(Builder $query, string $slug): Builder
    {
        return $query->whereHas('category', fn (Builder $q) => $q->where('slug', $slug));
    }

    /**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */
    public function scopeBrandSlugs(Builder $query, string ...$slugs): Builder
    {
        return $query->whereHas('brand', fn (Builder $q) => $q->whereIn('slug', $slugs));
    }

    /**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */
    public function scopePriceMin(Builder $query, string $value): Builder
    {
        return $query->where('price', '>=', $value);
    }

    /**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */
    public function scopePriceMax(Builder $query, string $value): Builder
    {
        return $query->where('price', '<=', $value);
    }

    /**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */
    public function scopeSearchQuery(Builder $query, string $value): Builder
    {
        return $query->where(fn (Builder $q) => $q->where('name', 'like', "%{$value}%")
            ->orWhere('sku', 'like', "%{$value}%"));
    }

    /**
     * @return array<string, mixed>
     */
    public function toSearchableArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'sku' => $this->sku,
            'brand' => $this->brand?->name,
            'category' => $this->category?->name,
            'specifications' => $this->specifications->pluck('value')->implode(' '),
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'price' => (float) $this->price,
            'stock_status' => $this->stock_status->value,
        ];
    }

    public function shouldBeSearchable(): bool
    {
        return $this->status === ProductStatus::Active;
    }

    /**
     * @param  Builder<Product>  $query
     * @return Builder<Product>
     */
    public function makeAllSearchableUsing(Builder $query): Builder
    {
        return $query->with(['brand', 'category', 'specifications', 'inventoryItems']);
    }
}
