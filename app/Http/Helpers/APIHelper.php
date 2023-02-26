<?php

namespace App\Http\Helpers;
use Exception;
use Illuminate\Support\Facades\Http;

class APIHelper
{
    public static function callAPI($endpoint,$headers = [], $body = [], $route_args = []) {
        $api_url = config('api.url');
        $data['headers']['Content-Type'] = $headers['Content-Type'] ?? 'application/json';
        $data['body'] = $body;

        $response_format = 'json';

        switch($endpoint) {
            case 'get_computer_list':
                $api_url = $api_url . 'Computer';
                $type = 'get';
                break;
            case 'get_computer_usage_list':
                $api_url = $api_url . 'computer/{computerId}/power_consumption';
                $api_url = str_replace('{computerId}', $route_args['computerId'], $api_url);
                $type = 'get';
                break;
            default:
                throw new Exception('API Endpoint not found');
        }

        $response = Http::withHeaders($data['headers'])->{$type}($api_url, $body ?? []);
        $response_data = $response->{$response_format}();

        return $response_data;
    }
}
