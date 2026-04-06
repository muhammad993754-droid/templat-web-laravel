<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function profile()
    {
        return view('pages.profile');
    }

    public function blank()
    {
        return view('pages.blank');
    }

    public function buttons()
    {
        return view('ui.buttons');
    }

    public function forms()
    {
        return view('ui.forms');
    }

    public function cards()
    {
        return view('ui.cards');
    }

    public function typography()
    {
        return view('ui.typography');
    }

    public function icons()
    {
        return view('ui.icons');
    }

    public function charts()
    {
        return view('charts.chartjs');
    }

    public function maps()
    {
        return view('maps.google');
    }
}
