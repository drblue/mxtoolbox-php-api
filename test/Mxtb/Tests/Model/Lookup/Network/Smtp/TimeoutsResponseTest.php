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

namespace Mxtb\Tests\Model\Lookup\Network\Smtp;

use Mxtb\Model\Lookup\Network\Smtp\FailedResponse;

class FailedResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testCanSetInfo()
    {
        // Arrange
        $response = new FailedResponse();

        // Act
        $response->setId(1234);
        $response->setName('test info');
        $response->setInfo('test info');
        $response->setUrl('test info');
        $response->setDelistUrl('test info');

        // Assert
        $this->assertEquals(1234, $response->getId());
        $this->assertEquals('test info', $response->getName());
        $this->assertEquals('test info', $response->getInfo());
        $this->assertEquals('test info', $response->getUrl());
        $this->assertEquals('test info', $response->getDelistUrl());
    }
}