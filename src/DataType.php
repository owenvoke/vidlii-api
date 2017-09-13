<?php

namespace pxgamer\VidLii;

use GuzzleHttp\Client;

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
     * DataType constructor.
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://www.vidlii.com/api'
        ]);
    }
}