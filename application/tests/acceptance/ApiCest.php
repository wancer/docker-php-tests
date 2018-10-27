<?php

namespace tests\acceptance;

class ApiCest
{
    public function testSomething(\AcceptanceTester $I)
    {
        $I->wantTo('Test some API');
        $I->sendGET('/todos/1');
        $I->canSeeResponseEquals('{}');
    }
}