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
 
namespace Mxtb\Model\Lookup\Network\Http;

class InformationResponse
{
    /**
     * @var string
     */
    private $serverType;
	
    /**
     * @var string
     */
    private $status;
	
    /**
     * @var string
     */
    private $contentType;
	
    /**
     * @return string|null
     */
    public function getServerType() : string
    {
        return $this->serverType;
    }

    /**
     * @param string|null $serverType
     */
    public function setServerType(string $serverType) : InformationResponse
    {
        $this->serverType = $serverType;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getStatus() : string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(string $status) : InformationResponse
    {
        $this->status = $status;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getContentType() : string
    {
        return $this->contentType;
    }

    /**
     * @param string|null $contentType
     */
    public function setContentType(string $contentType) : InformationResponse
    {
        $this->contentType = $contentType;
        return $this;
    }
}