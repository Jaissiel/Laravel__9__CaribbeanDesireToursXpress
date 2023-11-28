





@php


/*
echo "This is php pure ";
// GET response 200 , functional example.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users?page=2');
curl_exec($ch);
if (curl_errno($ch)) echo curl_error($ch);
curl_close($ch);
*/




// GET response 200  from json to array , functional example
/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users?page=2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if (curl_errno($ch)) echo curl_error($ch);
else $decoded = json_decode($response, true);
var_dump($decoded) ;

curl_close($ch);
*/


// POST to server , like we had registered one user

$ch = curl_init();
$array = ['name' => 'Emilio', 'Job' => 'Programer'];

$data = http_build_query($array);

curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) echo curl_error($ch);
else $decoded = json_decode($response, true);

foreach ($decoded as $index => $value) {
    echo "$index: $value <br> ";
};

curl_close($ch);






// PUT or PATCH 
/*

$ch = curl_init();
$array = ['name' => 'Emilio', 'Job' => 'Programer'];

$data = http_build_query($array);

curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users/2');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) echo curl_error($ch);
else $decoded = json_decode($response, true);

foreach ($decoded as $index => $value) {
    echo "$index: $value <br> ";
};

curl_close($ch);


*/







@endphp