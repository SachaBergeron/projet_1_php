<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LivreController
{
    public function number($ref)
    {
        return new Response(
            '<html><body>Livre numéro: '.$ref.'</body></html>'
        );
    }
}