<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram;
use Telegram\Bot\Objects\Payments\LabeledPrice;

class BotController extends Controller
{
    private $chat_id;

    public function __construct() {
        $this->chat_id = 276355562;
    }

    public function webhook() {
        $response = Telegram::commandsHandler(true);
        // $response = Telegram::getWebhookUpdates();

        $update = json_encode($response);

        Telegram::sendMessage([
            'chat_id' => $this->chat_id,
            'text' => $update,
        ]);
        
        return;
    }

    public function methodTester(Request $request)
    {
        // Telegram::sendInvoice([
        //     'chat_id' => $this->chat_id,
        //     'title' => 'Custom Invoice, Just For You!',
        //     'description' => 'Please pay me, I am broke as hell.',
        //     'payload' => 'your_custom_transaction_id',
        //     'provider_token' => '410694247:TEST:96bf071c-f5b2-444b-93f3-0f5a22e62a1a',
        //     'start_parameter' => '1',
        //     'currency' => 'USD',
        //     'prices' => new LabeledPrice('Pay $100 USD', 100),
        // ]);

        // $caption = "Hi EXM Family!";
        // $caption .= "\n\nWe are holding #EXM222Event to celebrate EXM’s 2 years anniversary, Christmas, and New Year!";
        // $caption .= "\n\nFor that we are giving out:";
        // $caption .= "\n\n2x Experience Points\n(00:00 Dec 2, 2018 - Jan 2, 2019)";
        // $caption .= "\n\n2x Leaderboard Prize\n(for 2 months from 00:00 Dec 2, 2018 - Feb 2, 2019)";
        // $caption .= "\n\nAnd to make it even better, we’re also holding the EXM QUIZ with EM Points as the prize!";
        // $caption .= "\n\nDo not forget we also have the Scheduled Shouts Special Promo where you can earn EM Points and free Shoutouts from big pages!";
        // $caption .= "\n\nSo stay tuned for more information and don’t forget to participate in all of our events to maximise your potential!";
        // $caption .= "\n\nWith Love,";
        // $caption .= "\nEXM Team";

        // Telegram::sendPhoto([
        //     'chat_id' => $this->chat_id,
        //     'photo' => 'AgADBQADKagxGxaxKVSwFsnAj0L1iX553zIABLhJROztevTB62QAAgI',
        //     'caption' => $caption
        // ]);

        return;
    }
}
