<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
Use InstagramAPI\Instagram;

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
        $ig = $this->authenticate('tansbeautyy', 'galaxygrand2');

        return $ig->timeline->getSelfUserFeed();
        
        // return $this->retrievePostCodes($ig);
    }

    private function retrievePostCodes($ig) {
        // Insomnia code : $.items[*].code
        $post_codes = array();
        $next_max_id = null;

        for ($i = 0; $i < 3; $i++) {
            if ($i > 0) {
                sleep(3);
            }
            
            if ($i == 0) {
                $timeline = $ig->timeline->getSelfUserFeed();    
            } else {
                $timeline = $ig->timeline->getSelfUserFeed($next_max_id);
            }

            foreach ($timeline->getItems() as $post) {
                array_push($post_codes, $post->getCode());
            }
        }

        return $post_codes;
    }


}
