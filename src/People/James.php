<?php

namespace Asgrim\Breakfast\People;

use Asgrim\Breakfast\People\Property\CanMakeBreakfast;
use Asgrim\Breakfast\People\Property\CanWhistle;
use Asgrim\Breakfast\People\Property\GeekTrait;
use Asgrim\Breakfast\People\Property\CanRecogniseSongs;
use Asgrim\Breakfast\Food\Breakfast;
use Asgrim\Breakfast\Family;
use Asgrim\Breakfast\Food\BaconSandwiches;

class James implements FamilyMember, CanMakeBreakfast, CanWhistle
{
	use GeekTrait;

	public function __construct()
	{
		$this->setGeekLevel(99);
	}

	public function feed(Breakfast $breakfast)
	{
		echo $this->getName() . " scoffs down his breakfast like a pig.\n";
	}

	public function getName()
	{
		return 'James';
	}

	public function whistle($songName)
	{
		echo $this->getName() . " whistles {$songName}.\n";
		return $songName;
	}

	/**
	 * @return \Asgrim\Breakfast\Food\Breakfast
	 */
	protected function factoryBreakfast()
	{
		return new BaconSandwiches();
	}

	public function makeBreakfastForFamily(Family $family)
	{
		$breakfast = $this->factoryBreakfast();
		$breakfast->make();

		$song = $this->whistle('Star Wars Main Title');

		$freyja = $family->get('Freyja');
		if ($freyja instanceof CanRecogniseSongs && $freyja->recognises($song)) {
			$this->incrementGeekLevel();
		}

		$family->feed($breakfast);
	}
}