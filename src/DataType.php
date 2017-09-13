<?php

namespace pxgamer\VidLii;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

/**
 * Class DataType
 * @package pxgamer\VidLii
 */
class DataType
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var bool
     */
    protected $r;

    /**
     * DataType constructor.
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://www.vidlii.com/api'
        ]);
    }

    /**
     * @param ResponseInterface $response
     */
    protected function fillValues(ResponseInterface $response)
    {
        $json = $response->getBody();

        foreach (json_decode($json) as $item => $value) {
            if (property_exists($this, $item)) {
                $this->$item = $value;
            }
        }
    }
}