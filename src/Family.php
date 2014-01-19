<?php

namespace Asgrim\Breakfast;

use Asgrim\Breakfast\People\FamilyMember;
use Asgrim\Breakfast\Food\Breakfast;

class Family
{
	/**
	 * @var \Asgrim\Breakfast\People\FamilyMember[]
	 */
	protected $members;

	public function __construct(array $members)
	{
		foreach ($members as $member) {
			if (!($member instanceof FamilyMember)) {
				throw new \DomainException('Family member was not an instance of FamilyMember interface.');
			}

			$this->members[$member->getName()] = $member;
		}
	}

	/**
	 * Feed breakfast to the whole family
	 *
	 * @param \Asgrim\Breakfast\Food\Breakfast $breakfast
	 */
	public function feed(Breakfast $breakfast)
	{
		foreach ($this->members as $member)
		{
			$member->feed($breakfast);
		}
	}

	/**
	 * Get a family member by name
	 *
	 * @param string $name
	 * @throws \RuntimeException
	 * @return \Asgrim\Breakfast\FamilyMember
	 */
	public function get($name)
	{
		if (!isset($this->members[$name])) {
			$msg = sprintf('There is no-one in this family called %s.', $name);
			throw new \RuntimeException($msg);
		}

		return $this->members[$name];
	}
}
