<?php 
	$I = new AcceptanceTester($scenario);
	$I->wantTo('perform actions and see result');

	
function test_acivity($I)
{
	//logging in
	$I->amOnPage('/Non_Login.html');
	$I->wait(2);
	$I->fillField('Email', 'amit2506@hotmail.com');
	$I->fillField('Password', "amit2506");
	$I->click('/html/body/div[2]/section[3]/div/div[1]/form/fieldset/div[3]/input');
	$I->wait(5);
	
}
//in test
test_acivity($I);