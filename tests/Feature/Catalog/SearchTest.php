<?php

test('search requires a query string', function () {
    $this->getJson('/api/v1/search')->assertUnprocessable()->assertJsonValidationErrors('q');
});
