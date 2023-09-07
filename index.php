
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
  <title>Php Hotels</title>
</head>

<body>
    <div class="container">
      <!--Filters-->
      <div class="mb-5">
      <form method="GET">
      <div>
        <h1 class="text-center mt-3">Php Hotels</h1>
        <!--Parcheggio-->
        <div>
          <label class="fw-bold mt-5">Parking</label>
          <select name="park" class="form-select" aria-label="Default select example">
            <option selected value="all">All</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
          </select>
        </div>
        <!--Voto-->
        <div>
          <label class="fw-bold mt-5">Rating >=</label>
          <select name="rate" class="form-select" aria-label="Default select example">
            <option value="1">1 star</option>
            <option value="2">2 stars</option>
            <option value="3">3 stars</option>
            <option value="4">4 stars</option>
            <option value="5">5 stars</option>
          </select>
        </div>
        <div class="d-flex justify-content-center"><button type="submit" class="btn btn-primary mt-2">Submit</button></div>
      </div>
    </form>
      </div>

      <!--Hotels-->
      <div>
      <h2 class="mt-4 mb-2">Results:</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Parking</th>
            <th scope="col">Rating</th>
            <th scope="col">Distance from center</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($hotels as $hotel){ 
          if ( 
              $_GET["park"] == $hotel ["parking"] && $_GET["rate"] <= $hotel["vote"]
              || $_GET["rate"] <= $hotel["vote"] && $_GET ["park"]== "all"
            ){
          ?>
          <!-- -->
          <tr>
            <!--Nomi-->
            <td><?php echo $hotel["name"] ?></td>
            <!--Parcheggio-->
            <td><?php echo $hotel["parking"] ? "Yes" : "No"  ?></td>
            <!--Voto-->
            <td><?php echo $hotel["vote"] ?></td>
            <!--Distanza dal centro-->
            <td><?php echo $hotel["distance_to_center"] ?> km</td>
          </tr>
        <?php } }?>
        </tbody>
      </table>
      </div>
    </div>
  
</body>

</html>