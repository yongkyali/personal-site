<?php

namespace App\Http\Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Command;

class IdCommand extends Command {

    /**
     * @var string Command Name
     */
    protected $name = "id";

    /**
     * @var string Command Description
     */
    protected $description = "Get your chat ID";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $encoded_arguments = json_encode($arguments);
        $this->replyWithMessage([
            'text' => $encoded_arguments,
        ]);

        // This will update the chat status to typing...
        $this->replyWithChatAction(['action' => Actions::TYPING]);
    }

}
