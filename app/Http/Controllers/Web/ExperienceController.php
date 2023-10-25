<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Project;

class ExperienceController extends Controller
{
    public array $projects;
    public array $experiences;

    public function __construct()
    {
        $data = json_decode(file_get_contents(storage_path('data/experiences.json')));
        $this->setExperiences($data);

        $projects = json_decode(file_get_contents(storage_path('data/projects.json')));
        $this->setProjects($projects);
    }
    
    public function list(){
        return view('website.pages.experiences', ["data" => $this->experiences]);
    }

    public function listOfProjects(){
        return view('website.pages.projects', ["data" => $this->projects, 'title' => "All Projects"]);
    }

    public function projectsInExperience(int $id){
        $experience = collect($this->experiences)->where('id', $id)->first();
        $projects = collect($this->projects)->where('experience.id', $id);
        return view('website.pages.projects', ["data" => $projects, "title"=>$experience->name]);
    }


    private function setExperiences(array $experiences){
        foreach($experiences as $experience){
            $exp = new Experience();
            $exp->set($experience->id, $experience->name, $experience->years);
            $this->experiences[] = $exp;
        }
    }

    private function setProjects(array $projects){
        foreach($projects as $project){
            $experience = $this->getExperienceById($project->experienceId);
            $pro = new Project();
            $pro->set($project->id, $experience, $project->title, $project->description, $project->tech, $project->image);
            $this->projects[] = $pro;
        }
    }

    private function getExperienceById(int $id):Experience{
        $experience = collect($this->experiences)->where('id', $id)->first();
        return $experience;
    }



}
