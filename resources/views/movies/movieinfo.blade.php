@extends('layouts.app')

<!--Author @ Ryan Kennell-->

@section('content')

    <div class="bg-info">
        <div class="pt-3 text-center card-title text-white">
            <h2> {{ $data[0]['title'] }} </h2>
        </div>

        <div class="text-center card-body text-white">
            <p>{{ $data[0]['rating'] }} | {{ $data[0]['length'] }} minutes | {{ $data[1]['name'] }}</p>
        </div>
    </div>

    <div class="img-thumbnail">
        <div class="text-center">
            <img border="5" alt="cover photo" src="/images/{{$data[0]['coverPhoto'] }}" width="225" height="375">

        </div>
    </div>

    <div class="container">
        <div class="pt-5 text-center">

            <div class="pb-3">
                <h2> Description </h2>
            </div>

            <div class="pl-5 pr-5 ml-5 mr-5 col-sm">
                <p> {{ $data[0]['description'] }}</p>
            </div>
        </div>


    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

    <footer class="page-footer bg-info">
        <div class="footer-copyright text-center py-3">© 2018 Copyright: YellowBucket Corporation</div>
    </footer>
@endsection
