@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th>First Name</th>
                <th>address</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $user)

                <tr>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['address'] }}</td>
                    <td>{{ $user['email'] }}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
@endsection