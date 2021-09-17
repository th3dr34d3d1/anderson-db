<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
//use App\Models\Oligos;
use Illuminate\Support\Facades\DB;


//controller handling search capability
class SearchController extends Controller
{
	public function plasmids(Request $request)
	{
    }

	public function oligos(Request $request)
	{
        $query = strip_tags($request->get('query'));
        $strains = DB::table('oligos')
            ->where('oligonum', 'LIKE', '%' . $query . '%')
            ->orWhere('oname', 'LIKE', '%' . $query . '%')
            ->orWhere('designedby', 'LIKE', '%' . $query . '%')
            ->orWhere('madeby', 'LIKE', '%' . $query . '%')
            ->orWhere('sequence', 'LIKE', '%' . $query . '%')
            ->orWhere('pdescription', 'LIKE', '%' . $query . '%')
            ->orWhere('hybridtm', 'LIKE', '%' . $query . '%')
            ->orWhere('lengthbases', 'LIKE', '%' . $query . '%')
            ->get();

		return view('searchResult', [
            'results' => $strains,
            'view_type' => 'oligos'
        ]);
	}
}
