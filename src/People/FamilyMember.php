<?php

namespace Asgrim\Breakfast\People;

use Asgrim\Breakfast\Food\Breakfast;

interface FamilyMember
{
	public function feed(Breakfast $breakfast);

	public function getName();
}
