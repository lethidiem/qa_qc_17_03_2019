<?php
use Step\Acceptance\Admin as AdminTester;
class CrossTechCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(Step\Acceptance\Admin $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin();
    }
}
