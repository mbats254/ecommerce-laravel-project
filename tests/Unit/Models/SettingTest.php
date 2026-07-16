<?php

use App\Models\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('current lazily creates the single settings row with the database defaults on first access', function () {
    expect(Setting::query()->count())->toBe(0);

    $setting = Setting::current();

    expect(Setting::query()->count())->toBe(1)
        ->and($setting->wasRecentlyCreated)->toBeFalse();
});

test('current returns the same row on every subsequent call', function () {
    $first = Setting::current();
    $second = Setting::current();

    expect($second->id)->toBe($first->id)
        ->and(Setting::query()->count())->toBe(1);
});
