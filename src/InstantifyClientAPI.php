<?php

namespace Sunshinedev\InstantifyApiPhp;

use GuzzleHttp\Client;
use Dotenv\Dotenv;

final class InstantifyClientAPI {

    public $url = "";
    public $port = "";
    public $api_key = "";

    function __construct($url = "", $port = "", $api_key = "")
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->load();
        $this->url = $url == "" ? $_ENV['INSTANTIFY_URL'] : $url;
        $this->port = $port == "" ? $_ENV['INSTANTIFY_PORT'] : $port;
        $this->api_key = $api_key == "" ? $_ENV['INSTANTIFY_API_KEY'] : $api_key;
    }

    function send($user_id, $channel, $data) {
        $client = new Client();
        $response = $client->request('POST', $this->url . ':' . $this->port .'/api/test', [
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