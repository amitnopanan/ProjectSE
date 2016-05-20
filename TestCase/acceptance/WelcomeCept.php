<?php 
  $I = new AcceptanceTester($scenario);
  $I->wantTo('ensure that frontpage works');
  $I->amOnPage('/');

function test_activity($I)
{
     // logging in
     $I->amOnPage('/Non_Login.html');
     $I->fillField('username', 'amit2506@hotmail.com');
     $I->fillField('Password', 'amit2506');
     $I->click('/html/body/div[2]/section[3]/div/div[1]/form/fieldset/div[3]/input');
	$I->seeCurrentUrlEquals('/class');
}
// in test:
test_activity($I);
