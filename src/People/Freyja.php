<?php

namespace Asgrim\Breakfast\People;

use Asgrim\Breakfast\Food\Breakfast;
use Asgrim\Breakfast\People\Property\CanRecogniseSongs;

class Freyja implements FamilyMember, CanRecogniseSongs
{
	public function feed(Breakfast $breakfast)
	{
		echo $this->getName() . " eats most of her breakfast, but leaves the crusts.\n";
	}

	public function getName()
	{
		return 'Freyja';
	}

	public function recognises($songName)
	{
		$knownSongs = [
			'Star Wars Main Title',
			'Mary Had A Little Lamb',
			'Row Row Row Your Bat',
		];

		if (in_array($songName, $knownSongs)) {
			echo "Freyja: Hey! I know that song, that's {$songName}!\n";
			return true;
		} else {
			return false;
		}
	}
}
