@extends('layouts.app')

<!--Author @ Ryan Kennell-->

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4"></div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <form class="form-horizontal" id="form1">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Account Information</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Name</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" value="{{ Auth::user()->name }}" required="" size="35">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Email</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" value="{{ Auth::user()->email }}" required="" size="35">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Address</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" value="{{ Auth::user()->address }}" required="" size="35">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Created On</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput" type="text" value="{{ Auth::user()->created_at }}" size="35" readonly>

                            </div>
                        </div>

                    </fieldset>
                    <button type="submit" form="form1" value="Submit">Submit</button>
                </form>
            </div>
        </div>
    </div>



@endsection