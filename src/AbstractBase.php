<?php
declare(strict_types=1);

namespace LarsNieuwenhuizen\EUtilities;

use GuzzleHttp\Client;
use LarsNieuwenhuizen\EUtilities\Interfaces\EUtility;

abstract class AbstractBase
{

    /**
     * @var string
     */
    protected $baseUrl = 'https://eutils.ncbi.nlm.nih.gov/entrez/eutils/';

    /**
     * @var string
     */
    protected $urlPath = '';

    /**
     * @var Client
     */
    protected $httpClient;

    /**
     * @var string
     */
    protected $apiKey = '';

    /**
     * AbstractBase constructor.
     */
    public function __construct()
    {
        $this->setHttpClient(new Client());
        $this->setBaseUrl($this->getBaseUrl() . $this->getUrlPath());
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     * @return AbstractBase
     */
    public function setBaseUrl($baseUrl): EUtility
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlPath(): string
    {
        return $this->urlPath;
    }

    /**
     * @param string $urlPath
     * @return AbstractBase
     */
    public function setUrlPath($urlPath): EUtility
    {
        $this->urlPath = $urlPath;

        return $this;
    }

    /**
     * @return Client
     */
    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }

    /**
     * @param Client $httpClient
     * @return AbstractBase
     */
    public function setHttpClient(Client $httpClient): EUtility
    {
        $this->httpClient = $httpClient;

        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return EUtility
     */
    public function setApiKey(string $apiKey): EUtility
    {
        $this->apiKey = $apiKey;

        return $this;
    }
}
