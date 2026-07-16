<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Marketing\CreateBannerAction;
use App\Actions\Marketing\UpdateBannerAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBannerRequest;
use App\Http\Requests\Admin\UpdateBannerRequest;
use App\Http\Resources\Admin\BannerCollection;
use App\Http\Resources\BannerResource;
use App\Models\Banner;
use App\Support\FlatQueryFilters;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class BannerController extends Controller
{
    public function index(Request $request): BannerCollection
    {
        $this->authorize('marketing.manage');

        FlatQueryFilters::merge($request, ['position']);

        $banners = QueryBuilder::for(Banner::query())
            ->allowedFilters(AllowedFilter::exact('position'))
            ->allowedSorts('position', 'created_at')
            ->defaultSort('-created_at')
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new BannerCollection($banners);
    }

    public function store(StoreBannerRequest $request, CreateBannerAction $action): BannerResource
    {
        return new BannerResource($action->handle($request->validated()));
    }

    public function update(UpdateBannerRequest $request, Banner $banner, UpdateBannerAction $action): BannerResource
    {
        return new BannerResource($action->handle($banner, $request->validated()));
    }

    public function destroy(Banner $banner): Response
    {
        $this->authorize('marketing.manage');

        $banner->delete();

        return response()->noContent();
    }
}
