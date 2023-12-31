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

    $parking= isset($_GET['parking']) && $_GET['parking'] == 'on';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php hotel</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

  <div class="container mt-5">

    <form action="/php-hotel" method="GET">
      <div class="mb-3 form-check">
        <input type="checkbox" name="parking" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Parking</label>
      </div>
     
      <button type="submit" class="btn btn-primary text-center ">Submit</button>
    </form>

    <table class="table mt-5 ">
      <thead>
        <tr>
        
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Parking</th>
          <th scope="col">Vote</th>
          <th scope="col">Distance to center</th>
        </tr>
      </thead>
      <tbody>
       
      <?php foreach ($hotels as $hotel) { ?>

        <tr>
          <?php if (!$parking || ($parking && $hotel['parking'])) {?>
            <td> <?php echo $hotel['name'] ?> </td>
            <td> <?php echo $hotel['description'] ?> </td>
            <td> <?php echo $hotel['parking'] ?> </td>
            <td> <?php echo $hotel['vote'] ?> </td>
            <td> <?php echo $hotel['distance_to_center'] ?> </td>  
          <?php } ?>
        </tr>
        
      <?php } ?>
      
      </tbody>
    </table>
  </div>

  
</body>
</html>