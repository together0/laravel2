<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\users\person;

class PeopleController extends Controller
{
    /*显示用户页面的显示*/
    public function people()
    {
    	$peoples = person::where('id','<',2000)->paginate(10);
    	return view('admin.people',['peoples' => $peoples
    	]);
    }
}
