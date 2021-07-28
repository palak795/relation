<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title></title>

</head>

<body>


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if ($errors->any())
<div class="alert alert-success">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<h1 align="center">User Login</h1>


	<form class="form" method="post" action="{{route('user.store')}}">

  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
  </div><br>

   <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div><br>

   <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
  </div><br>


 <div class="form-group">

                  <h1>Choose The Roles</h1>

                    <label for="eventRegInput2"> Roles </label>

                    <span class ="required-field"></span>

                    <select class="js-example-basic-multiple" name="roles[]" multiple="multiple" style="width:200px;">

                      @foreach($roles as $role)
                      
                      <option value="{{$role->id}}">{{$role->name}}</option>

                      @endforeach

                    </select>
              </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

  <script type="text/javascript">
    
    $(document).ready(function() {

    $('.js-example-basic-multiple').select2();
    
});


  </script>

 <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name = "submit" value="submit">Submit</button>
                </div>

  
</form>


