@extends('componet')
@section('titulo', 'Accessess')

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
    <br>
        <table class="table">
            <tr>
                <th>employeeId</th>
                <th>acces Type</th>
                <th>Date</th>
                <th>Time</th>
                <th></th>
               
            </tr>
            @foreach($acceso as $e)

            <tr>
                <td>{{ $e->employeeId }}</td>
                <td>
                    @if ($e->accessTypeId == 1)

                {{ "entrada" }}
    
                    @endif

                    @if ($e->accessTypeId == 2)

{{ "salida" }}

    @endif

</td>
                
                <td>{{ date('d-M-y', strtotime($e->date)) }}</td>
                <td>{{ date('h:i:s A', strtotime($e->date)) }}</td>
                <td>
                <a class="btn-floating indigo waves-light z-depth-0" href="{{url('employee/' . $e->employeeId. '/edit')}}"><i class="material-icons">visibility</i></a>
                </td>
            </tr>
@endforeach
        </table>
    </div>
@endsection

   
    



</body>

</html>