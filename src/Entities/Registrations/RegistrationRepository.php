<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Entities\Registrations;


use Fundamentals\Entities\Repositories\BaseRepository;

class RegistrationRepository extends BaseRepository
{
	public function __construct(Registration $registration)
	{
		parent::__construct($registration);
	}
}