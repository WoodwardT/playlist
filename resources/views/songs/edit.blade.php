@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="form-content">
            <form method="POST" action="/songs/{{$song->id}}">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$song->name}}">
                    </div>
                </div>
                <br>
                <input class="btn btn-primary" type="submit" value="Submit">
                <a class="btn btn-warning mx-1" href="/songs/">Cancel</a>
        </div>
        </form>
    </div>


@endsection
