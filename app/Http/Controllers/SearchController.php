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
	public function plasmids_search(Request $request)
	{
    }

	public function oligos_search(Request $request)
	{
        $strains = DB::table('oligos')
            ->where('oligonum', 'LIKE', '%' . strip_tags($request->get('qstrain')) . '%')
            ->orWhere('designedby', 'LIKE', '%' . strip_tags($request->get('qstrain')) . '%')
            ->orWhere('madeby', 'LIKE', '%' . strip_tags($request->get('qstrain')) . '%')
            ->orWhere('sequence', 'LIKE', '%' . strip_tags($request->get('qstrain')) . '%')
            ->orWhere('pdescription', 'LIKE', '%' . strip_tags($request->get('qstrain')) . '%')
            ->orWhere('hybridtm', 'LIKE', '%' . strip_tags($request->get('qstrain')) . '%')
            ->orWhere('lengthbases', 'LIKE', '%' . strip_tags($request->get('qstrain')) . '%')
            ->get();

		return view('searchResult', [
            'results' => $strains,
            'view_type' => 'oligos'
        ]);
	}
}
