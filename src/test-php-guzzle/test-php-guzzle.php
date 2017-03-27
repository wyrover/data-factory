<?php
    require 'vendor/autoload.php';


    use Guzzle\Http\Client;

    $client = new Client();

//    // Create a request that has a query string and an X-Foo header
//    $request = $client->get('http://www.amazon.com?a=1', array('X-Foo' => 'Bar'));
//
//    // Send the request and get the response
//    $response = $request->send();
//
//
//    echo $response;


    $request = $client->post('http://localhost:8000/post_test');
    // Set the body of the POST to stream the contents of /path/to/large_body.txt
    $request->setBody(fopen('test_bin.7z', 'r'));
    $response = $request->send();

    echo $response;
