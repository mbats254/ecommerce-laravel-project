<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ReportsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ReportController extends Controller
{
    public function __construct(private readonly ReportsService $reports)
    {
        $this->authorize('reports.view');
    }

    public function dashboard(): JsonResponse
    {
        return response()->json($this->reports->dashboard());
    }

    public function sales(Request $request): JsonResponse|StreamedResponse
    {
        $startDate = $request->string('startDate')->toString() ?: null;
        $endDate = $request->string('endDate')->toString() ?: null;

        $rows = $this->reports->sales($startDate, $endDate);

        if ($request->string('export')->toString() === 'csv') {
            return $this->toCsv($rows, ['date', 'total', 'orders'], 'sales-report.csv');
        }

        return response()->json($rows->map(fn ($row) => [
            'date' => $row->date,
            'total' => (float) $row->total,
            'orders' => (int) $row->orders,
        ]));
    }

    public function products(Request $request): JsonResponse
    {
        $startDate = $request->string('startDate')->toString() ?: null;
        $endDate = $request->string('endDate')->toString() ?: null;

        $rows = $this->reports->products($startDate, $endDate);

        return response()->json($rows->map(fn ($row) => [
            'productId' => $row->product_id,
            'productName' => $row->product_name,
            'unitsSold' => (int) $row->units_sold,
            'revenue' => (float) $row->revenue,
        ]));
    }

    public function customers(): JsonResponse
    {
        $rows = $this->reports->customers();

        return response()->json($rows->map(fn ($row) => [
            'userId' => $row->user_id,
            'name' => $row->name,
            'email' => $row->email,
            'ordersCount' => (int) $row->orders_count,
            'totalSpent' => (float) $row->total_spent,
        ]));
    }

    /**
     * @template TRow of object
     *
     * @param  Collection<int, TRow>  $rows
     * @param  array<int, string>  $columns
     */
    private function toCsv(Collection $rows, array $columns, string $filename): StreamedResponse
    {
        return response()->streamDownload(function () use ($rows, $columns) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $columns);

            foreach ($rows as $row) {
                fputcsv($handle, array_map(fn ($column) => $row->{$column}, $columns));
            }

            fclose($handle);
        }, $filename, ['Content-Type' => 'text/csv']);
    }
}
