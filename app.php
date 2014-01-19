<?php

require 'vendor/autoload.php';

use Asgrim\Breakfast\Family;
use Asgrim\Breakfast\People\Freyja;
use Asgrim\Breakfast\People\Hannah;
use Asgrim\Breakfast\People\James;
use Asgrim\Breakfast\People\Property\CanMakeBreakfast;

$family = new Family([
	new Freyja(),
	new Hannah(),
	new James(),
]);

$james = $family->get('James');

echo "Geek level: " . $james->getGeekLevel() . "\n";

if ($james instanceof CanMakeBreakfast)
{
	$james->makeBreakfastForFamily($family);
}

echo "Geek level: " . $james->getGeekLevel() . "\n";