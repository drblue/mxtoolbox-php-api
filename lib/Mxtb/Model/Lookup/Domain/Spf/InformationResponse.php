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
 
namespace Mxtb\Model\Lookup\Domain\Spf;

use Mxtb\Model\Lookup\Domain\AbstractInformationResponse;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class InformationResponse extends AbstractInformationResponse
{
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("Prefix")
     * @Accessor(getter="getPrefix",setter="setPrefix")
     */
    private $prefix;
	
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("Value")
     * @Accessor(getter="getValue",setter="setValue")
     */
    private $value;
	
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("PrefixDesc")
     * @Accessor(getter="getPrefixDesc",setter="setPrefixDesc")
     */
    private $prefixDesc;
	
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("Description")
     * @Accessor(getter="getDescription",setter="setDescription")
     */
    private $description;
	
    /**
     * @return string|null
     */
    public function getPrefix() : string
    {
        return $this->prefix;
    }

    /**
     * @param string|null $prefix
     * @return InformationResponse
     */
    public function setPrefix(string $prefix = null) : InformationResponse
    {
        $this->prefix = $prefix;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param string|null $value
     * @return InformationResponse
     */
    public function setValue(string $value = null) : InformationResponse
    {
        $this->value = $value;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getPrefixDesc() : string
    {
        return $this->prefixDesc;
    }

    /**
     * @param string|null $prefixDesc
     * @return InformationResponse
     */
    public function setPrefixDesc(string $prefixDesc = null) : InformationResponse
    {
        $this->prefixDesc = $prefixDesc;
        return $this;
    }
	
    /**
     * @return string|null
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return InformationResponse
     */
    public function setDescription(string $description = null) : InformationResponse
    {
        $this->description = $description;
        return $this;
    }
}