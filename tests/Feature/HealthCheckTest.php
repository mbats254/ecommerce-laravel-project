<?php

use Illuminate\Support\Facades\Redis;

test('the health check endpoint is reachable', function () {
    $this->get('/up')->assertOk();
});

test('/health reports ok with database, redis and queue checks when every dependency is reachable', function () {
    $redisConnection = Mockery::mock();
    $redisConnection->shouldReceive('ping')->once()->andReturn(true);
    Redis::shouldReceive('connection')->once()->andReturn($redisConnection);

    $this->getJson('/api/health')
        ->assertOk()
        ->assertJson([
            'status' => 'ok',
            'checks' => ['database' => true, 'redis' => true, 'queue' => true],
        ]);
});

test('/health reports 503 and flags redis when it is unreachable', function () {
    Redis::shouldReceive('connection')->once()->andThrow(new RuntimeException('connection refused'));

    $this->getJson('/api/health')
        ->assertStatus(503)
        ->assertJson([
            'status' => 'error',
            'checks' => ['database' => true, 'redis' => false, 'queue' => true],
        ]);
});
