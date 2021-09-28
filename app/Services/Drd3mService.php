<?php


namespace App\Services;


use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Carbon;
use function GuzzleHttp\json_decode as json_decodeAlias;

class Drd3mService
{
    private $base_url;
    private $headers;
    private $request_client;

    public function __construct(Client $request_client)
    {

        $this->base_url = 'https://drd3m.com';
        $this->headers = [
            'content_type' => 'application/json',
//            'key'=>'6fa5f190e70a20c81d5e8b175f2e6304',
        ];
        $this->request_client = $request_client;
    }

    public function buildRequest($url, $method, $pass)
    {
        $request = new Request($method, $this->base_url . $url.'?'.$pass, $this->headers);

        $response = $this->request_client->send($request, [
          'json'=>[],
            'verify' => false
        ]);



        if ($response->getStatusCode() != 200) {

        }
        // return false;

        return $response = json_decode($response->getBody(), true);
    }

    public function service($data = [])
    {
        $pass='';
        foreach ($data as $key =>$item)
        {
                $pass=$pass.$key.'='.$item.'&';
        }


        return $response = $this->buildRequest('/api/v2', 'post',$pass);

    }

}
