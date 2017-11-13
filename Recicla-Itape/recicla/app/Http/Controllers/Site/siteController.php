<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class siteController extends Controller
{
	private $totalPage = 6;

	public function index(){
		$tutoriais = DB::table('tutoriais')->orderBy('id', 'desc')->paginate($this->totalPage);
		$title = "Home";
		return view('site.main.index',compact('title','tutoriais'));
	} 
	public function queroReciclar(){
		$title = 'Quero Reciclar';
		$markers = DB::table('markers')->get();
		return view('site\main\queroReciclar',compact('title'), ['markers' => $markers]);
	}

	public function cooperativas(){
		$title = 'Cooperativas';
		$coops = DB::table('cooperativas')->get();
		return view('site\main\cooperativas',compact('title'), ['coops' => $coops]);
	}
	
	public function Tutoriais($id){
		$tutoriais = DB::table('tutoriais')->whereIn('id',[$id])->get();
		$title = 'Tutoriais';
		return view('site.main.tutoriais',compact('title','id','tutoriais'));
	}
}
