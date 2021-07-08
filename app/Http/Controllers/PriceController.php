<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class PriceController extends Controller
{
    public function getPrice($kategory='pulsa')
    {
        $client = new \GuzzleHttp\Client(); //GuzzleHttp\Client
        $result = $client->request('POST', 'http://49.128.180.101:21/addons/price/get_json_h2h.php', [
            'form_params' => [
                'kategori' => $kategory
            ]
        ]);
        return response()->json(json_decode($result->getBody()));
    }
}
