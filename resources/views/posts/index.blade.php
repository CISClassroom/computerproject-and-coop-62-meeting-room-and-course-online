@extends('layouts.app-admin')
@section('content')

        <!-- <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Posts</h3></div>
                        <div class="panel-heading">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</div>
                        @foreach ($posts as $post)
                            <div class="panel-body">
                                <li style="list-style-type:disc">
                                    <a href="{{ route('posts.show', $post->id ) }}"><b>{{ $post->title }}</b><br>
                                        <p class="teaser">
                                        {{  str_limit($post->body, 100) }} {{-- Limit teaser to 100 characters --}}
                                        </p>
                                    </a>
                                </li>
                            </div>
                        @endforeach
                        </div>
                        <div class="text-center">
                            {!! $posts->links() !!}
                        </div>
                    </div>
                </div>
            </div> -->

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
        <h2>กระดานข่าวสาร</h2>
            <table class="table table-striped">
                <div class="panel-heading">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</div> <hr>

                    @foreach ($posts as $post)
                    
                <div class="panel-body">
                <li style="list-style-type:disc">
                    <a href="{{ route('posts.show', $post->id ) }}"><b>{{ $post->title }}</b><br>
                        <p class="teaser">

                            {{  str_limit($post->body, 100) }} {{-- Limit teaser to 100 characters --}}
                            
                        </p>
                        </a>
                    </li>
                </div>
                        @endforeach

                </div>

                <div class="text-center">

                        {!! $posts->links() !!}

                </div>
                
            </table>
            </div>
        </div>
    </div>

    @endsection