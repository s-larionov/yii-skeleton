<?php

class UserIdentity extends CBaseUserIdentity {
	protected $id;
	protected $name;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate() {
		throw new CException('Do not implemented yet');
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}
}
