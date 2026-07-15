<?php

namespace App\Support;

use Illuminate\Http\Request;

/**
 * spatie/laravel-query-builder reads filters from a nested `?filter[x]=`
 * query key by default. The frontend contract (api-design.md's Conventions
 * section) uses flat params instead — `?categorySlug=&brandSlugs[]=` — on
 * every list endpoint. This remaps the flat params QueryBuilder should treat
 * as filters into the nested shape it expects, before it reads the request.
 */
class FlatQueryFilters
{
    /**
     * @param  array<int, string>  $keys
     */
    public static function merge(Request $request, array $keys): void
    {
        $request->merge(['filter' => $request->only($keys)]);
    }
}
