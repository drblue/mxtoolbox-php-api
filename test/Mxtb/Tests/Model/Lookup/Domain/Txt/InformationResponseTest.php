<?php

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

namespace Mxtb\Tests\Model\Lookup\Domain\Txt;

use Mxtb\Model\Lookup\Domain\Txt\InformationResponse;

class InformationResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
        $response = new InformationResponse();

        // Act
        $response->setType('test info');
        $response->setDomainName('test info');
        $response->setTTL('test info');
        $response->setRecord('test info');

        // Assert
        $this->assertEquals('test info', $response->getType());
        $this->assertEquals('test info', $response->getDomainName());
        $this->assertEquals('test info', $response->getTTL());
        $this->assertEquals('test info', $response->getRecord());
    }
}