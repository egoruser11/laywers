<?php

namespace App\Services\Manager;

use App\Models\Application;

class ApplicationUpdate
{
    public function update(int $id,array $data)
    {
        $data['start_at'] = now();
        $d = Application::where('id',$id)->update($data);
        return $d;
    }
}
