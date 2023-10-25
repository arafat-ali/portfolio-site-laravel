<?php

namespace App\Models;
use App\Models\Experience;

class Project {
    public int $id;
    public Experience $experience;
    public string $title;
    public string $description;
    public string $tech;
    public string $image;

    public function set(int $id, Experience $experience, string $title, string $description, string $tech, string $image):void{
        $this->id = $id;
        $this->experience = $experience;
        $this->title = $title;
        $this->description = $description;
        $this->tech = $tech;
        $this->image = $image;
    }

    public function get():array{
        return [
            "id" => $this->id,
            "experience" => $this->experience,
            "title" => $this->title,
            "description" => $this->description,
            "tech" => $this->tech,
            "image" => $this->image
        ];
    }

}