<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br><br>
    <h1 style="text-align: center;">Exercice Ninja Factorial Of A Number Using Recursive</h1>
    <div class="container">
<br><br>
        

<?php

        // Initializing curl
        $curl = curl_init();

        // Sending GET request to reqres.in
        // server to get JSON data
        curl_setopt($curl, CURLOPT_URL, "https://reqres.in/api/users?page=2");

        // Telling curl to store JSON data in a variable instead of dumping on screen
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Executing curl
        $response = curl_exec($curl);

        // Checking if any error occurs
        // during request or not
        if ($e = curl_error($curl)) {
            echo $e;
        } else {

            // Decoding JSON data
            $decodedData = json_decode($response, true);

            // Outputting JSON data in Decoded form
            var_dump($decodedData);
        }

        // Closing curl
        curl_close($curl);
?>
    </div>
</body>
</html>