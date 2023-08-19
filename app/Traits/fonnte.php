<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait Fonnte {
    public $token;

    public function __construct() {
        $this->token = config('fonnte');
    }
    
    protected function send_message($target, String $messages) {
        $headers = [
            'Authorization' => $this->token,
        ];

        $url = "https://api.fonnte.com/send";

        $data = [
            'target' => $target,
            'message' => $messages,
        ];
        
        $request_data = Http::withHeaders($headers)->post($url, $data);

        return response()->json($request_data);
    }
}