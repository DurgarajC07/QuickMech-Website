@extends('layouts.app-master')

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>

<div class="container">
        <h1 align='center'>Mechanic Information</h1>
    </div><br>

<div class="card">
  <img src="img/m2.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>MR. JHON</b></h4> 
    <p>Mechanic (5 years Experience.)</p>
    <p>Time: Within 30 mins</p>
    <p><b>Phone no: 9815647230</b></p> 
  </div>
</div>

</body>
</html> 


@endsection