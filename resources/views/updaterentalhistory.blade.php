@extends('layouts.main')
@section('content')


    <div class="container">
        <div class="row">
            <legend>Rental History</legend>
            <div   class="row">
                <div   class="col-md-6-lg-6">

                    <table class="table table-hover ">

                </div>
            </div>
            <thead>
            <th scope="col">id</th>
            <th scope="col">checkout_time</th>
            <th scope="col">checkin_time</th>
            <th scope="col">user_id</th>
            <th scope="col">disc_id </th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            </thead>

            <tbody>

            @for($i = 0; $i < count($data[0]); $i ++)

                <tr>
                    <td>{{$data[0][$i]->id}}</td>
                    <td>{{$data[0][$i]->checkout_time}}</td>
                    <td>{{$data[0][$i]->checkin_time}}</td>

                    @for($r = 0; $r < count($data[1]); $r ++)
                        @if($data[1][$r]['id'] == $data[0][$i]['user_id'])
                            <td>{{ $data[1][$r]['name'] }}</td>
                        @endif
                    @endfor

                    @for($r = 0; $r < count($data[2]); $r ++)
                        @if($data[2][$r]['id'] == $data[0][$i]['disc_id'])
                            @for($c = 0; $c < count($data[3]); $c ++)
                                @if($data[2][$r]['movie_id'] == $data[3][$r]['id'])
                                    <td>{{ $data[3][$r]['title'] }}</td>
                                @endif
                            @endfor
                        @endif
                    @endfor
                    <td>{{$data[0][$i]->created_at}}</td>
                    <td>{{$data[0][$i]->updated_at}}</td>
                </tr>
            @endfor
            </tbody>
            </table>
        </div>
    </div>

@endsection