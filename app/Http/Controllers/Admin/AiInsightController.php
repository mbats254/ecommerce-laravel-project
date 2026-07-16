<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\AiInsightCollection;
use App\Models\AiInsight;
use Illuminate\Http\Request;

class AiInsightController extends Controller
{
    public function index(Request $request): AiInsightCollection
    {
        $this->authorize('reports.view');

        $insights = AiInsight::query()
            ->latest('created_at')
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new AiInsightCollection($insights);
    }
}
