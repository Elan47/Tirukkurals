<?php

namespace App\Http\Controllers;

use App\Http\Resources\KuralResource;
use App\Kural;
use Illuminate\Http\Request;

class KuralController extends Controller
{
    public function index()
    {
        $kurals = Kural::paginate(10);
        return KuralResource::collection($kurals);
    }
}
