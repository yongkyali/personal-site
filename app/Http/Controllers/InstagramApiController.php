<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use InstagramAPI\Instagram;
use App\Models\PostCode;

class InstagramApiController extends Controller
{
    public function authenticate($username, $password) {
        $input = [
            'username' => $username,
            'password' => $password,
        ];

        $validator = Validator::make($input, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return new \Exception('Validator fails.', 413);
        }

        Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
        $ig = new Instagram(false, false);
        try {
            // $ig->setProxy('http://emedia:6YL2vydq@172.84.88.53:29842');            
            $ig->login($username, $password);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return $ig;
    }

    public function removeTimelinePost(Request $request) {
        $ig = $this->authenticate('tans.wardrobe', 'galaxygrand2');

        // $this->retrievePostCodes($ig);

        return $ig->timeline->getSelfUserFeed();
        
        // return $this->retrievePostCodes($ig);
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

            sleep(3);
        }

        // return $post_codes;
    }


}
