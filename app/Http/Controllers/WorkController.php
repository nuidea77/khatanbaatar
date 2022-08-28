<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
class WorkController extends Controller
{
    public function view($id){
        $data = Work::withTranslations()->where('id', $id)->first();
        $recent = Work::withTranslations()->orderBy('order','asc')->limit(3)
        ->get();
        return view('work.view')
        	->with('data', $data)
            ->with('recent', $recent);
    }
    public function index(){
        $work = Work::withTranslations()
        ->orderBy('order','asc')
        ->get();
        return view('work.index')
        ->with('work', $work);
    }
}
