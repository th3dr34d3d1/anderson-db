<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Oligos;


class CreateController extends Controller
{
    public function oligos(Request $request)
    {
        $oligosRec = new Oligos();

        // required values.. checked in js 
        $oligosRec->oname = strip_tags($request->get('oname'));
        $oligosRec->oligonum =  strip_tags($request->get('oligonum'));
        $oligosRec->datemade = strip_tags($request->get('datemade'));

        $oligosRec->pdescription = (strip_tags($request->get('odescription'))) ?? '';
        $oligosRec->hybridtm = (strip_tags($request->get('hybridtm'))) ?? '';
        $oligosRec->lengthbases = (strip_tags($request->get('lengthbases'))) ?? '';
        $oligosRec->madeby = (strip_tags($request->get('madeby'))) ?? '';
        $oligosRec->designedby = (strip_tags($request->get('designedby'))) ?? '';
        $oligosRec->sequence = (strip_tags($request->get('sequence'))) ?? '';
        $oligosRec->save();

        var_dump('created new record: id = ' . $oligosRec->id);
    //		return view('profile', [
    //
    //        ]);
    }

    public function plasmids(Request $request)
    {
    }
}
