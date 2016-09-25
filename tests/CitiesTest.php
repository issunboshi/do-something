<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CitiesTest extends TestCase
{

    use DatabaseTransactions;

    /**
     *
     * @return void
     */
    public function testCitiesListing()
    {
        $this->visit('/cities')
             ->see('All cities');
    }

    /**
     *
     * @return void
     */
    public function testCityPage()
    {
        $city = factory(App\City::class)->create();

        $this->visit('/cities/' . $city->id)
             ->see($city->title);
    }
}
