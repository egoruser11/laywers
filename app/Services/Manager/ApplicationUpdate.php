<?php

namespace App\Services\Manager;

use App\Models\Application;

class ApplicationUpdate
{
    public function update(int $id,array $data)
    {
        $data['start_at'] = now();
        return Application::where('id',$id)->update($data);
    }
}
