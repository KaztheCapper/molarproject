@extends('layouts.app')

@section('content')
    <h1>My Patients</h1>

    @foreach ($patients as $patient)
        <div>
            <li>
                <a href="/mypatients/{{ $patient->id }}"> {{ $patient->name }}</a>
            </li>

        </div>
    @endforeach

@stop