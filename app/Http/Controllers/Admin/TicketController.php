<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        $tickets = Ticket::where('admin_id',Auth::id())->orWhereNull('admin_id')->get();
        return view('admin.tickets.index',compact('tickets'));
    }

    public function store(Request $request)
    {
       $ticket = Ticket::create(

            [
                'user_id' => Auth::id(),
                'description' => $request->description,
                'topic' => $request->topic,
                'status' => Ticket::STATUS_NEW,
            ]

        );
//        $ticket->messages()->create(
//            [
//                'message' => $request->message,
//                'user_id' => Auth::id(),
//                'recipient_id' => $request->recipient_id,
//            ]
//        );
        return redirect()->route('admin.tickets.index')->with('message', 'Новое обращение создано');

    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);
        $messages = $ticket->messages;
        Message::where('ticket_id',$id)->where('is_read',0)
            ->where('user_id','!=',Auth::id())->update(
            ['is_read' => 1],
        );
        return view('admin.tickets.edit',compact('ticket','messages'));
    }
    public function update($id, Request $request)
    {
        $ticket = Ticket::find($id);
        $ticket->messages()->create(['message' => $request->message,'user_id'=>Auth::id()]);
        return redirect()->route('admin.tickets.edit', [$id])->with('message', 'Заявка обновлена');

    }

    public function create()
    {
        $topics = Ticket::getTopic();
        return  view('admin.tickets.create',compact('topics'));
    }

    public function get($id)
    {
        $ticket = Ticket::find($id);
        $ticket->update(['admin_id' => Auth::id()]);
        return redirect()->route('admin.tickets.index');
    }
}
