<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/')
                ->Clicklink('Register')
                ->assertPathIs('/register')
                ->type('name', 'eisha')
                ->type('email', 'eisha@gmail.com')
                ->type('password', '12345')
                ->type('password_confirmation', '12345')
                ->press('REGISTER')
                ->assertPathIs('/dashboard')
                ->screenshot ("regis");;
        });
    }
}