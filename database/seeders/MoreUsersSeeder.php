<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class MoreUsersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::factory()
			->times(500)
			->create();
	}
}