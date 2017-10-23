<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Country::create([
			'name' => 'مصر',
			'code' => '123'
		]);

		App\Country::create([
			'name' => 'الولايات المتحدة',
			'code' => '456'
		]);
    }
}