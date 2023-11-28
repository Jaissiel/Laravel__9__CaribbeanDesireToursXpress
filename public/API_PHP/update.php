<?php

$headers = [
    "User-Agent: Example REST API Client",
    "Authorization: token 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"
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/{$_POST['full_name']}");  /*Endpoint */
//curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_POST)) ;

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

curl_close($ch); 

$data = json_decode($response, true);

if ($status_code === 422) {
    echo "Invalid data:";
    print_r($data["errors"]);
    exit;
}

if ($status_code !== 200) {
    echo "Unexpected status code: $status_code";
    var_dump($data);
    exit;
}

// var_dump($data);

?>

<?php require "header.html" ?>

<h1>Edit Repository</h1>

<p>Repository updated successfully
    <a href="show.php?full_name=<?= $data["full_name"] ?>">show</a>
</p>

<?php require "footer.html" ?>