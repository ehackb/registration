<?php

namespace App\Console\Commands;

use EhackB\Mailers\Registrations\RegistrationMailer;
use Illuminate\Console\Command;

class MigrateData extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'ehb:migrate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Notifies already registered users of a system maintenance and warns them';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle(RegistrationMailer $mailer)
	{
		$this->warn('This will destroy all current data in the database.');
		if (!$this->confirm('Are you sure you want to continue?'))
			return;

		$registrations = \DB::table('users')->get();

		foreach ($registrations as $registration)
		{
			$this->info('sending email to ' . $registration->email);
			$mailer->reregister($registration);
		}

		$this->warn('All registrations are processed and notified.');
		$this->warn('Beginning initialization of new database system');
		$this->call('migrate:refresh', ['--seed' => true]);
	}
}
