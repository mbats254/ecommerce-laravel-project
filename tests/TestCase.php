<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Every real request comes from the SPA frontend, which is what makes
     * Sanctum treat it as a stateful (cookie session) request in the first
     * place — without a matching Origin header, session middleware never
     * runs and anything touching the session (e.g. logout) breaks.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->withHeader('Origin', config('app.frontend_url'));
    }
}
