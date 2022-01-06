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

    public function plasmids(Request $request, $id = null)
    {
        if ($id) {
            $plasmidsRec = Plasmids::where('id', $id)->first();
        } else {
            $plasmidsRec = new Plasmids();
        }

        if ($name = strip_tags($request->get('plasmidname'))) {
            $plasmidsRec->plasmidname = $name;
        }

        if ($pdname = strip_tags($request->get('pdname'))) {
            $plasmidsRec->pdname = $pdname;
        }

        if ($pdate = strip_tags($request->get('pdatemade'))) {
            $plasmidsRec->pdatemade = $pdate;
        }

        if ($enteredby = strip_tags($request->get('penteredby'))) {
            $plasmidsRec->penteredby = $enteredby;
        }

        if ($psequence = strip_tags($request->get('psequence'))) {
            $plasmidsRec->psequence = $psequence;
        }

        if ($pusage = strip_tags($request->get('pusage'))) {
            $plasmidsRec->pusage = $pusage;
        }

        if ($psource = strip_tags($request->get('psource'))) {
            $plasmidsRec->psource = $psource;
        }

        if ($pconcentration = strip_tags($request->get('pconcentration'))) {
            $plasmidsRec->pconcentration = $pconcentration;
        }

        if ($mark = strip_tags($request->get('pmarkers'))) {
            $plasmidsRec->pmarkers = $mark;
        }
        if ($psize = strip_tags($request->get('plasmidsize'))) {
            $plasmidsRec->plasmidsize = $psize;
        }

        if ($plasmidfile = strip_tags($request->get('plasmidfile'))) {
            $plasmidsRec->plasmidfile = $plasmidfile;
        }

        if ($pimage = strip_tags($request->get('plasmidimage'))) {
            $plasmidsRec->plasmidimage = $pimage;
        }

        if ($pcomments = strip_tags($request->get('pcomments'))) {
            $plasmidsRec->pcomments = $pcomments;
        }

        $plasmidsRec->save();

        return view('profile', [
            'record' => $plasmidsRec,
            'is_edit' => false,
            'view_type' => 'plasmids'
        ]);
    }

    public function strains(Request $request, $id = null)
    {
        if ($id) {
            $strainsRec = Strains::where('id', $id)->first();
        } else {
            $strainsRec = new Strains();
        }

        if ($name = strip_tags($request->get('strainname'))) {
            $strainsRec->strainname = $name;
        }

        if ($senteredby = strip_tags($request->get('senteredby'))) {
            $strainsRec->senteredby = $senteredby;
        }

        if ($date = strip_tags($request->get('sdate'))) {
            $strainsRec->sdateentered = $date;
        }

        if ($species = strip_tags($request->get('sspecies'))) {
            $strainsRec->sspecies = $species;
        }

        if ($smat = strip_tags($request->get('smat'))) {
            $strainsRec->smat = $smat;
        }

        if ($susedoften = strip_tags($request->get('susedoften'))) {
            $strainsRec->susedoften = $susedoften;
        }

        if ($bkgnd = strip_tags($request->get('sbkgnd'))) {
            $strainsRec->sbkgnd = $bkgnd;
        }

        if ($mark = strip_tags($request->get('srepandmarkers'))) {
            $strainsRec->srepandmarkers = $mark;
        }
        if ($aux = strip_tags($request->get('sauxotrophies'))) {
            $strainsRec->sauxotrophies = $aux;
        }

        if ($xtrans = strip_tags($request->get('sxtransform'))) {
            $strainsRec->sxtransform = $xtrans;
        }

        if ($source = strip_tags($request->get('ssource'))) {
            $strainsRec->ssource = $source;
        }

        if ($scomments = strip_tags($request->get('scomments'))) {
            $strainsRec->scomments = $scomments;
        }

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
        if ($nystrainname =  strip_tags($request->get('nystrainname'))) {
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
