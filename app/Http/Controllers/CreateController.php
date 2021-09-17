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
        $oligosRec->oligonum = (strip_tags($request->get('oligonum'))) ?? '';
        $oligosRec->pdescription = (strip_tags($request->get('pdescription'))) ?? '';
        $oligosRec->hybridtm = (strip_tags($request->get('hybridtm'))) ?? '';
        $oligosRec->lengthbases = (strip_tags($request->get('lengthbases'))) ?? '';
        $oligosRec->madeby = (strip_tags($request->get('madeby'))) ?? '';
        $oligosRec->designedby = (strip_tags($request->get('designedby'))) ?? '';
        $oligosRec->datemade = (strip_tags($request->get('datemade'))) ?? '';
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
