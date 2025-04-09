<?php

namespace App\Controllers;
use App\Controllers\BaseController;


class PageController extends BaseController
{
    public function Home()
    {
        return view('Pages/Home');
    }
    public function Alerts()
    {
        return view('Pages/Alerts');
    }
    public function DICT()
    {
        return view('Pages/DICT');
    }
    public function DOJ()
    {
        return view('Pages/DOJ');
    }
    public function NBI()
    {
        return view('Pages/NBI');
    }
    public function NCP()
    {
        return view('Pages/NCP');
    }
    public function TrackerPage()
    {
        return view('Pages/Tracker');
    }
    public function Projects()
    {
        return view('Pages/Projects');
    }
    public function Contacts()
    {
        return view('Pages/Contacts');
    }

}
