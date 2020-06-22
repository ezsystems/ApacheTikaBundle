<?php

/*
 * This file is part of the ApacheTikaBundle Project.
 *
 * (c) Mathieu Santo Stefano--Féron <mathieu.santostefano@gmail.com>
 */

namespace Joli\ApacheTikaBundle\Tests;

use Joli\ApacheTikaBundle\Tests\app\TikaKernel;
use PHPUnit\Framework\TestCase;

class FunctionnalTest extends TestCase
{
    public function testCliKernelWorks()
    {
        $kernel = new TikaKernel('cli');
        $kernel->boot();

        $this->assertInstanceOf('\Vaites\ApacheTika\Clients\CliClient', $kernel->getContainer()->get('apache_tika.client'));
    }

    public function testWebKernelWorks()
    {
        $kernel = new TikaKernel('web');
        $kernel->boot();

        $this->assertInstanceOf('\Vaites\ApacheTika\Clients\WebClient', $kernel->getContainer()->get('apache_tika.client'));
    }
}
