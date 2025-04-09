<?php
namespace App\Models;

use Illuminate\Support\Arr;




class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'company' => 'Tech Company',
            ],
            [
                'id' => 2,
                'title' => 'Data Analyst',
                'company' => 'Data Corp',
            ],
            [
                'id' => 3,
                'title' => 'Web Developer',
                'company' => 'Web Solutions',
            ]
        ];

    }

    public static function find(int $id):array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }
        return $job;
    }
}


?>