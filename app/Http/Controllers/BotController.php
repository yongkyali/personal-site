<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram;

class BotController extends Controller
{
    public function webhook() {
        $response = Telegram::commandsHandler(true);
        // $response = Telegram::getWebhookUpdates();

        // $update = json_encode($response);

        // Telegram::sendMessage([
        //     'chat_id' => 276355562,
        //     'text' => $update,
        // ]);

        return;
    }
}
