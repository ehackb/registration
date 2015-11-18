<?php
// Created by Wannes Gennar. All rights reserved

namespace EhackB\Composers;


use EhackB\Entities\Activities\Activity;
use Fundamentals\Contracts\Composers\ViewComposer;
use Illuminate\Contracts\View\View;

class ActiviteitenComposer implements ViewComposer
{
	
	/**
	 * The callback when the composer should pass data to the view
	 * @param View $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$view->with([
			'activities' => Activity::all()
		]);
	}
}