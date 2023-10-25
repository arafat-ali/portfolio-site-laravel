<?php

namespace App\Models;


class Experience {
    public int $id;
    public string $name;
    public float $years;


    public function set(int $id, string $name, float $years):void{
        $this->id = $id;
        $this->name = $name;
        $this->years = $years;
    }

    public function get():array{
        return [
            "id" => $this->id,
            "name" => $this->name,
            "years" => $this->years,
        ];
    }

}
