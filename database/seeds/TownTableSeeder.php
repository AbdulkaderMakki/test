<?php

use Illuminate\Database\Seeder;

class TownTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$country = App\Country::where('name', 'مصر')->first();
		App\Town::create([
			'country_id' => $country['id'],
			'name' => 'الاسكندرية'
		]);
		App\Town::create([
			'country_id' => $country['id'],
			'name' => 'القاهرة'
		]);

		$country = App\Country::where('name', 'الولايات المتحدة')->first();
		App\Town::create([
			'country_id' => $country['id'],
			'name' => 'واشنطن'
		]);
		App\Town::create([
			'country_id' => $country['id'],
			'name' => 'نيويورك'
		]);
    }
}