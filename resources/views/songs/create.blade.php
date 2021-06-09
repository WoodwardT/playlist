@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="form-content">
            <form method="POST" action="/songs">
                @csrf

                <div class="row">
                    <div class="form-group col-6">
                        <label for="title">Name</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="name" name="name" value="">
                    </div>
                </div>
                <br>
                <input class="btn btn-primary" type="submit" value="Submit">
                <a class="btn btn-warning mx-1" href="/songs/">Cancel</a>
            </form>
        </div>

    </div>

@endsection
