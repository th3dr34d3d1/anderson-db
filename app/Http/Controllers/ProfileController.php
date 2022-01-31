<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Oligos;
use App\Models\Plasmids;
use App\Models\Strains;
use App\Models\Nonyeaststrains;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
	public function oligos($id)
	{
        $rec = Oligos::where('id', $id)->first();
        return view('profile', [
            'record' => $rec,
            'is_edit' => false,
            'view_type' => 'oligos'
        ]);
    }
	public function plasmids($id)
	{
        $rec = Plasmids::where('id', $id)->first();

        return view('profile', [
            'record' => $rec,
            'is_edit' => false,
            'view_type' => 'plasmids'
        ]);
    }

	public function strains($id)
	{
        $rec = Strains::where('id', $id)->first();
        return view('profile', [
            'record' => $rec,
            'is_edit' => false,
            'view_type' => 'strains'
        ]);
    }

	public function nystrains($id)
	{
        $rec = Nonyeaststrains::where('id', $id)->first();
        return view('profile', [
            'record' => $rec,
            'is_edit' => false,
            'view_type' => 'nystrains'
        ]);
    }
}
