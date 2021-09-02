@extends('componet')
@section('titulo', 'Edit')
@section('contenido')
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
        <div class="card-image">
            <img src="https://www.teahub.io/photos/full/183-1833773_employees-and-wellness.jpg" alt="wallpaper">
        </div>
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

@endsection