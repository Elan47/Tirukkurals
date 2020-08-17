<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\ChapterGroup;
use App\Http\Resources\KuralResource;
use App\Kural;
use App\Section;
use Illuminate\Http\Request;

class KuralController extends Controller
{

    // Gets all Kurals
    public function index()
    {
        $kurals = Kural::paginate(10);
        return KuralResource::collection($kurals);
    }
    // Gets Kural
    public function kuralById($id)
    {
        $kural = Kural::where('kural_no', $id)->first();
        $chapter = Chapter::where('chap_no', $kural->chapter_id)->first();
        $chapter_group = ChapterGroup::where('chap_grp_no', $kural->chapter_grp_id)->first();
        $section = Section::where('section_no', $kural->section_id)->first();
        $data = [$kural, $chapter, $chapter_group, $section];
        return $data;
    }

    // Gets the Chapter's Kurals
    public function chapter_kurals($id)
    {
        $kurals = Kural::where('chapter_id', $id)->get();
        return KuralResource::collection($kurals);
    }
}
