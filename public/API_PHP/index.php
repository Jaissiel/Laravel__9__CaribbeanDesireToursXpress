<?php

$headers = [
    "User-Agent: Example REST API Client",
    "Authorization: token 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"
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, "https://api.github.com/user/repos");

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



?>

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
    <h1>Repositories </h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $repository): ?>
            <tr>
                <td>
                    <a href="show.php?full_name=<?= $repository["full_name"] ?>" >
                    <?= $repository["name"] ?>
                    </a>
                </td>
                <td><?= htmlspecialchars($repository["description"]) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

        <a href="new.php">New</a>

</main>

</body>
</html>