<?php declare(strict_types=1);

/**
 * This file is part of the core PHP package for mxtoolbox-api-wrapper.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-api-wrapper
 * @author Nathan King <nkvherus@gmail.com>
 * @version dev
 */

namespace Mxtb;

use GuzzleHttp\Client;

class MxToolbox
{
    /** MxToolbox API version */
    const VERSION = 'v1';

    /** Base API URI */
    const MTXB_URI = 'mxtoolbox.com/api';

    /** Insecure schema */
    const SCHEMA_INSECURE = 'http';

    /** Secure schema */
    const SCHEMA_SECURE = 'https';

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var ApiToken
     */
    private $apiToken;

    /**
     * MxToolbox constructor.
     * @param ApiToken|null $apiToken
     * @param $secure
     */
    public function __construct(ApiToken $apiToken = null, bool $secure = true)
    {
        $this->apiToken = $apiToken;

        $this->httpClient = new Client([
            'base_url'  =>  ['{schema}://{uri}/{version}', [
                'schema' => ($secure) ? self::SCHEMA_SECURE : self::SCHEMA_INSECURE,
                'uri' => self::MTXB_URI,
                'version' => self::VERSION
            ]]
        ]);
    }

    public function get()
    {
        $response = $this->httpClient->get('http://mxtoolbox.com/api/v1/lookup/dns/example.com', [
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);

        return $response->getBody();
    }

    /**
     * Set the API token to use
     * @param $apiToken
     * @return MxToolbox
     */
    public function setApiToken(ApiToken $apiToken) : MxToolbox
    {
        $this->apiToken = $apiToken;
        return $this;
    }

    /**
     * Get the instance of the ApiToken
     * @return ApiToken
     */
    public function getApiToken() : ApiToken
    {
        return $this->apiToken;
    }
}