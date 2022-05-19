<?php

namespace App\Http\Controllers;

use App\Services\PagesServices;

class PagesController extends Controller
{

    private PagesServices $Pages;

    public function __construct(PagesServices $PagesServices)
    {
        $this->Pages = $PagesServices;

    }

    public function index() {

    }

}
