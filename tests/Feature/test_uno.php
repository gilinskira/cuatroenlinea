<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\prueba1;

class prueba extends prueba1
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function circulorojo()
    {
        $html = file_get_contents('https://cuatroenlinea.ddev.site/jugar/12');

        $this->assertTrue(substr_count($html,'hover:bg-red-500') == 7);
    }

    
    public function circuloazul()
    {
        $html = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1');

        $this->assertTrue(substr_count($html,'hover:bg-sky-500') == 7);
    }

    
}