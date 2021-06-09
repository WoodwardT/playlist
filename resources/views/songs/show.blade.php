@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="form-content">
            <form method="POST" action="/songs">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="title">Name</label>
                        <input type="text" readonly  class="form-control" id="name" name="name" value="{{$song->name}}">
                    </div>
                </div>
                <br>
                <a class="btn btn-warning mx-1" href="/songs/">Cancel</a>
            </form>
        </div>

    </div>

@endsection
