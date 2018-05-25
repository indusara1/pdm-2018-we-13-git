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
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">All Posts</div>




                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-condensed">
                            <thead>
                            <tr>


                                <th><strong>Post Id</strong></th>
                                <th><strong>Post Name</strong></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($post as  $post)

                                <tr>


                                    <td>{{ $post->id}}</td>
                                    <td><a href="/postpage/{{$post->id}}" class="sign">{{ $post->Heading }}</a></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>







                </div>






            </div>
        </div>
    </div>


    </div>
@endsection
