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
	$I->wait(2);
	$I->click('/html/body/div/nav/div[2]/ul/li[2]/a');
	$I->click('/html/body/div/div/div/div[2]/a');
	$I->fillField('ProductName', 'Creamy');
	$I->fillField('Price', '100');
	$I->fillField('Quantity', '1');
	$I->selectOption('ProductType', 'Skincare_Cream');
	$I->fillField('PictureURL', 'http://www.girlsallaround.com/wp-content/uploads/2015/02/whipped-cream.jpg');
	$I->click('/html/body/div/div/div/div[2]/div/div/div/div/form/button');
	$I->wait(3);

}
//in test
test_acivity($I);