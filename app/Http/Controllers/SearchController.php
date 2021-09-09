<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Oligos;


//controller handling search capability
class SearchController extends Controller
{
	public function search(Request $request)
	{
		$strain = Oligos::where('oligonum', $request->get('qstrain'))->first();
		if ($strain) {
			var_dump($strain->madeby);
		}
		return view('searchResult');
	}
}
