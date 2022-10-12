<?php

namespace App\Http\Controllers;
use App\Partner;
use App\Team;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about(){
        $partner = Partner::orderBy('order', 'asc')->limit(8)
        ->get();
        $team = Team ::withTranslations()
        ->orderBy('order','asc')
        ->get();
        return view('pages.about')
        ->with('partner', $partner)
        ->with('team', $team);
    }
    public function team(){
        return view('pages.team');
    }
}
