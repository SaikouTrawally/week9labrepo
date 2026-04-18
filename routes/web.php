<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/test', function () {
    return response()->json(['message' => 'API working']);
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('members', 'MemberController@showAllMembers');
    $router->get('members/{id}', 'MemberController@showOneMember');
    $router->get('member/{id}/bookings', 'MemberController@showMemberBookings');
});