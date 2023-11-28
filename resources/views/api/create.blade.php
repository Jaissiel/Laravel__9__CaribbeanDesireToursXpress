@php

$headers = [
    "User-Agent: Example REST API Client",
    "Authorization: token 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"
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, "https://api.github.com/user/repos");
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_CUSTOMERST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_POST)) ;

$response = curl_exec($ch);



curl_close($ch); 

$data = json_decode($response, true);

var_dump($data);

@endphp