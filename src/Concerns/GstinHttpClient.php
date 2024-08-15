<?php

namespace Mrhitss\Gstin\Concerns;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;
use RuntimeException;

trait GstinHttpClient
{
   /**
     * Http Client class object.
     *
     * @var HttpClient
     */
    private HttpClient $client;

    /**
     * Http Client configuration.
     *
     * @var array
     */
    private array $httpClientConfig;

    /**
     * GSTIN API Dev URL.
     *
     * @var string
     */
    private string $apiUrl;

    /**
     * GSTIN API Endpoint.
     *
     * @var string
     */
    private string $apiEndPoint;

    /**
     * Http Client request body parameter name.
     *
     * @var string
     */
    private string $httpBodyParam;

    /**
     * Validate SSL details when creating HTTP client.
     *
     * @var bool
     */
    private bool $validateSSL;

    /**
     * Request type.
     *
     * @var string
     */
    protected string $verb = 'post';

    /**
     * To Perform GSTIN API Request & return response
     * 
     * @throws \Throwable
     * 
     * @return mixed
     */
    private function makeHttpRequest()
    {
        try {
            return $this->client->{$this->verb}(
                $this->apiUrl,
                $this->options
            )->getBody();
        } catch (RequestException $e) {
            throw new RuntimeException($e->getResponse()->getBody()->getContents());
        }
    }
    
    /**
     * To perform GSTIN API Request.
     * 
     * @throws \Throwable
     * 
     * @return mixed
     */
    private function sendRequest()
    {
        try {
            $this->apiUrl = collect([$this->config['api_url'], $this->apiEndPoint])->implode('/');

            $response = $this->makeHttpRequest();

            return $response->getContents();
        } catch (RuntimeException $e) {
            $error = json_decode($e->getMessage(), true);
            return ['error' => $error ?? $e->getMessage()];
        }
    }


}