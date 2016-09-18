<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CitiesTest extends TestCase
{
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

        $this->visit('/cities/1')
            ->see('King William')
             ->see('Available Places');
    }
}
