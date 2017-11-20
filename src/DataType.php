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
     * Populate the values using data returned from a ResponseInterface
     *
     * @param ResponseInterface $response
     */
    protected function fillValues(ResponseInterface $response)
    {
        $json = $response->getBody();

        foreach (json_decode($json) as $item => $value) {
            if ($item === 'r') {
                $this->r = ($value === 'success') ? true : false;
            } else {
                if (property_exists($this, $item)) {
                    $this->$item = $value;
                }
            }
        }
    }

    /**
     * Fetch a protected/private property by name
     *
     * @param string $item
     * @return null
     */
    public function __get($item)
    {
        if (property_exists($this, $item)) {
            return $this->$item;
        }

        return null;
    }
}
