<?php 
	$I = new AcceptanceTester($scenario);
	$I->wantTo('perform actions and see result');

function test_acivity($I)
{	
	//logging in
	$I->amOnPage('/Non_Login.html');
	$I->fillField('Email', 'amit2506@hotmail.co.th');
	$I->fillField('Password', "amit2506");
	$I->click('Login');
	$I->wait(1);
	$I->seeCurrentUrlEquals('/admin_main.php');
}
//in test
test_acivity($I);