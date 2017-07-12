<?php

/**
 * Team: RedHackers,NKU
 * Coding by yii2, 20170704
 * This is the main layout of frontend web.
 */

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class AboutCest
{
    public function checkAbout(FunctionalTester $I)
    {
        $I->amOnRoute('site/about');
        $I->see('About', 'h1');
    }
}
