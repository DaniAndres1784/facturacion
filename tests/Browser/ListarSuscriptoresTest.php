<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ListarSuscriptoresTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testListado()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('facturacion.suscriptores')
                    ->assertSee('Suscriptores Servicios Publicos');

                     $browser->with('.tablaSus', function ($table) 
        {
            $table->assertSee('Nombres');
                
        });






        });

       
    }
}
