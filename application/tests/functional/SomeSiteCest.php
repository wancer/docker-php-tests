<?php

namespace tests\functional;

class SomeSiteCest
{
    public function test(\FunctionalTester $I)
    {
        $I->amGoingTo('Test some site');
        $I->amOnPage('/');
        $I->see('bash.im');
    }
}