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
    public function oligos(Request $request, $id = null)
    {
        if ($id) {
            $oligosRec = Oligos::where('id', $id)->first();
        } else {
            $oligosRec = new Oligos();
        }

        if ($name = strip_tags($request->get('oname'))) {
            $oligosRec->oname = $name;
        }

        if ($dateMade = strip_tags($request->get('datemade'))) {
            $oligosRec->datemade = $dateMade;
        }

        if ($desc = strip_tags($request->get('odescription'))) {
            $oligosRec->odescription = $desc;
        }

        if ($hybridtm = strip_tags($request->get('hybridtm'))) {
            $oligosRec->hybridtm = $hybridtm;
        }

        if ($lengthbases = strip_tags($request->get('lengthbases'))) {
            $oligosRec->lengthbases = $lengthbases;
        }

        if ($madeBy = strip_tags($request->get('madeby'))) {
            $oligosRec->madeby = $madeBy;
        }

        if ($designedBy = strip_tags($request->get('designedby'))) {
            $oligosRec->designedby = $designedBy;
        }

        if ($seq = strip_tags($request->get('sequence'))) {
            $oligosRec->sequence = $seq;
        }
        $oligosRec->save();

        return view('profile', [
            'record' => $oligosRec,
            'is_edit' => false,
            'view_type' => 'oligos'
        ]);
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

        return view('profile', [
            'record' => $plasmidsRec,
            'is_edit' => false,
            'view_type' => 'plasmids'
        ]);
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

        return view('profile', [
            'record' => $strainsRec,
            'is_edit' => false,
            'view_type' => 'strains'
        ]);
    }

    public function nonyeaststrains(Request $request, $id = null)
    {
        if ($id) {
            $nystrainsRec = Nonyeaststrains::where('id', $id)->first();
        } else {
            $nystrainsRec = new Nonyeaststrains();
        }

        if ($nystraintype = strip_tags($request->get('nystraintype'))) {
            $nystrainsRec->nystraintype = $nystraintype;
        }
        if ($nystrainname =  strip_tags($request->get('nyname'))) {
            $nystrainsRec->nystrainname =  $nystrainname;
        }
        if ($nydate =  strip_tags($request->get('nydate'))) {
            $nystrainsRec->nydate = $nydate;
        }

        if ($nyenteredby = strip_tags($request->get('nyenteredby'))) {
            $nystrainsRec->nyenteredby = $nyenteredby;
        }
        if ($nygenus = (strip_tags($request->get('nygenus')))) {
            $nystrainsRec->nygenus = $nygenus;
        }
        if ($nyspecies = (strip_tags($request->get('nyspecies')))) {
            $nystrainsRec->nyspecies = $nyspecies;
        }
        if ($nysource = (strip_tags($request->get('nysource')))) {
            $nystrainsRec->nysource = $nysource;
        }
        if ($nymedofisolation = (strip_tags($request->get('nymedofisolation')))) {
            $nystrainsRec->nymedofisolation = $nymedofisolation;
        }
        if ($nymedforgrowth = (strip_tags($request->get('nymedforgrowth')))) {
            $nystrainsRec->nymedforgrowth = $nymedforgrowth;
        }
        if ($nycomments = (strip_tags($request->get('nycomments')))) {
            $nystrainsRec->nycomments = $nycomments;
        }
        $nystrainsRec->save();

        return view('profile', [
            'record' => $nystrainsRec,
            'is_edit' => false,
            'view_type' => 'nystrains'
        ]);
    }
}
