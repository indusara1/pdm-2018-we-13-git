@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                               <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as admin!
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>


                <div class="panel-body">

                    <button class="btn btn-primary"  style="width: 300px;" type="button" onclick="window.location='/Createpost'">Create post </button>
                    <br>
                    </br>

                    <button  style="width: 300px;"type="button" class="btn btn-primary"  onclick="window.location='/Allpost'">view all post</button>
                    <br>
                    </br>



                </div>

            </div>
        </div>
    </div>


</div>
@endsection
