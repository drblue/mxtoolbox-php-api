<?php declare(strict_types = 1);

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Nathan King <nkvherus@gmail.com>
 * @version dev
 */

namespace Mxtb\Model\Lookup\Network\Blacklist;

class FailedResponse extends AbstractBlacklistResponse
{
    /**
     * @Type("string")
     * @SerializedName("Info")
     * @Accessor(getter="getInfo",setter="setInfo")
     */
    private $info;

    /**
     * @Type("string")
     * @SerializedName("BlacklistTTL")
     * @Accessor(getter="getBlacklistTTL",setter="setBlacklistTTL")
     */
    private $blacklistTTL;

    /**
     * @Type("string")
     * @SerializedName("BlacklistReasonCode")
     * @Accessor(getter="getBlacklistReasonCode",setter="setBlacklistReasonCode")
     */
    private $blacklistReasonCode;

    /**
     * @return string
     */
    public function getInfo() : string
    {
        return $this->info;
    }

    /**
     * @param string $info
     * @return FailedResponse
     */
    public function setInfo(string $info) : FailedResponse
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlacklistTTL() : string
    {
        return $this->blacklistTTL;
    }

    /**
     * @param string $blacklistTTL
     * @return FailedResponse
     */
    public function setBlacklistTTL(string $blacklistTTL) : FailedResponse
    {
        $this->blacklistTTL = $blacklistTTL;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlacklistReasonCode() : string
    {
        return $this->blacklistReasonCode;
    }

    /**
     * @param string $blacklistReasonCode
     * @return FailedResponse
     */
    public function setBlacklistReasonCode(string $blacklistReasonCode) : FailedResponse
    {
        $this->blacklistReasonCode = $blacklistReasonCode;
        return $this;
    }
}