<?php

namespace App\Http\Controllers;

use App\Http\Resources\KuralResource;
use App\Kural;
use Illuminate\Http\Request;

class KuralController extends Controller
{

    // Gets all Kurals
    public function index()
    {
        $kurals = Kural::paginate(10);
        return KuralResource::collection($kurals);
    }

    // Gets the Chapter's Kurals
    public function chapter_kurals($id)
    {
        $kurals = Kural::where('chapter_id', $id)->get();
        return KuralResource::collection($kurals);
    }
}
