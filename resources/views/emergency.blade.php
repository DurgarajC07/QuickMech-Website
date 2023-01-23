@extends('layouts.app-master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>
    <div class="container">
        <h1 align='center'>Emergency Form</h1>
    </div>


      <form action="{{ url('add-emergency') }}" method="POST" accept-charset="UTF-8">
          {{csrf_field()}}
      <div class="modal-body">
                <div class="mb-3">
                <input class="form-check-input" type="radio" name="vechiletype" value="car">
                <label >
                    Car
                </label>
                </div>
                <div class="mb-3">
                <input class="form-check-input" type="radio" name="vechiletype" value="bike">
                <label >
                    Bike
                </label>
                </div>
                <div class="mb-3">
                <label>Company Name</label>
                <input type="text" class="form-control" placeholder="for example(i.e Honda)" name="company">
                </div>
                <div class="mb-3">
                <label >Model Name</label>
                <input type="text" class="form-control"  placeholder="for example(i.e Hundai i10)" name="model">
               </div>
            
                <div class="mb-3">
                <label for="date">Choose Date: </label>
                <input type="date" value="<?php echo $today; ?>" class="form-control" id="date" name="date"  min="2022-01-01" max="2022-12-31">
                </div>

                <div class="mb-3">
                <label >Current Address</label>
                <input type="text" class="form-control"  placeholder="Enter your current address" name="current_address">
                </div>

                <div class="mb-3">
                <label >Problem</label>
                <input type="text" class="form-control"  placeholder="write your problem here..." name="problem">
                </div>

            </div>
            <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Add Modal -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>    
@endsection