<?php

it('Can validation method request success', function (){
    $this->get('/')->assertStatus(200);
});

it('Can validation method request fail', function (){
    \Pest\Laravel\get('/user')->assertStatus(404);
});