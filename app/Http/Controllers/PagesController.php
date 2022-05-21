<?php

namespace App\Http\Controllers;

use App\Services\PagesServices;
use Inertia\Inertia;

class PagesController extends Controller
{

    public pagesServices $pages;

    public function __construct(PagesServices $pagesServices)
    {
        $this->pages = $pagesServices;

    }

    public function index() {

        Inertia::render('Test/Index');
    }

}
