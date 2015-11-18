<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Providers;


class ComposerProvider extends \Fundamentals\Providers\ComposerProvider
{
	protected $composers = [
			'register' => [\EhackB\Composers\OptionsComposer::class, \EhackB\Composers\ActiviteitenComposer::class]
	];
}