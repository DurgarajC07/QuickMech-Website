@extends('layouts.app-master')

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="shortcut icon" type="image/png" href="img/favicon.png">

<style>
div {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.about-section {
  padding: 100px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}



</style>
</head>
<body>
<div class="about-section">
  <h1>About QuickMech</h1><br>
  <p>QuickMech is a one-stop online solution to find the best mechanic for all the repair and services of your car and bike. Our services include anything and everything related to cars and bikes, from general service, painting, custom services like vehicle not starting jumpstart and many more.

</p><br><br><br>
  <h1>Our Mission</h1><br>
  <p>We at QuickMech manage end to end operation of vehicle service and spare parts supply to provide professional and value for money service.</p><br><br><br>
  <h1>Our Vision</h1><br>
  <p>A vision to organize & standardize the world automotive service needs and provide a quick transparent, quality and affordable solution to our customer.</p>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>


@endsection