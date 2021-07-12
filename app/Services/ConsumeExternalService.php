<?php


namespace App\Services;


use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

trait ConsumeExternalService
{
    public function headers(array $headers = []): PendingRequest
    {
        $headersConfig = [
            'Accept' => 'application/json',
            'Authorization' => $this->token
        ];

        $headers = array_merge($headersConfig, $headers);

        return Http::withHeaders($headers);
    }

    public function request(
        string $method,
        string $endpoint,
        array $formParams = [],
        array $headers = []
    )
    {
        return $this->headers($headers)->$method($this->url . $endpoint, $formParams);
    }
}
