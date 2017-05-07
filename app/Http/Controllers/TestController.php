<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App;

class TestController extends Controller
{
    
    public function testDBConnection(){
		if (DB::connection()->table(DB::raw('DUAL'))->first([DB::raw(1)]))
		{
    		return 'database is available!';
		}

    }
}
