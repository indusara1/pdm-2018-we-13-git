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
    </div>



    @foreach($post as  $post)



    <header class="masthead" >
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $post->UserName}}</h1>

                        <span class="meta">Posted by
                <a href="#">{{ $post->UserName}}</a>
                on {{ $post->created_at}}</span>


                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {{ $post->Text}}
                </div>
            </div>
        </div>
    </article>


    <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4 col-md-offset-0">

            <form action="PostComment" method="POST">
                {!! csrf_field() !!}

                <div>
                    <label for="heading" >Add Comment</label>
                    <input  class="form-control"  value="{{ $post->id }}" name="PostId" placeholder="Enter Post Heading" type="hidden">

                </div>
                <br>

                <div >

                    <input  class="form-control"  value="{{ Auth::user()->id }}" name="UserId" placeholder="Enter Post Heading" type="hidden">
                </div>

                <div>

                    <input  class="form-control"  value="{{ Auth::user()->name }}" name="UserName" placeholder="Enter New Chat room Name" type="hidden">

                </div>

                <div>

                    <input type="text" class="form-control"    name="Comment" placeholder="Enter New Chat room Name">

                </div>


                <br>

                <button type="submit" class="btn btn-primary"  name="send">Create</button>


            </form>




        </div>


        <div class="col-md-4"></div>
    </div>

    @endforeach


    <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Comment </h3>
        </div>
    </div>
    @foreach($comment as  $comment)




    <div class="container">
        <div class="row">
            <div class="col-sm-12">

            </div><!-- /col-sm-12 -->
        </div><!-- /row -->
        <div class="row">
            <div class="col-sm-1">
                <div class="thumbnail">
                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                </div><!-- /thumbnail -->
            </div><!-- /col-sm-1 -->

            <div class="col-sm-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>{{ $comment->UserName}}</strong> <span class="text-muted">posted at {{ $comment->created_at}}</span>
                    </div>
                    <div class="panel-body">
                        {{ $comment->Comment}}
                    </div><!-- /panel-body -->
                </div><!-- /panel panel-default -->
            </div><!-- /col-sm-5 -->
    </div><!-- /container -->



    @endforeach

@endsection

