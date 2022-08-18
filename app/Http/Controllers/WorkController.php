<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
class WorkController extends Controller
{
    public function view($id){
        $data = Work::withTranslations()->where('id', $id)->first();
        return view('work.view')
        	->with('data', $data);
    }
}
