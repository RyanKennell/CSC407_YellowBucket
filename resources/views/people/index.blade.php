@extends('layouts.app")

@section('content')

    <h1>People List</h1>

    <table class="table">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($people as $person)
            <tr>
                <td>{{ $person['firstname'] }}</td>
                <td>{{ $person['lastname'] }}</td>
                <td>{{ $person['email'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endsection