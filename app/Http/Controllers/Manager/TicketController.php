<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        $tickets = Ticket::withCount('messages')->withCount('unreadMessages')
            ->where('user_id', Auth::id())->get();//->having('messages_count','>',1)->get()
        return view('manager.tickets.index', compact('tickets'));
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
        return redirect()->route('manager.tickets.index')->with('message', 'Новое обращение создано');

    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);
        $messages = $ticket->messages;
        Message::where('ticket_id', $id)->where('is_read', 0)
            ->where('user_id', '!=', Auth::id())->update(
                ['is_read' => 1],
            );
        return view('manager.tickets.edit', compact('ticket', 'messages'));
    }

    public function update($id, Request $request)
    {
        $ticket = Ticket::find($id);
        $ticket->messages()->create(['message' => $request->message, 'user_id' => Auth::id()]);
        return redirect()->route('manager.tickets.edit', [$id])->with('message', 'Заявка обновлена');

    }

    public function create()
    {
        $topics = Ticket::getTopic();
        return view('manager.tickets.create', compact('topics'));
    }
}
