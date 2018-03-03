<?php

$router->group(['prefix' => 'api'], function() use ($router){
  $router->get('jamsholat', 'JamController@index');
  $router->get('jamsholat/{id}', 'JamController@view');
  $router->post('jamsholat', 'JamController@store');
  $router->patch('jamsholat/{id}', 'JamController@update');
  $router->delete('jamsholat/{id}', 'JamController@delete');
});
