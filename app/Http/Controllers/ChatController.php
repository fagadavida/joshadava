<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Session;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ChatController extends Controller
{
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
        session(['last_id' => $lastId]);
        return response()->json(['status' => 'Message sent']);
    }

    public function stream()
    {
        // header('Content-Type: text/event-stream'); //set header text/event-stream for event streaming
        // header('Cache-Control: no-cache');
        // header('Connection: keep-alive');

        $data = [];

        // ob_flush();
        // flush();

        $response = new StreamedResponse(function () {
            $i = 1;
            while (true) {
                $LId = request()->get('last_id');
                $newMessages = Message::where('id', '>', $LId)->get();
                $latestID = session("last_id");

                if (empty(session('last_id'))) {
                    $data = Message::all();
                } else {
                    $lastId = Message::max("id");
                    $data = Message::where("id", $latestID)->get();
                }

                // if ($newMessages->count()) {
                //     foreach ($newMessages as $msg) {
                //         echo "data: " . json_encode($i) . "\n\n";
                //         ob_flush();
                //         flush();
                //     }
                // }

                sleep(1);
                $i++;
            }
        });

        $response->headers->set('Content-Type', 'text/event-stream');
        $response->headers->set('Cache-Control', 'no-cache');
        $response->headers->set("X-Accel-Buffering", "no");
        $response->headers->set("Connection", "keep-alive");

        return $response;
    }
}

