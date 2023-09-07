<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>php-hotel</title>
</head>

<body>

    <div class="container">

        <h1 class="mt-5 text-danger text-center">Hotels</h1>

        <table class="table w-75 m-auto">
            <thead>
                <tr>
                <?php foreach ($hotels[0] as $key => $data) { ?>
                <th scope="col"><?php echo $key ?></th>
                <?php } ?>
                </tr>     
            </thead>
            <tbody>
            <?php foreach ($hotels as $key => $hotel) { ?>
                <tr>
                    <th scope="row"><?php echo $hotel["name"] ?></th>
                    <td><?php echo $hotel["description"] ?></td>
                    <td><?php echo ($hotel["parking"] === true) ? "si" : "no" ?></td>
                    <td><?php echo $hotel["vote"] ?></td>
                    <td><?php echo $hotel["distance_to_center"] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>

</body>

</html>