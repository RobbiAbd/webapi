<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApiController extends Controller
{
    public function test()
    {
    	$data = [
    		[
    			'nama' => 'Robbi',
    			'jk' => 'L'
    		],
    		[
     			'nama' => 'Abdul',
    			'jk' => 'P'   			
    		],
    		[
     			'nama' => 'Rohman',
    			'jk' => 'L'   			
    		],
    	];

    	return $data;
    }
}
