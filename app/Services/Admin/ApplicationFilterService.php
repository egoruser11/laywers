<?php


namespace App\Services\Admin;


use App\Models\Application;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApplicationFilterService
{
    public function filter(Request $request,$applications)
    {
        if (!empty($request->search)) {
            $search = '%' . strtolower(trim($request->search)) . '%';
            $applications->where(function ($query) use ($search) {
                $query->where('phone', 'like', $search)->orWhere('name', 'like', $search);
            });
        }
        if (!empty($request->status)) {
            $applications->where('status', $request->status);
        }
        if (!empty($request->topic)) {
            $applications->where('topic_id', $request->topic);
        }
        return [
            'search' => $request->search,
            'status' => $request->status,
            'topic' => $request->topic,
        ];
    }
}
