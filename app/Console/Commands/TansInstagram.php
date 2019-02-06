<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use InstagramAPI\Instagram;
use Telegram;
use Carbon\Carbon;
use App\Models\PostCode;

class TansInstagram extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instagram:tans';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Instagram for Tans (Sanny)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function authenticate($username, $password) {
        $input = [
            'username' => $username,
            'password' => $password,
        ];

        Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
        $ig = new Instagram(false, false);
        try {
            $ig->login($username, $password);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return $ig;
    }

    public function removeTimelinePost(Request $request) {
        $ig = $this->authenticate('yongkyliee', 'Poseidon99');
        
        return $this->retrievePostCodes($ig);
    }

    private function retrievePostCodes($ig) {
        // Insomnia code : $.items[*].code
        $exit_loop = false;
        $next_max_id = null;

        while ($exit_loop == false) {
            $timeline = $ig->timeline->getSelfUserFeed($next_max_id);

            foreach ($timeline->getItems() as $post) {
                $post_code = new PostCode();
                $post_code->instagram_username = 'tans.wardrobe';
                $post_code->post_media_id = $post->getId();
                $post_code->save();
            }

            if (!empty($timeline->getNextMaxId())) {
                $next_max_id = $timeline->getNextMaxId();
            } else {
                $exit_loop = true;
            }

            // if (count($post_codes) > 50) {
            //     $exit_loop = true;
            // }

            sleep(4);
        }
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Telegram::sendMessage([
            "chat_id" => 276355562,
            "text" => "Schedule started at: \n" . 
                Carbon::now()->toDateTimeString(),
        ]);

        $ig = $this->authenticate('tans.wardrobe', 'galaxygrand2');

        Telegram::sendMessage([
            "chat_id" => 276355562,
            "text" => "Seeding post media ID started at: \n" . 
                Carbon::now()->toDateTimeString(),
        ]);

        $this->retrievePostCodes($ig);

        Telegram::sendMessage([
            "chat_id" => 276355562,
            "text" => "Done seeding post media ID started at: \n" . 
                Carbon::now()->toDateTimeString(),
        ]);

        $post_codes = PostCode::where([
            ['instagram_username', 'tans.wardrobe'],
            ['post_deletion_status', 0],
        ])->get();

        Telegram::sendMessage([
            "chat_id" => 276355562,
            "text" => "Delete process started at: \n" . 
                Carbon::now()->toDateTimeString() .
                "\n\n Total post count: " . count($post_codes) . " posts."
        ]);

        try {
            foreach ($post_codes as $key => $code) {
                Telegram::sendMessage([
                    "chat_id" => 276355562,
                    "text" => "postingan ke-" . $key,
                ]);

                $ig->media->delete($code->post_media_id);
                $code->post_deletion_status = 1;
                $code->save();

                sleep(12);
            }
        } catch (\Exception $e) {
            Telegram::sendMessage([
                "chat_id" => 276355562,
                "text" => $e->getMessage(),
            ]);
        }

        Telegram::sendMessage([
            "chat_id" => 276355562,
            "text" => 'All task finished at: ' . Carbon::now()->toDateTimeString(),
        ]);
    }
}
