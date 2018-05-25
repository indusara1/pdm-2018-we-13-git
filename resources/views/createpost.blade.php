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

                        You are logged in as admin.

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create new Post
                    </div>

                </div>



                <form action="Createnewpost" method="POST">
                    {!! csrf_field() !!}

                    <div>
                        <label for="heading" >Heading</label>
                        <input type="text" class="form-control"  name="Heading" placeholder="Enter Post Heading">

                    </div>
                    <br>

                    <div >
                        <label for="exampleFormControlTextarea1">Post Text</label>


                        <textarea class="form-control" type="text" name="Text" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Post Text"></textarea>
                    </div>

                    <div>

                        <input type="hidden"class="form-control"  value="{{ Auth::user()->name }}" name="UserName" placeholder="Enter New Chat room Name">

                    </div>

                    <div>

                        <input type="hidden" class="form-control"  value="{{ Auth::user()->id }}"  name="UserId" placeholder="Enter New Chat room Name">

                    </div>


                    <br>

                    <button type="submit" class="btn btn-primary"  name="send">Create</button>


                </form>













            </div>
        </div>
    </div>
    <br>

    <div class="container">
        @if(session()->has('notif'))
            <div class="row">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Notification </strong>{{session()->get('notif')}}
                </div>
            </div>

        @elseif(session()->has('error'))
            <div class="row">
                <div class="alert alert-warning alert-block">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Notification :   </strong>{{session()->get('error')}}
                </div>
            </div>
        @endif

        @yield('content')



    </div>

@endsection
