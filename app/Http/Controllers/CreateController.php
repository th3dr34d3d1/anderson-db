<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Oligos;
use App\Models\Plasmids;
use App\Models\Strains;
use App\Models\Nonyeaststrains;

class CreateController extends Controller
{
    public function oligos(Request $request)
    {
        $oligosRec = new Oligos();

        // required values.. checked in js 
        $oligosRec->oname = strip_tags($request->get('oname'));
        $oligosRec->datemade = strip_tags($request->get('datemade'));

        $oligosRec->odescription = (strip_tags($request->get('odescription'))) ?? '';
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
        $plasmidsRec = new Plasmids();

        // required values.. checked in js 
        $plasmidsRec->plasmidname = strip_tags($request->get('plasmidname'));
        $plasmidsRec->pdname =  strip_tags($request->get('pdname'));
        $plasmidsRec->penteredby =  strip_tags($request->get('penteredby'));
        
        $plasmidsRec->psequence = strip_tags($request->get('psequence'));
        $plasmidsRec->pusage = (strip_tags($request->get('pusage'))) ?? '';
        $plasmidsRec->psource = (strip_tags($request->get('psource'))) ?? '';
        $plasmidsRec->pconcentration = (strip_tags($request->get('pconcentration'))) ?? '';
        $plasmidsRec->pmarkers = (strip_tags($request->get('pmarkers'))) ?? '';
        $plasmidsRec->plasmidsize = (strip_tags($request->get('plasmidsize'))) ?? '';
        $plasmidsRec->plasmidfile = (strip_tags($request->get('plasmidfile'))) ?? '';
        $plasmidsRec->plasmidimage = (strip_tags($request->get('plasmidimage'))) ?? '';
        $plasmidsRec->pdatemade = (strip_tags($request->get('pdatemade'))) ?? '';
        $plasmidsRec->pcomments = (strip_tags($request->get('pcomments'))) ?? '';
        $plasmidsRec->save();

        var_dump('created new record: id = ' . $plasmidsRec->id);
    //		return view('profile', [
    //
    //        ]);
    }

    public function strains(Request $request)
    {
        $strainsRec = new Strains();

        // required values.. checked in js 
        $strainsRec->strainname =  strip_tags($request->get('sname'));
        $strainsRec->senteredby =  strip_tags($request->get('sdate'));
        $strainsRec->sdateentered =  strip_tags($request->get('sdate'));
        
        $strainsRec->sspecies = strip_tags($request->get('species'));
        $strainsRec->smat = (strip_tags($request->get('mat'))) ?? '';
        $strainsRec->susedoften = (strip_tags($request->get('usedoften'))) ?? '';
        $strainsRec->sbkgnd = (strip_tags($request->get('background'))) ?? '';
        $strainsRec->srepandmarkers = (strip_tags($request->get('srepandmark'))) ?? '';
        $strainsRec->sauxotrophies = (strip_tags($request->get('auxotrophies'))) ?? '';
        $strainsRec->sxtransform = (strip_tags($request->get('xtrans'))) ?? '';
        $strainsRec->ssource = (strip_tags($request->get('ssource'))) ?? '';
        $strainsRec->scomments = (strip_tags($request->get('scomments'))) ?? '';
        $strainsRec->save();

        var_dump('created new record: id = ' . $strainsRec->id);
    //		return view('profile', [
    //
    //        ]);
    }

    public function nonyeaststrains(Request $request)
    {
        $nystrainsRec = new Nonyeaststrains();

        // required values.. checked in js 
        $nystrainsRec->nystraintype = strip_tags($request->get('nystraintype'));
        $nystrainsRec->nystrainname =  strip_tags($request->get('nyname'));
        $nystrainsRec->nydate =  strip_tags($request->get('nydate'));
        
        $nystrainsRec->nyenteredby = strip_tags($request->get('nyenteredby'));
        $nystrainsRec->nygenus = (strip_tags($request->get('nygenus'))) ?? '';
        $nystrainsRec->nyspecies = (strip_tags($request->get('nyspecies'))) ?? '';
        $nystrainsRec->nysource = (strip_tags($request->get('nysource'))) ?? '';
        $nystrainsRec->nymedofisolation = (strip_tags($request->get('nymedofisolation'))) ?? '';
        $nystrainsRec->nymedforgrowth = (strip_tags($request->get('nymedforgrowth'))) ?? '';
        $nystrainsRec->nycomments = (strip_tags($request->get('nycomments'))) ?? '';
        $nystrainsRec->save();

        var_dump('created new record: id = ' . $nystrainsRec->id);
    //		return view('profile', [
    //
    //        ]);
    }
}
