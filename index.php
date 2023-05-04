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

    // faccio una condizione in modo da poter filtrare solo gli hotel che dispongono di un parcheggio.
    $filtered_hotels = [];

    if($_GET["hotel_con_parcheggio"] == 1){
        foreach ($hotels as $hotel) {
            if($hotel["parking"] === true){
                $filtered_hotels[] = $hotel;
            }
        }
    }else{
        $filtered_hotels = $hotels;
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
    <title>PHP-HOTEL</title>
</head>
<body>

<div class="container">
    <form action="index.php" method="GET">
        <input type="checkbox" id="hotel_con_parcheggio" name="hotel_con_parcheggio" value="1">
        <label for="hotel_con_parcheggio">Hotel con parcheggio</label>
        <input type="submit" value="filtra">
    </form>
   
    <h1 class="text-center my-4" >TABELLA HOTELS</h1>
    <table class="table">
  <thead>
    <tr>
      
    <?php foreach ($hotels[0] as $key => $value){?>
      <th scope="col"><?php echo ucfirst($key) ?></th>
      <?php } ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($filtered_hotels as $hotel){?>
    <tr>
      <td><?php echo $hotel["name"] ?></td>
      <td><?php echo $hotel["description"] ?></td>
      <td><?php echo $hotel["parking"] ?></td>
      <td><?php echo $hotel["vote"] ?></td>
      <td><?php echo $hotel["distance_to_center"] ?></td>

    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
    
</body>
</html>

