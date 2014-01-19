<?php

namespace Asgrim\Breakfast\People;

use Asgrim\Breakfast\Food\Breakfast;

class Hannah implements FamilyMember
{
	public function feed(Breakfast $breakfast)
	{
		echo $this->getName() . " eats some of her breakfast, but baby is in the way of her tummy, so leaves most of it.\n";
	}

	public function getName()
	{
		return 'Hannah';
	}
}
