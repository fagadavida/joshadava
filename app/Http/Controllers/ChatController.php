<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Session;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ChatController extends Controller
{
    private $counter = 1;
    public function index()
    {
        return view('chat');
    }

    public function send(Request $request)
    {
        $message = new Message();
        $message->username = $request->username;
        $message->message = e($request->message);
        $message->save();

        $lastId = Message::max("id");
        session(['new_id' => $lastId]);
        return response()->json(['status' => 'Message sent']);
    }

    public function stream(Request $request)
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        $data = [];
        $newId = session("new_id");
        $data = Message::where('id', '=', $newId)->first();

        if ($data && $request->last_id < $newId) {
            $data->last_id = $request->last_id;
            echo "data: " . json_encode($data) . "\n\n";
        } else {
            echo "\n\n";
        }
        $this->counter++;
        ob_flush();
        flush();
    }
}

