<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Home(): string
    {
        return view('Pages/Home');
    }
}
