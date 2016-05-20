<?php 
	$I = new AcceptanceTester($scenario);
	$I->wantTo('perform actions and see result');

	
function test_login($I)
{
	//logging in
	$I->amOnPage('/Non_Login.html');
	$I->wait(2);
	$I->fillField('Email', 'amit2506@hotmail.com');
	$I->fillField('Password', "amit2506");
	$I->click('/html/body/div[2]/section[3]/div/div[1]/form/fieldset/div[3]/input');
	$I->wait(2);
	
}
	
function test_add($I)
{
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

function test_edit($I)
{
	$I->click('/html/body/div/div/div/div[3]/div/table/tbody/tr[11]/td[8]/a');
	$I->fillField('Quantity', '5');
	$I->click('/html/body/div/div/div/form/input[5]');
	$I->click('/html/body/div/div/div/a');
	$I->wait(3);
}

function test_delete($I)
{
	$I->click('/html/body/div/div/div/div[3]/div/table/tbody/tr[11]/td[9]/a');
	$I->wait(3);
}

function test_add2($I)
{
	$I->click('/html/body/div/div/div/div[2]/a');
	$I->fillField('ProductName', 'EyeSkadow');
	$I->fillField('Price', '250');
	$I->fillField('Quantity', '2');
	$I->selectOption('ProductType', 'Cosmetics_Eye&EyeBrow');
	$I->click('/html/body/div/div/div/div[2]/div/div/div/div/form/button');
	$I->wait(3);
}
//in test
test_login($I);
test_add($I);
test_edit($I);
test_delete($I);
test_add2($I);