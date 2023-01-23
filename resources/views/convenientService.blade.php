@extends('layouts.app-master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConvenientService</title>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
<div class="testimonials">
      <div class="inner">
        <h1>Services We Offer</h1>
        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="product-top">
              <img src="img/c1.jpg" alt="">
              <div class="name"><b>Basic Service</b></div>
              <p>- Every 5000 Kms / 3 Months <br>
              - Take 3 Hours <br>
              - 1 Month Warrenty <br>
              - Includes 3 Services <br>
             <b>₹ 1,999</b> <br>
             <a href="ser" ><button class="btn btn-primary">Book</button></a>
              </p>
            </div>
          </div>

          <div class="col">
            <div class="product-top">
              <img src="img/c2.jpg" alt="">
              <div class="name"><b>Standard Service</b></div>
              <p>- Every 5000 Kms / 3 Months <br>
              - Take 4 Hours <br>
              - 1 Month Warrenty <br>
              - Includes 5 Services <br>
             <b>₹ 2,999</b> <br>
             <a href="ser" ><button class="btn btn-primary">Book</button></a>
              </p>
            </div>
          </div>

          <div class="col">
            <div class="product-top">
              <img src="img/c3.jpg" alt="">
              <div class="name"><b>High Service</b></div>
              <p>- Every 5000 Kms / 3 Months <br>
              - Take 6 Hours <br>
              - 1 Month Warrenty <br>
              - Includes 7 Services <br>
             <b>₹ 4,999</b><br>
             <a href="ser" ><button class="btn btn-primary">Book</button></a>
              </p>
            </div>
          </div>
      </div>
    </div>


</body>
</html>
@endsection