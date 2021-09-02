<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Invalid Log in</title>
</head>

<body>

<nav class="nav-waper indigo">
    <div class="container">
    <span class="brand-logo">CRM</span>
    <ul class="right">
<li><a href="#"><?php if(isset($_SESSION["usuario"])){ echo $_SESSION["usuario"];} ?></a></li>
<?php if(isset($_SESSION["usuario"])){ ?>

<li><a href="{{url('accesos/')}}">Accesos</a>
<li><a href="{{url('employee/')}}">Empleados</a>

<?php } ?>

<li><a href="#login" class="modal-trigger">Log In</a></li>
<li><a href="{{url('/login')}}" class="btn-floating indigo darken-4 z-depth-0"><i class="material-icons">person_outline</i></a></li>
</ul>
    </div>
</nav>

<div class="container">
    <div class="card">
        <h2 class="center-aling">
            Unable to autheticate, please try again
        </h2>
        <div class="card-content">
            <span class="card-title">UMG empleados</span>
        </div>
        <div class="card-action">
            <a href="#">About Us</a>
            <a href="#login" class="modal-trigger">Log In</a>

        </div>
    </div>
    <div class="modal" id="login">

    <div class="container">
    <br>
    <h4 class="center-align">Log In</h4>
    <div class="col s12 15 offset-12">
    <form action="{{url('/login')}}" method="post">
		@csrf()
            <div class="input-field">
                <i class="material-icons prefix">person_outline</i>
                <input type="text" name="user" placeholder="user" required>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">password</i>
                <input type="password" name="key" placeholder="password" required>
            </div>


            <div class="input-field">
                <input class="btn" type="submit" value="Log In">
            </div>

    
        </form>
    </div>
</div>

    </div>


</div>
<script>
    $(document).ready(function(){

        $('.modal').modal();

    });
</script>
   


</body>

</html>
