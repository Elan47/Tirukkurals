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

    // Search Kural by Id
    public function searchById($search)
    {
        $data = Kural::where('kural_no', 'LIKE', '%' . $search . '%')->get();
        return KuralResource::collection($data);
    }

    // Search Kural in English
    public function searchInEnglish($search)
    {
        // English
        $data = Kural::where('kural_en', 'LIKE', '%' . $search . '%')->get();
        return KuralResource::collection($data);
    }

    // Search Kural in Transliteration
    public function searchInTransliteration($search)
    {
        // English
        $data = Kural::where('kural_tr', 'LIKE', '%' . $search . '%')->get();
        return KuralResource::collection($data);
    }
    // Search Kural in tamil
    public function searchInTamil($search)
    {
        // Tamil
        $data = Kural::where('kural_tn', 'LIKE', '%' . $search . '%')->get();
        return KuralResource::collection($data);
    }
}
