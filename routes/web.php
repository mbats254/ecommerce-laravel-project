<?php

use Illuminate\Support\Facades\Route;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */

// Anchor API is API-only. All application routes live in routes/api.php,
// aside from this landing page. The load-balancer health check is
// registered separately in bootstrap/app.php (`health: '/up'`).
Route::get('/', function () {
    return view('welcome');
});
