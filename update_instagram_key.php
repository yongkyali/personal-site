<?php

/**
 * This file updated the Instagram premium key (Constants.php file)
 */
const BASE_URL = 'https://www.mgp25.com/insta/subscription/info/';
const DATA_URL = 'https://www.mgp25.com/insta/android/data/';

try {
    //// Configuration ////
    $token = '2a988aed751cc58c84abcd93c858f2759fb1564f2d14e37aea9bc5a5c916a088'; // here your email for instagram key server
    $ConstantsPath = __DIR__.'/vendor/mgp25/instagram-php/src/Constants.php';	// here's your Composer folder
    $ConstantsPathOld = __DIR__.'/vendor/mgp25/instagram-php/src/Constants-old.php';
    ///////////////////////

    // Check account information.
    echo "* Checking account information...\n";
    $accountInfo = json_decode(file_get_contents(BASE_URL.'?token='.$token));

    print(BASE_URL.'?token='.$token);

    $daysLeft = $accountInfo->days_left;
    printf(
        "---\nUser: %s\nEmail: %s\nToken: %s\nDays Left: %s\n---\n",
        $accountInfo->user, $accountInfo->email, $accountInfo->token, $daysLeft
    );
    if ($daysLeft < 1) {
        echo "Premium subscription expired".PHP_EOL;
        exit(0);
    }

    // Fetch the latest Instagram app data.
    echo "* Fetching the latest Instagram app data...\n";
    $igData = json_decode(file_get_contents(DATA_URL.'?token='.$accountInfo->token));

    echo "* Generating new Constants file...\n";

    $oldConstants = file_get_contents($ConstantsPath);
    // Inject the new variables.
    $replacements = [
        'IG_VERSION'        => $igData->version,
        'VERSION_CODE'      => $igData->version_code,
        'IG_SIG_KEY'        => $igData->signature,
        'X_IG_Capabilities' => $igData->capabilities,
        'LOGIN_EXPERIMENTS' => $igData->login_experiments,
        'EXPERIMENTS'       => $igData->experiments,
    ];
    $newConstants = $oldConstants;
    foreach ($replacements as $constant => $newValue) {
        $newValue = addcslashes($newValue, "'"); // Escape single quotes.
        $newConstants = preg_replace("/const {$constant} = '.+?';/", "const {$constant} = '{$newValue}';", $newConstants);
    }

    // backup old file + write new file
    file_put_contents($ConstantsPathOld, $oldConstants);
    file_put_contents($ConstantsPath, $newConstants);

   echo "finished updating Instagram keys".PHP_EOL;

} catch (\Exception $e) {
    echo "Error: $e->getMessage()";
}
