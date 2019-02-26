<?php declare(strict_types = 1);

namespace app\services;

use app\services\interfaces\RestInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\GuzzleException;

class RestService implements RestInterface
{
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function get(string $request): ?string
    {
        try {
            $response = $this->client->request('GET', $request, []);
        } catch (ConnectException $ex) {
            return null;
        } catch (GuzzleException $e) {
            return null;
        }

        if ($response->getStatusCode() !== 200) {
            return null;
        }

        return $response->getBody()->getContents();
    }
}
