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
	public function oligos(Request $request)
	{
        $query = strip_tags($request->get('query'));
        $oligos = DB::table('oligos')
            ->Where('oname', 'LIKE', '%' . $query . '%')
            ->orWhere('designedby', 'LIKE', '%' . $query . '%')
            ->orWhere('madeby', 'LIKE', '%' . $query . '%')
            ->orWhere('sequence', 'LIKE', '%' . $query . '%')
            ->orWhere('odescription', 'LIKE', '%' . $query . '%')
            ->orWhere('hybridtm', 'LIKE', '%' . $query . '%')
            ->orWhere('lengthbases', 'LIKE', '%' . $query . '%')
            ->get();

		return view('searchResult', [
            'results' => $oligos,
            'view_type' => 'oligos'
        ]);
    }

	public function plasmids(Request $request)
	{
        $query = strip_tags($request->get('query'));
        $plasmids = DB::table('plasmids')
            ->where('plasmidname', 'LIKE', '%' . $query . '%')
            ->orWhere('pdname', 'LIKE', '%' . $query . '%')
            ->orWhere('penteredby', 'LIKE', '%' . $query . '%')
            ->orWhere('psequence', 'LIKE', '%' . $query . '%')
            ->orWhere('pusage', 'LIKE', '%' . $query . '%')
            ->orWhere('psource', 'LIKE', '%' . $query . '%')
            ->orWhere('pconcentration', 'LIKE', '%' . $query . '%')
            ->orWhere('plasmidsize', 'LIKE', '%' . $query . '%')
            ->orWhere('plasmidfile', 'LIKE', '%' . $query . '%')
            ->orWhere('plasmidimage', 'LIKE', '%' . $query . '%')
            ->orWhere('pcomments', 'LIKE', '%' . $query . '%')
            ->get();

		return view('searchResult', [
            'results' => $plasmids,
            'view_type' => 'plasmids'
        ]);
	}


	public function strains(Request $request)
	{
        $query = strip_tags($request->get('query'));
        $strains = DB::table('strains')
            ->where('strainname', 'LIKE', '%' . $query . '%')
            ->orWhere('sspecies', 'LIKE', '%' . $query . '%')
            ->orWhere('smat', 'LIKE', '%' . $query . '%')
            ->orWhere('senteredby', 'LIKE', '%' . $query . '%')
            ->orWhere('susedoften', 'LIKE', '%' . $query . '%')
            ->orWhere('sbkgnd', 'LIKE', '%' . $query . '%')
            ->orWhere('srepandmarkers', 'LIKE', '%' . $query . '%')
            ->orWhere('sauxotrophies', 'LIKE', '%' . $query . '%')
            ->orWhere('sxtransform', 'LIKE', '%' . $query . '%')
            ->orWhere('ssource', 'LIKE', '%' . $query . '%')
            ->orWhere('scomments', 'LIKE', '%' . $query . '%')
            ->get();

		return view('searchResult', [
            'results' => $strains,
            'view_type' => 'strains'
        ]);
	}

	public function nonyeaststrains(Request $request)
	{
        $query = strip_tags($request->get('query'));
        $nystrains = DB::table('nonyeaststrains')
            ->where('nystraintype', 'LIKE', '%' . $query . '%')
            ->orWhere('nystrainname', 'LIKE', '%' . $query . '%')
            ->orWhere('nyenteredby', 'LIKE', '%' . $query . '%')
            ->orWhere('nygenus', 'LIKE', '%' . $query . '%')
            ->orWhere('nyspecies', 'LIKE', '%' . $query . '%')
            ->orWhere('nysource', 'LIKE', '%' . $query . '%')
            ->orWhere('nymedofisolation', 'LIKE', '%' . $query . '%')
            ->orWhere('nymedforgrowth', 'LIKE', '%' . $query . '%')
            ->orWhere('nycomments', 'LIKE', '%' . $query . '%')
            ->get();

		return view('searchResult', [
            'results' => $nystrains,
            'view_type' => 'nystrains'
        ]);
	}
}
