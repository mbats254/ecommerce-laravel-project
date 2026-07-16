<?php

namespace App\Http\Controllers;

use App\Http\Resources\BannerResource;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BannerController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $query = Banner::query()->active();

        if ($request->filled('position')) {
            $query->position($request->string('position')->toString());
        }

        return BannerResource::collection($query->get());
    }
}
