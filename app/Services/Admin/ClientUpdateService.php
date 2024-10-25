<?php


namespace App\Services\Admin;


use App\Models\Application;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientUpdateService
{
    public function update(array $data,int $id)
    {
        $data['full_name'] = $data['surname'] . ' ' . $data['name'];
        return Client::where('id', $id)->update($data);
    }
}
