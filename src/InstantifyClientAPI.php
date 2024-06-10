<?php

namespace Sunshinedev\InstantifyApiPhp;

use GuzzleHttp\Client;

final class InstantifyClientAPI {

    public $url = "";
    public $port = "";
    public $api_key = "";

    function __construct($url = "", $port = "", $api_key = "")
    {
        $this->url = $url;
        $this->port = $port;
        $this->api_key = $api_key;
    }

    function send($user_id, $channel, $data) {
        $client = new Client();
        $response = $client->request('POST', str_starts_with($this->url, 'https://') ? $this->url : $this->url . ':' . $this->port . '/api/test', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => $this->api_key
            ],
            'json' => [
                'user_id' => $user_id,
                'channel' => $channel,
                "data" => $data
            ]
        ]);
        return $response->getStatusCode() == 200 ? $response->getBody() : "Error";
    }



}