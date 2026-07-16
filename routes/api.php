<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\Admin\AiInsightController;
use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\BannerController as AdminBannerController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\CouponController as AdminCouponController;
use App\Http\Controllers\Admin\InventoryController as AdminInventoryController;
use App\Http\Controllers\Admin\LeadController as AdminLeadController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\QuotationController as AdminQuotationController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ReturnController as AdminReturnController;
use App\Http\Controllers\Admin\ReviewController as AdminReviewController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\WarehouseController as AdminWarehouseController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FlashDealController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WishlistController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

// Unversioned (no v1 prefix) so a load balancer's readiness probe never breaks
// across an API version bump. Deeper than /up (bootstrap/app.php), which only
// proves the app booted — this checks the dependencies a request would touch.
Route::get('health', [HealthController::class, 'index']);

Route::prefix('v1')->group(function () {

    Route::prefix('auth')->group(function () {
        Route::post('register', [AuthController::class, 'register'])->middleware('throttle:auth');
        Route::post('login', [AuthController::class, 'login'])->middleware('throttle:auth');
        Route::post('password/forgot', [AuthController::class, 'forgotPassword'])->middleware('throttle:auth');
        Route::post('password/reset', [AuthController::class, 'resetPassword'])->middleware('throttle:auth');

        Route::middleware('auth:sanctum')->group(function () {
            Route::post('logout', [AuthController::class, 'logout']);
            Route::get('me', [AuthController::class, 'me']);
        });

        Route::get('email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
            $request->fulfill();

            return redirect(config('app.frontend_url'));
        })->middleware(['auth:sanctum', 'signed', 'throttle:6,1'])->name('verification.verify');
    });

    Route::middleware('auth:sanctum')->prefix('account')->group(function () {
        Route::get('addresses', [AddressController::class, 'index']);
        Route::post('addresses', [AddressController::class, 'store']);
        Route::patch('addresses/{address}', [AddressController::class, 'update']);
        Route::delete('addresses/{address}', [AddressController::class, 'destroy']);
    });

    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('categories/{slug}', [CategoryController::class, 'show']);

    Route::get('brands', [BrandController::class, 'index']);
    Route::get('brands/{slug}', [BrandController::class, 'show']);

    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/{slug}', [ProductController::class, 'show']);
    Route::get('products/{slug}/reviews', [ProductController::class, 'reviews']);

    Route::get('search', [SearchController::class, 'index']);
    Route::get('flash-deals', [FlashDealController::class, 'index']);
    Route::get('banners', [BannerController::class, 'index']);

    // Guest + authenticated: cart is session-keyed for guests, user-keyed once logged in.
    Route::post('cart', [CartController::class, 'store']);
    Route::get('cart', [CartController::class, 'show']);
    Route::post('cart/items', [CartController::class, 'storeItem']);
    Route::patch('cart/items/{item}', [CartController::class, 'updateItem']);
    Route::delete('cart/items/{item}', [CartController::class, 'destroyItem']);

    Route::post('coupons/validate', [CouponController::class, 'validateCoupon']);

    Route::post('payments/mpesa/callback', [PaymentController::class, 'mpesaCallback'])
        ->middleware(['mpesa.verify-ip', 'throttle:webhooks']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('wishlist', [WishlistController::class, 'index']);
        Route::post('wishlist/{product}', [WishlistController::class, 'toggle']);

        Route::get('compare', [CompareController::class, 'index']);
        Route::post('compare/{product}', [CompareController::class, 'toggle']);

        Route::post('checkout', [CheckoutController::class, 'store'])->middleware('throttle:checkout');

        Route::get('orders', [OrderController::class, 'index']);
        Route::get('orders/{orderNumber}', [OrderController::class, 'show']);
        Route::post('orders/{orderNumber}/cancel', [OrderController::class, 'cancel']);
        Route::post('orders/{orderNumber}/returns', [ReturnController::class, 'store']);

        Route::post('payments/mpesa/stk-push', [PaymentController::class, 'mpesaStkPush']);
    });

    Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
        Route::get('users', [AdminUserController::class, 'index']);
        Route::post('users', [AdminUserController::class, 'store']);
        Route::put('users/{user}', [AdminUserController::class, 'update']);

        Route::get('roles', [RoleController::class, 'index']);
        Route::post('roles', [RoleController::class, 'store']);
        Route::put('roles/{role}', [RoleController::class, 'update']);

        Route::get('categories', [AdminCategoryController::class, 'index']);
        Route::post('categories', [AdminCategoryController::class, 'store']);
        Route::put('categories/{category}', [AdminCategoryController::class, 'update']);
        Route::delete('categories/{category}', [AdminCategoryController::class, 'destroy']);

        Route::get('brands', [AdminBrandController::class, 'index']);
        Route::post('brands', [AdminBrandController::class, 'store']);
        Route::put('brands/{brand}', [AdminBrandController::class, 'update']);
        Route::delete('brands/{brand}', [AdminBrandController::class, 'destroy']);

        Route::get('products', [AdminProductController::class, 'index']);
        Route::post('products', [AdminProductController::class, 'store']);
        Route::get('products/{product}', [AdminProductController::class, 'show']);
        Route::put('products/{product}', [AdminProductController::class, 'update']);
        Route::delete('products/{product}', [AdminProductController::class, 'destroy']);
        Route::post('products/{product}/images', [AdminProductController::class, 'storeImage']);

        Route::get('reviews', [AdminReviewController::class, 'index']);
        Route::patch('reviews/{review}', [AdminReviewController::class, 'update']);

        Route::get('orders', [AdminOrderController::class, 'index']);
        Route::get('orders/{order}', [AdminOrderController::class, 'show']);
        Route::patch('orders/{order}/status', [AdminOrderController::class, 'updateStatus']);

        Route::get('warehouses', [AdminWarehouseController::class, 'index']);
        Route::post('warehouses', [AdminWarehouseController::class, 'store']);

        Route::get('inventory', [AdminInventoryController::class, 'index']);
        Route::patch('inventory/{inventory}', [AdminInventoryController::class, 'update']);

        Route::get('crm/leads', [AdminLeadController::class, 'index']);
        Route::post('crm/leads', [AdminLeadController::class, 'store']);
        Route::patch('crm/leads/{lead}', [AdminLeadController::class, 'update']);

        Route::get('crm/quotations', [AdminQuotationController::class, 'index']);
        Route::post('crm/quotations', [AdminQuotationController::class, 'store']);
        Route::patch('crm/quotations/{quotation}', [AdminQuotationController::class, 'update']);

        Route::get('coupons', [AdminCouponController::class, 'index']);
        Route::post('coupons', [AdminCouponController::class, 'store']);
        Route::put('coupons/{coupon}', [AdminCouponController::class, 'update']);
        Route::delete('coupons/{coupon}', [AdminCouponController::class, 'destroy']);

        Route::get('banners', [AdminBannerController::class, 'index']);
        Route::post('banners', [AdminBannerController::class, 'store']);
        Route::put('banners/{banner}', [AdminBannerController::class, 'update']);
        Route::delete('banners/{banner}', [AdminBannerController::class, 'destroy']);

        Route::get('returns', [AdminReturnController::class, 'index']);
        Route::patch('returns/{return}', [AdminReturnController::class, 'update']);

        Route::get('dashboard', [ReportController::class, 'dashboard']);
        Route::get('reports/sales', [ReportController::class, 'sales']);
        Route::get('reports/products', [ReportController::class, 'products']);
        Route::get('reports/customers', [ReportController::class, 'customers']);
        Route::get('ai-insights', [AiInsightController::class, 'index']);

        Route::get('audit-logs', [AuditLogController::class, 'index']);

        Route::get('settings', [SettingController::class, 'show']);
        Route::put('settings', [SettingController::class, 'update']);
    });
});
