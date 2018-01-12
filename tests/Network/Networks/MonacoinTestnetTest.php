<?php

declare(strict_types=1);

namespace BitWasp\Bitcoin\Tests\Network\Networks;

use BitWasp\Bitcoin\Network\Networks\MonacoinTestnet;
use BitWasp\Bitcoin\Tests\AbstractTestCase;

class MonacoinTestnetTest extends AbstractTestCase
{
    public function testMonacoinTestnetNetwork()
    {
        $network = new MonacoinTestnet();
        $this->assertEquals('6f', $network->getAddressByte());
        $this->assertEquals('75', $network->getP2shByte());
        $this->assertEquals('ef', $network->getPrivByte());
        $this->assertEquals('04358394', $network->getHDPrivByte());
        $this->assertEquals('043587cf', $network->getHDPubByte());
        $this->assertEquals('f1c8d2fd', $network->getNetMagicBytes());
        $this->assertEquals('tb', $network->getSegwitBech32Prefix()); //TODO segwit address
        $this->assertEquals("Monacoin Signed Message", $network->getSignedMessageMagic());
    }
}
