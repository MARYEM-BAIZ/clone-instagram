<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Publication;
use App\Models\User;
use App\Models\Commentaire;
use App\Models\Enregistrement;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function suivre($id){
        $id1 = Auth::id();
        $u= User::find($id1);
        $u->users()->attach($id);
        return redirect()->route('page.page');
    }

    
}
