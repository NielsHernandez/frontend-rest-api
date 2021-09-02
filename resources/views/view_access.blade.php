@extends('componet')
@section('titulo', 'Edit')
@section('contenido')

<div class="container">
    <h3>Entry Details employee</h3>
    <div class="col s12 15 offset-12">
   
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

    
        </form>
    </div>
</div>
@endsection