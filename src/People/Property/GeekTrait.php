<?php

namespace Asgrim\Breakfast\People\Property;

trait GeekTrait
{
	/**
	 * @var int
	 */
	protected $geekLevel;

	/**
	 * @return int
	 */
	public function getGeekLevel()
	{
		return $this->geekLevel;
	}

	/**
	 * @param int $geekLevel
	 */
	public function setGeekLevel($geekLevel)
	{
		$this->geekLevel = (int)$geekLevel;
	}

	/**
	 * @return int
	 */
	public function incrementGeekLevel()
	{
		echo "James gets more geek points.\n";
		return ++$this->geekLevel;
	}

	/**
	 * @return int
	 */
	public function decrementGeekLevel()
	{
		return --$this->geekLevel;
	}
}
