<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\Work;
use App\Team;
use App\Models\Post;
use TCG\Voyager\Models\Category;
class MainController extends Controller
{
    public function index(){
        $work = Work::withTranslations()
        ->where([['featured', '=',1]])
        ->orderBy('order','asc')
        ->limit(3)
        ->get();

        $partners = Partner::orderBy('order', 'asc')->limit(5)
                ->get();
        $featurenews = Post::with('category')->withTranslations()
                ->where([
                    ['status', '=', 'PUBLISHED'],
                    ['featured', '=', 1]
                ])
                    ->orderBy('created_at', 'desc')
                    ->limit(4)
                    ->get();


    return view('welcome')
    ->with('featurenews', $featurenews)
    ->with('work', $work)
    ->with('partners', $partners);

}
}



