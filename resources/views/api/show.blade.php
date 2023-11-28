@php

$full_name = $_GET["full_name"];

$headers = [
    "User-Agent: Example REST API Client",
    "Authorization: token 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"
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/$full_name" );

$response = curl_exec($ch);



curl_close($ch); 

$data = json_decode($response, true);
//var_dump($data);
/*
foreach ($data as $repository){

    echo $repository["full_name"], " ",
         $repository["name"], " ",
         $repository["description"], "<br>";

}
*/



@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example REST API Client</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body>
<main>
    <h1>Repository </h1>

        <dl>
            <dt>Name</dt>
            <dd><?= $data["name"] ?></dd>
            <dt>Description</dt>
            <dd><?= htmlspecialchars($data["description"]) ?> </dd>
        </dl>    

</main>

</body>
</html>