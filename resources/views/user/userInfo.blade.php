@extends('layouts.app')

<!--Author @ Ryan Kennell-->

@section('content')
    <div id="snackbar" >Account Information Updated</div>

    <div class="container">
        <div class="row">
            <div class = "col-md-6 text-center">
                <form method="post" class="form-horizontal shadow-lg pb-3" id="form1">
                    {{ csrf_field() }}
                    <fieldset>

                        <!-- Form Name -->
                        <div align="center">
                            <legend>Account Information</legend>
                        </div>

                        <!-- Text input-->
                        <div class="form-group" align="center">
                            <label class="col-md-6 control-label text-left" for="textinput">Name</label>
                            <div class="col-md-6">
                                <input id="textinput" name="name" type="text" value="{{ Auth::user()->name }}" required="" size="35">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group" align="center">
                            <label class="col-md-6 control-label text-left" for="textinput">Email</label>
                            <div class="col-md-6">
                                <input id="textinput" name="email" type="text" value="{{ Auth::user()->email }}" required="" size="35">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group" align="center">
                            <label class="col-md-6 control-label text-left" for="textinput">Address</label>
                            <div class="col-md-6">
                                <input id="textinput" name="address" type="text" value="{{ Auth::user()->address }}" required="" size="35">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group" align="center">
                            <label class="col-md-6 control-label text-left" align="left" for="textinput">Created On</label>
                            <div class="col-md-6">
                                <input id="textinput" name="created_at" type="text" value="{{ Auth::user()->created_at }}" size="35" readonly>

                            </div>
                        </div>

                    </fieldset>

                        <button onclick="myFunction()" type="submit" form="form1" value="Submit" align="center">Submit Changes</button>
                </form>

                <div class="m-3 pt-5">
                    <h2> Movie Reviews by {{ Auth::user()->name }}</h2>
                </div>

                <div class="text-body shadow-lg">
                    @for($i = 0; $i < count($data[4]); $i ++)

                        @for($y = 0; $y < count($data[1]); $y ++)
                            @if($data[4][$i]['movie_id'] == $data[1][$y]['id'])
                                <h4><b> {{ $data[1][$y]['title'] }}</b></h4>
                            @endif
                        @endfor

                        @for($x = 0; $x < $data[4][$i]['rating']; $x ++)
                            <span class="fa fa-star checked"></span>
                        @endfor

                        @for($x = 5; $x > $data[4][$i]['rating']; $x --)
                            <span class="fa fa-star"></span>
                        @endfor

                        <p> {{ $data[4][$i]['review'] }}</p>

                        <br>
                    @endfor
                </div>




            </div>

            <!-- Right Column-->
            <div class = "col-md-6 text-center">

                <h1> Movies Rented</h1>

                <table class="table shadow-lg">
                    <thead>
                    <tr>
                        <th>Movie</th>
                        <th>Date Rented</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for ($i = 0; $i < count($data[0]); $i++)
                        <tr>
                            @for ($r = 0; $r < count($data[3]); $r++)
                                @if($data[3][$r]['id'] == $data[0][$i]['disc_id'])
                                    @for ($c = 0; $c < count($data[1]); $c++)
                                        @if($data[3][$r]['movie_id'] == $data[1][$c]['id'])
                                            <td>
                                                <img border="5" alt="cover photo" src="/images/{{$data[1][$c]['coverPhoto'] }}" width="75" height="125">
                                                <h5> {{ $data[1][$c]['title'] }} </h5>
                                            </td>
                                        @endif
                                    @endfor
                                @endif
                            @endfor

                            <td>{{ $data[0][$i]['checkout_time'] }}</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>

                <h1> Movies Rented History</h1>

                <table class="table shadow-lg">
                    <thead>
                    <tr>
                        <th>Movie</th>
                        <th>Date Rented</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for ($i = 0; $i < count($data[2]); $i++)
                        <tr>
                            @for ($r = 0; $r < count($data[3]); $r++)
                                @if($data[3][$r]['id'] == $data[2][$i]['disc_id'])
                                    @for ($c = 0; $c < count($data[1]); $c++)
                                        @if($data[3][$r]['movie_id'] == $data[1][$c]['id'])
                                            <td>
                                                <img border="5" alt="cover photo" src="/images/{{$data[1][$c]['coverPhoto'] }}" width="75" height="125">
                                                <h5> {{ $data[1][$c]['title'] }} </h5>
                                            </td>
                                        @endif
                                    @endfor
                                @endif
                            @endfor

                            <td>{{ $data[2][$i]['checkout_time'] }}</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 1000);
        }
    </script>

@endsection