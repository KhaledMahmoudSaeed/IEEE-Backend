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
                'description' => 'tec',
                'salary' => '4000'
            ],
            [
                'id' => 2,
                'description' => 'pro',
                'salary' => '8000'
            ]
        ];
    }
    public static function find($id): array
    {
        $job = Arr::first(static::all(), fn($jobs) => $jobs['id'] == $id);
        if (!$job) {
            abort(404);
        }
        return $job;
    }
}