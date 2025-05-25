<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group notetest
     */
    public function testEditNote(): void
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
            ->clickLink('Edit') 
            ->assertSee('Edit Note') 
            ->type('title', 'Eisha Edit')
            ->type('description', 'Deskripsi diubah 12345')
            ->press('UPDATE')
            ->assertPathIs('/notes')
            ->assertSee('Eisha Edited') 
            ->screenshot("edit-note");
    });
}
}