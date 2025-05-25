<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Logout extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/')
                ->Clicklink('Log in')
                ->assertPathIs('/login')
                ->type('email', 'eisha@gmail.com')
                ->type('password', '12345')
                ->press('LOG IN')
                ->assertPathIs('/dashboard');
            $browser->click('.sm\\:ms-6 button') 
                ->pause(500) 
                ->clickLink('Log Out')
                ->assertPathIs('/')
                ->screenshot('LOGOUT');

        });
    }
}