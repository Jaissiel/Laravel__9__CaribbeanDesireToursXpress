<?php

$headers = [
    "User-Agent: Example REST API Client",
    "Authorization: token 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"
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/{$_POST['full_name']}");  /*Endpoint */

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");


$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

curl_close($ch); 

$data = json_decode($response, true);



if ($status_code !== 204) {
    echo "Unexpected status code: $status_code";
    var_dump($data);
    exit;
}

// var_dump($data);

?>

<?php require "header.html" ?>

<h1>Delete Repository</h1>

<p>Repository deleted successfully
    <a href="index.php">Index</a>
</p>

<?php require "footer.html" ?>