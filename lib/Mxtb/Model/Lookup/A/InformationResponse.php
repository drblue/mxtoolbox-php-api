<?php declare(strict_types = 1);

/**
 * This file is part of the core PHP package for mxtoolbox-php-api.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package mxtoolbox-php-api
 * @author Darien Livermore <daz.livermore@hotmail.com>
 * @version dev
 */
 
namespace Mxtb\Model\Lookup\A;

use Mxtb\Model\Lookup\AbstractInformationResponse;

class InformationResponse extends AbstractInformationResponse
{
    /**
     * @var string|null
     */
    protected $domainName;

    /**
     * @var string|null
     */
    protected $ipAddress;

    /**
     * @var string|null
     */
    protected $ttl;

    /**
     * @return null|string
     */
    public function getDomainName() : string
    {
        return $this->domainName;
    }

    /**
     * @param string|null $domainName
     */
    public function setDomainName(string $domainName) : AbstractInformationResponse
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIPAddress() : string
    {
        return $this->ipAddress;
    }

    /**
     * @param string|null $ipAddress
     */
    public function setIPAddress(string $ipAddress) : AbstractInformationResponse
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTTL() : string
    {
        return $this->ttl;
    }

    /**
     * @param string|null $ttl
     */
    public function setTTL(string $ttl) : AbstractInformationResponse
    {
        $this->ttl = $ttl;
        return $this;
    }
}