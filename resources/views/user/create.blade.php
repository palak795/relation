<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src=
            "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--These jQuery libraries for
            chosen need to be included-->
        <script src=
            "https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
        <link rel="stylesheet"
            href=
            "https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css" />
        <!--These jQuery libraries for select2
            need to be included-->
        <script src=
            "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
        <link rel="stylesheet"
            href=
            "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" />
        <h1 align="center">User Login</h1>
        <form class="form" method="post" action="{{route('user.store')}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="name" name="name">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password" name="password">
            </div>
            <br>
            <h4>Selections using Select2</h4>
            <select class="js-example-basic-multiple"
                name="roles[]" multiple="multiple" 
                style="width: 800px;">
                @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
            <script>
                $(document).ready(function () {
                  //Select2
                  $(".js-example-basic-multiple").select2({
                    
                  });
                });
            </script>
            <br><br><br><br><br><br><br><br>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" name = "submit" value="submit">Submit</button>
            </div>
        </form>
        </body>
</html>