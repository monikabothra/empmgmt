<?php

namespace App\Http\Controllers;
use App\post;
use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;
// use Illuminate\Support\Facades\Http;
// use Illuminate\Http\Request;

class postcontroller extends Controller
{
   
    public function index()

{
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://jsonplaceholder.typicode.com/posts',
    ]);
    $request = $client->get('https://jsonplaceholder.typicode.com/posts');
    // dd($request);
    $response = $request->getBody();
    
    $arr_body = json_decode($response);
    // dd($request->getStatusCode());
    foreach($arr_body as $post){
        post::firstOrCreate([
            'title' => $post->title,
            'body' => $post->body,
        ]);
    }
    
    return view('post.list', compact('arr_body'));
    //get status code using $response->getStatusCode();
    

}

}

