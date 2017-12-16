<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return Auth::user()->skills;
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:1|max:128',
            'proficiency' => 'required|numeric|min:0|max:100',
        ]);
        $request->name = ucwords($request->name);

        $user = Auth::user();
        if (!Skill::whereName($request->name)->exists()) {
            $skill = new Skill();
            $skill->name = $request->name;
            $skill->save();

        } else {
            $skill = Skill::whereName($request->name)->first();
        }

        $user->skills()->attach($skill, [
            'proficiency' => $request->proficiency
        ]);

        return Response::HTTP_OK;
    }

    public function update(Skill $skill, Request $request) {
        $request->validate([
            'proficiency' => 'required|numeric|min:0|max:100',
        ]);

        $user = Auth::user();
        $relatedSkill = $user->skills()->whereName($skill->name)->first();
        $relatedSkill->pivot->proficiency = $request->proficiency;
        $relatedSkill->pivot->save();

        return Response::HTTP_OK;
    }

    public function remove(Skill $skill) {
        $user = Auth::user();
        $user->skills()->detach($skill);

        return Response::HTTP_OK;
    }

}
