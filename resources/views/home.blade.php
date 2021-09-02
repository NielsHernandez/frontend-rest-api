@extends('componet')
@section('titulo', 'All Employees')



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
@section('contenido')
<div class="container">
    <br>
    <a class="btn-floating Indigo z-depth-0" href="{{url('employee/create')}}"><i class="material-icons">add_box</i></a>
        <table class="table">
            <tr>
                <th>No</th>
                <th>employeeCode</th>
                <th>firstName</th>
                <th>lastName</th>
                <th></th>
                <th></th>
               
            </tr>
            @foreach($empleado as $e)

            <tr>
            <td>{{ $e->id }}</td>
                <td>{{ $e->employeeCode }}</td>
                <td>{{ $e->firstName }}</td>
                <td>{{ $e->lastName }}</td>
                <td>
                <form method="post" action="{{url('employee', $e->id)}}">
		        @csrf()
		        @method('DELETE')
                <div class="input-field">
                <button class="btn-floating red z-depth-0"><i class="material-icons">delete</i></button>
                </div>
	            </form>
                </td>

                <td>
                <a class="btn-floating yellow darken-2 z-depth-0" href="{{url('employee/' . $e->id. '/edit')}}"><i class="material-icons">create</i></a>


                </td>
                
             
            </tr>

@endforeach
        </table>
    </div>
@endsection

   
    



</body>

</html>


