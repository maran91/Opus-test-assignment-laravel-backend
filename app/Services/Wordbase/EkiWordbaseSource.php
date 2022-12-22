<?php

namespace App\Services\Wordbase;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Client\ClientInterface;

class EkiWordbaseSource implements WordbaseSourceInterface
{
    public function __construct(private ClientInterface $client)
    {
    }

    public function getWords(): array
    {
        $response = $this->client->sendRequest(new Request('get', env('WORDBASE_LINK')));
        $body = (string)$response->getBody();
        return explode("\n", $body);
    }
}
