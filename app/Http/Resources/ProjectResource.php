<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Auth;

class ProjectResource extends Resource {
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request) {
        $customArray = [
            'created_at_diff' => $this->created_at->diffForHumans(),
            'updated_at_diff' => $this->created_at->diffForHumans(),
        ];

        if ($this->participants->contains(Auth::user())) {
            if (Auth::user()->isStudent()) {
                $customArray['scholarship_attached'] = Auth::user()->student->scholarship->project_id == $this->id;
            }

            $customArray['participant_since_diff'] = $this->pivot->created_at->diffForHumans();
        }

        return array_merge(parent::toArray($request), $customArray);
    }
}
