<?php


namespace App\Services\Admin;


use App\Models\Application;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientFilterService
{
    public function filter(Request $request,$clients)
    {
        if (!empty($request->search)) {
            $search = '%' . strtolower(trim($request->search)) . '%';
            $clients->where(function ($query) use ($search) {
                $query->where('full_name', 'like', $search)->orWhere('email', 'like', $search)->orWhere('phone', 'like', $search);
            });
        }


        if (!empty($request->sort)) {
            if ($request->sort == 'yes') {
                $clients->orderBy('created_at');
            } elseif ($request->sort == 'no') {
                $clients->orderBy('id', 'desc');
            }
        }

        return $clients->orderBy('id', 'desc')->paginate();
    }
}
