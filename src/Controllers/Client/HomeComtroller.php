<?php

namespace Latop\Php21\Controllers\Client;

use Latop\Php21\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'Latop';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}