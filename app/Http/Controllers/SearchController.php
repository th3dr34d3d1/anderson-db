<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Plasmids;
use App\Models\Oligos;
use App\Models\Strains;
use App\Models\Nonyeaststrains;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


//controller handling search capability
class SearchController extends Controller
{
	public function oligos(Request $request)
	{
        $query = strip_tags($request->get('query'));
        $by_id = strip_tags($request->get('id'));
        $by_date = strip_tags($request->get('qdate'));
        $last_result = strip_tags($request->get('get_last_result'));

        if ($last_result) {
            $saved_ids = Session::get('last_oligos_query');
            $recs = Oligos::whereIn('id', $saved_ids)->get();
            return view('searchResult', [
                'results' => (!$recs->isEmpty()) ? $recs : [],
                'view_type' => 'oligos'
            ]);
        }

        if ($by_id) {
            $rec = Oligos::where('id', $by_id)->first();
            if ($rec) {
                session(['last_oligos_query' => [$rec->id]]);
                return view('searchResult', [
                    'results' => [ $rec ],
                    'view_type' => 'oligos'
                ]);
            } else { 
                session(['last_oligos_query' => []]);
                return view('searchResult', [
                    'results' => [],
                    'view_type' => 'oligos'
                ]);
            }
        }

        if ($by_date) {
            $recs = Oligos::whereDate('datemade', $by_date)->get();
            $holder = [];
            foreach($recs as $oligo) {
                $holder[] = $oligo->id;
            }
            session(['last_oligos_query' => $holder]);
            return view('searchResult', [
                'results' => (!$recs->isEmpty()) ? $recs : [],
                'view_type' => 'oligos'
            ]);
        }

        $oligos = DB::table('oligos')
            ->Where('oname', 'LIKE', '%' . $query . '%')
            ->orWhere('designedby', 'LIKE', '%' . $query . '%')
            ->orWhere('madeby', 'LIKE', '%' . $query . '%')
            ->orWhere('sequence', 'LIKE', '%' . $query . '%')
            ->orWhere('odescription', 'LIKE', '%' . $query . '%')
            ->orWhere('hybridtm', 'LIKE', '%' . $query . '%')
            ->orWhere('lengthbases', 'LIKE', '%' . $query . '%')
            ->get();

        $holder = [];
        foreach($oligos as $oligo) {
            $holder[] = $oligo->id;
        }
        session(['last_oligos_query' => $holder]);

		return view('searchResult', [
            'results' => (!$oligos->isEmpty()) ? $oligos : [],
            'view_type' => 'oligos'
        ]);
    }

	public function plasmids(Request $request)
	{
        $query = strip_tags($request->get('query'));
        $by_id = strip_tags($request->get('id'));
        $by_date = strip_tags($request->get('qdate'));
        $last_result = strip_tags($request->get('get_last_result'));

        if ($last_result) {
            $saved_ids = Session::get('last_plasmids_query');
            $recs = Plasmids::whereIn('id', $saved_ids)->get();
            if ($recs) {
                return view('searchResult', [
                    'results' => $recs,
                    'view_type' => 'plasmids'
                ]);
            }
        }

        if ($by_id) {
            $rec = Plasmids::where('id', $by_id)->first();
            if ($rec) {
                session(['last_plasmids_query' => [$rec->id]]);
                return view('searchResult', [
                    'results' => [ $rec ],
                    'view_type' => 'plasmids'
                ]);
            } else { 
                session(['last_plasmids_query' => []]);
                return view('searchResult', [
                    'results' => [],
                    'view_type' => 'plasmids'
                ]);
            }
        }

        if ($by_date) {
            $recs = Plasmids::whereDate('pdatemade', $by_date)->get();
            $holder = [];
            foreach($recs as $plasmid) {
                $holder[] = $plasmid->id;
            }
            session(['last_plasmids_query' => $holder]);
            return view('searchResult', [
                'results' => (!$recs->isEmpty()) ? $recs : [],
                'view_type' => 'plasmids'
            ]);
        }

        $plasmids = DB::table('plasmids')
            ->where('pdname', 'LIKE', '%' . $query . '%')
            ->orWhere('penteredby', 'LIKE', '%' . $query . '%')
            ->orWhere('psequence', 'LIKE', '%' . $query . '%')
            ->orWhere('pusage', 'LIKE', '%' . $query . '%')
            ->orWhere('psource', 'LIKE', '%' . $query . '%')
            ->orWhere('pconcentration', 'LIKE', '%' . $query . '%')
            ->orWhere('plasmidsize', 'LIKE', '%' . $query . '%')
            ->orWhere('pcomments', 'LIKE', '%' . $query . '%')
            ->get();

        $holder = [];
        foreach($plasmids as $plasmid) {
            $holder[] = $plasmid->id;
        }
        session(['last_plasmids_query' => $holder]);

		return view('searchResult', [
            'results' => (!$plasmids->isEmpty()) ? $plasmids : [],
            'view_type' => 'plasmids'
        ]);
	}


	public function strains(Request $request)
	{
        $query = strip_tags($request->get('query'));
        $by_id = strip_tags($request->get('id'));
        $by_date = strip_tags($request->get('qdate'));
        $last_result = strip_tags($request->get('get_last_result'));

        if ($last_result) {
            $saved_ids = Session::get('last_strains_query');
            $recs = Strains::whereIn('id', $saved_ids)->get();
            return view('searchResult', [
                'results' => (!$recs->isEmpty()) ? $recs : [],
                'view_type' => 'strains'
            ]);
        }
        if ($by_id) {
            $rec = Strains::where('id', $by_id)->first();
            if ($rec) {
                session(['last_strains_query' => [$rec->id]]);
                return view('searchResult', [
                    'results' => [ $rec ],
                    'view_type' => 'strains'
                ]);
            } else { 
                session(['last_strains_query' => []]);
                return view('searchResult', [
                    'results' => [],
                    'view_type' => 'strains'
                ]);
            }

        }
        if ($by_date) {
            $recs = Strains::whereDate('sdateentered', $by_date)->get();
            $holder = [];
            foreach($recs as $strain) {
                $holder[] = $strain->id;
            }
            session(['last_strains_query' => $holder]);
            return view('searchResult', [
                'results' => (!$recs->isEmpty()) ? $recs : [],
                'view_type' => 'strains'
            ]);
        }

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

        $holder = [];
        foreach($strains as $strain) {
            $holder[] = $strain->id;
        }
        session(['last_strains_query' => $holder]);

		return view('searchResult', [
            'results' => (!$strains->isEmpty()) ? $strains : [],
            'view_type' => 'strains'
        ]);
	}

	public function nonyeaststrains(Request $request)
	{
        $query = strip_tags($request->get('query'));
        $by_id = strip_tags($request->get('id'));
        $by_date = strip_tags($request->get('qdate'));
        $last_result = strip_tags($request->get('get_last_result'));

        if ($last_result) {
            $saved_ids = Session::get('last_nystrains_query');
            $recs = Nonyeaststrains::whereIn('id', $saved_ids)->get();
            if ($recs) {
                return view('searchResult', [
                    'results' => $recs,
                    'view_type' => 'nystrains'
                ]);
            }
        }

        if ($by_id) {
            $rec = Nonyeaststrains::where('id', $by_id)->first();
            if ($rec) {
                session(['last_nystrains_query' => [$rec->id]]);
                return view('searchResult', [
                    'results' => [ $rec ],
                    'view_type' => 'nystrains'
                ]);
            } else { 
                session(['last_nystrains_query' => []]);
                return view('searchResult', [
                    'results' => [],
                    'view_type' => 'nystrains'
                ]);
            }

        }

        if ($by_date) {
            $recs = Nonyeaststrains::whereDate('nydate', $by_date)->get();
            $holder = [];
            foreach($recs as $nystrain) {
                $holder[] = $nystrain->id;
            }
            session(['last_nystrains_query' => $holder]);
            return view('searchResult', [
                'results' => (!$recs->isEmpty()) ? $recs : [],
                'view_type' => 'nystrains'
            ]);
        }
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

        $holder = [];
        foreach($nystrains as $nystrain) {
            $holder[] = $nystrain->id;
        }
        session(['last_nystrains_query' => $holder]);

		return view('searchResult', [
            'results' => (!$nystrains->isEmpty()) ? $nystrains : [],
            'view_type' => 'nystrains'
        ]);
	}
}
