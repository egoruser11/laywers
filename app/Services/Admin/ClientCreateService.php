<?php


namespace App\Services\Admin;


use App\Models\Application;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientCreateService
{
    public function create(array $data)
    {
        $data['full_name'] = $data['surname'] . ' ' . $data['name'];
        return Client::create($data);
    }
}
