<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DetailNote extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group notetest
     */
    public function testNotesTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Log in')
                ->assertPathIs('/login')
                ->type('email', 'eisha@gmail.com')
                ->type('password', '12345')
                ->press('LOG IN')
                ->assertPathIs('/dashboard')
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->clickLink('Eisha Edit') 
                ->assertSee('Eisha Edit') 
                ->assertSee('12345')  
                ->assertSee('Author:') 
                ->screenshot("detail-note");
        });
    }
}