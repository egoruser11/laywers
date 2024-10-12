<?php

namespace App\Services\Manager;

use App\Models\Application;

class ApplicationService
{
    public function store(array $data): Application
    {
        $data['start_at'] = now();
        $data['status'] = Application::STATUS_NEW;
        return Application::create($data);
    }
}
