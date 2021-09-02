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
    <h3>Employee Details</h3>
    <div class="col s12 15 offset-12">
    
    <a href="javascript:history.back()" class="btn-floating indigo z-depth-0"><i class="material-icons">arrow_back</i></a>

   <br>
    <form action="{{url('employee', $employee->id)}}" method="post">
		@csrf()
		@method('PUT')
        <input type="hidden" name="id" value="{{ $employee->id }}">
            <div class="input-field">
                <i class="material-icons prefix">person_outline</i>
                <input type="text" name="employeeCode" placeholder="employee code" value="{{ $employee->employeeCode }}" required>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">person_outline</i>
                <input type="text" name="firstName" placeholder="first Name" value="{{ $employee->firstName }}" required>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">person_outline</i>
                <input type="text" name="lastName" placeholder="last Name" value="{{ $employee->lastName }}" required>
            </div>
            <input type="hidden" name="user" value="{{ $employee->user }}">
            <input type="hidden" name="accesses" value="{{ $employee->accesses}}">

            <br>
            <div class="input-field">
                <input class="btn indigo" type="submit" value="edit">
            </div>

    
        </form>
    </div>
</div>
@endsection