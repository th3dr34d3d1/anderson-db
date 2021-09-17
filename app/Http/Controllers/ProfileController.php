<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Oligos;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
	public function profile($id)
	{
        $profile_record = Oligos::where('id', $id)->first();

        var_dump($profile_record->pdescription);
//        return view('profile', [
//
//        ]);
    }
}
