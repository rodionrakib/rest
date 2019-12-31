<?php

require __DIR__.'/vendor/autoload.php';

use Guzzle\Http\Client;

// create our http client (Guzzle)
$client = new Client('http://localhost:8000', array(
    'request.options' => array(
        'exceptions' => false,
    )
));

// $nickname = 'ObjectOrienter'.rand(0, 999);
// $data = array(
//     'nickname' => $nickname,
//     'avatarNumber' => 5,
//     'tagLine' => 'a test dev!'
// );



// 1) Create a programmer resource
$request = $client->get('/api/programmers');
$response = $request->send();

echo $response;
echo "\n\n";
die;

// $requestOne = $client->post('/api/programmers',null,json_encode($data));
// $requestOne->send();

// $requestTwo = $client->get('/api/programmers/abc'.$nickname);
// $response = $requestTwo->send();

// echo $response;

