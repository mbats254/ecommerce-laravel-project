<?php

test('the health check endpoint is reachable', function () {
    $this->get('/up')->assertOk();
});
