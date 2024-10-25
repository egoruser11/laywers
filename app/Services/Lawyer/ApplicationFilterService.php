<?php


namespace App\Services\Lawyer;


use App\Models\Application;
use App\Models\Topic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationFilterService
{
    public function filter(Request $request)
    {
        $id = Auth::id();
        $applications = Application::where(function ($query) use ($id) {
            $query->where('lawyer_id', $id);
        });
        $statuses = Application::getStatuses();
        $topics = Topic::orderBy('name')->get();

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

        return $applications->orderBy('id', 'desc')->paginate();
    }
}
