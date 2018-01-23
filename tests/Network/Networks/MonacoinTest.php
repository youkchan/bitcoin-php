<?php

declare(strict_types=1);

namespace BitWasp\Bitcoin\Tests\Network\Networks;

use BitWasp\Bitcoin\Network\Networks\Monacoin;
use BitWasp\Bitcoin\Tests\AbstractTestCase;

class MonacoinTest extends AbstractTestCase
{
    public function testMonacoinNetwork()
    {
        $network = new Monacoin();
        $this->assertEquals('32', $network->getAddressByte());
        $this->assertEquals('37', $network->getP2shByte());
        $this->assertEquals('b0', $network->getPrivByte());
        $this->assertEquals('0488ade4', $network->getHDPrivByte());
        $this->assertEquals('0488b21e', $network->getHDPubByte());
        $this->assertEquals('dbb6c0fb', $network->getNetMagicBytes());
        $this->assertEquals("bc", $network->getSegwitBech32Prefix());//TODO segwit address
        $this->assertEquals("Monacoin Signed Message", $network->getSignedMessageMagic());
    }
}
