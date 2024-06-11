<?php

namespace Latop\Php21\Controllers\Admin;

use Latop\Php21\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}