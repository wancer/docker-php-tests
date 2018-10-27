<?php

namespace tests\unit;

class MathCest
{
    public function testSum(\UnitTester $I)
    {
        $I->assertEquals(4, 2 + 2);
        $I->assertEquals(4, array_sum([2, 2]));
    }
}