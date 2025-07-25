<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\StreamedResponse;

class HomeController extends Controller
{
    public function stream()
    {
        return response()->stream(function () {
            // Set headers
            header('Content-Type: text/event-stream');
            header('Cache-Control: no-cache');
            header('Connection: keep-alive');

            while (true) {
                // Retrieve the latest message from cache
                $message = Cache::pull('chat-message');

                if ($message) {
                    echo "data: " . json_encode($message) . "\n\n";
                    ob_flush();
                    flush();
                }

                // Delay before checking again (heartbeat every 2 seconds)
                sleep(1);
            }
        }, 200);
    }
    //
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function demo()
    {
        return view('home.demo');
    }
    public function career()
    {
        return view('home.career');
    }
    public function signup()
    {
        return view('home.signup');
    }
    public function login()
    {
        return view('home.login');
    }
    public function demoList()
    {
        Demo::latest(200)->get();
        return view('home.demo-list');
    }
    public function addDemo(Request $request)
    {
        Demo::create($request->all());
        return redirect()->route('demo');
    }
}
