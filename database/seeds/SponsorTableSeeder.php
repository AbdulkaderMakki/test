<?php

use Illuminate\Database\Seeder;

class SponsorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$country = App\Country::where('name', 'مصر')->first();
		$town = $country->Town()->where('name', 'الاسكندرية')->first();
		App\Sponsor::create([
			'country_id' => $country['id'],
			'town_id' => $town['id'],
			'name' => 'راعي 1',
			'email' => 'sponsor1@domain.com',
			'phone' => '+2001111111111',
			'website' => 'www.sponsor_1.com',
			'comments' => 'ملاحظات 1',
		]);

		$country = App\Country::where('name', 'الولايات المتحدة')->first();
		$town = $country->Town()->where('name', 'واشنطن')->first();
		App\Sponsor::create([
			'country_id' => $country['id'],
			'town_id' => $town['id'],
			'name' => 'راعي 2',
			'email' => 'sponsor2@domain.com',
			'phone' => '+2002222222222',
			'website' => 'www.sponsor_2.com',
			'comments' => 'ملاحظات 2',
		]);
    }
}