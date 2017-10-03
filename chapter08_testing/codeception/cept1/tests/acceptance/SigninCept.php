<?php 
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->lookForwardTo('access website features for logged-in users');
$I->amOnPage('/index.php?action=login');
$I->fillField('username','matt');
$I->fillField('password','smith');
$I->click('login');
$I->see('Hello, matt');