<?php

namespace App\Models;

class task
{
    static function all(){
        return [
            [
                'id' => 1,
                'task' => 'Doing morning walk',
                'is_complete' => 'Done'
            ],
            [
                'id' => 2,
                'task' => 'Doing brakefast',
                'is_complete' => 'Done'
            ]
        ];
    }
}

Task::all();