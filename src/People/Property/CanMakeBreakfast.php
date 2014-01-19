<?php

namespace Asgrim\Breakfast\People\Property;

use Asgrim\Breakfast\Family;

interface CanMakeBreakfast
{
	public function makeBreakfastForFamily(Family $family);
}
