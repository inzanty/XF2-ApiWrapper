<?php declare(strict_types=1);

/*
 * This file is part of the XFAW library.
 *
 * (c) Nazar Nosko <inzanty@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @property \GuzzleHttp\Client httpClient
 */
abstract class XenforoApi
{
    /** @var string */
    public $VERSION = '1.0.0';

    /** @var string */
    public $API_URI;

    /** @var string */
    public $API_KEY;

    /**
     * XenforoApi constructor.
     * @param $ApiUri
     * @param $ApiKey
     */
    public function __construct($ApiUri, $ApiKey)
    {
        $this->API_URI = $ApiUri;
        $this->API_KEY = $ApiKey;
        $this->httpClient = new GuzzleHttp\Client();
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->VERSION;
    }

    /**
     * @return string
     */
    public function getApiUri()
    {
        return $this->API_URI;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->API_KEY;
    }
}