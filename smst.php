<?php
    // Account details
    $apiKey = urlencode(‘OTFkZGU1YjI2ZTVhM2I4MjExZWU4NjY2Mzg3MTU0ZmM=’);
    // Message details
    $numbers = urlencode(‘919322297549’);
    $sender = urlencode(‘TXTLCL’);
    $message = rawurlencode(‘Gret to see you...!’);
     
    // Prepare data for POST request
    $data = ‘apikey=’ . $apiKey . ‘&numbers=’ . $numbers . “&sender=” . $sender . “&message=” . $message;
    // Send the GET request with cURL
    $ch = curl_init(‘https://api.textlocal.in/send/?’ . $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    // Process your response here
    echo $response;
?>
