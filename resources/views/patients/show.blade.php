@extends('layouts.app')

@section('content')

    <h1>{{$patient->name}}</h1>
    <ul class="list-group">
        @foreach($patient->appointments as $appointment)
            <li class="list-group-item">{{$appointment->Result}}</li>
        @endforeach
    </ul>
    <hr>
         <h3>Submit Appointment Result</h3>
    </hr>


     <form method = "POST" action="/mypatients/{{$patient->id}}/appointments">
         {{ csrf_field() }}
         <div class="form-group">
            <textarea name="result" class="form-control"></textarea>

        </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit Result</button>
            </div>

    </form>
    </div>

@stop