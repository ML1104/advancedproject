<?php

namespace App\Http\Controllers;

use App\Artwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Util\Json;

class ApiArtworkController extends Controller
{
    public function index()
    {
        $artwork = Artwork::orderBy('upvotes', 'DESC')->get();

        return $artwork;
    }
}
