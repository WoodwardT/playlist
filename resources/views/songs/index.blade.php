@extends('layouts.app')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <a class="btn btn-sm btn-outline-secondary" href="/songs/create">Create</a><br><br>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($songs as $song)
                    <div class="col">
                        <div class="card shadow-sm">
                        <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="https://images.unsplash.com/photo-1607274217259-4c20741b71c4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1053&q=80" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$song->name}}</text></svg> -->

                            <div class="carousel-item active">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://images.unsplash.com/photo-1607274217259-4c20741b71c4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1053&q=80" alt="">
                                <div class="carousel-caption">
                                    <h3>{{$song->name}}</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <form action="/songs/{{$song->id}}" method="POST">
                                            @method('DELETE')
                                            @csrf

                                            <a class="btn btn-sm btn-outline-secondary" href="/songs/{{$song->id}}">Show</a>
                                            <a class="btn btn-sm btn-outline-secondary" href="/songs/{{$song->id}}/edit">Edit</a>
                                            <button type="submit" title="delete" class="btn btn-sm btn-outline-danger" >Delete</button>
                                        </form>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
