<?php

use infobip\Configuration;
use infobip\Api\SmsApi;
use infobip\Model\SmsDestination;
use infobip\Model\SmsTextualMessage;
use infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

$number = $_POST["number"];
$message = $_POST["message"];

if ($_POST["provider"] === "infobip"){
  $base_url = "https://9lp284.api.infobip.com";
  $api_key ="379612ea5b5b862a73747187f066a1c6-41d22f19-6fa7-4129-a870-f4f57f1c212e";

  $configuration = new Configuration($base_url, $api_key);

  $api = new SmsApi(config: $configuration);

  $destination = new SmsDestination(to: $number);

  $message = new SmsTextualMessage(
    destinations:[$destination], text:$message,
    from:"Jill collections"
  );

  $request = new SmsAdvancedTextualRequest([$message]);

  $response = $api-> sendSmsMessage($request);
}else{
  // twilio
}

echo "Message sent";
