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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <title>PHP - Hotel</title>
</head>
<body>

    <div class="container my-5">
        <h1 class="text-center">HOTELS</h1>

        <div class="my-5">
            <table class="table table-hover">

                <thead>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Hotel Description</th>
                    <th scope="col">Parking Availability</th>
                    <th scope="col">Hotel Vote</th>
                    <th scope="col">Distance From the City Centre</th>
                </thead>

                <tbody>

                    <tr>
                     
                        <?php foreach($hotels as $hotel) { ?>

                            <!-- nome -->
                            <td>
                                <?php echo $hotel['name']; ?>
                            </td>

                            <!-- descrizione -->
                            <td>
                                <?php echo $hotel['description']; ?>
                            </td>

                            <!-- parcheggio  -->
                            <td>
                                <?php echo $hotel['parking'] ? 'Yes' : 'No'; ?>
                            </td>

                            <!-- voto / 5 -->
                            <td>
                                <?php echo $hotel['vote']; ?> / 5
                            </td>

                            <!-- tot km -->
                            <td>
                                <?php echo $hotel['distance_to_center']; ?> km
                            </td>
                    </tr>

                        <?php } ?>

                </tbody>
            </table>

        </div>
        
    </div>

    <!-- Bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>