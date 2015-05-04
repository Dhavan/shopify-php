<?php

namespace Shopify;

interface HttpClient
{

    const POST = 'post';
    const GET = 'get';
    const PUT = 'put';

    /**
     * set the Shopify permanent access token
     * @param string $token
     */
    public function setAccessToken($token);

    /**
     * make a get request to the given uri
     * @param string $uri
     * @param array $params
     * @return mixed
     */
    public function get($uri, array $params = array());

    /**
     * make a post request to the given uri
     * @param string $uri
     * @param array|string $params
     * @return mixed
     */
    public function post($uri, $params = null);

}
