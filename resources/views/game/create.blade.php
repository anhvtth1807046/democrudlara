@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>New</h3>
            </div>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Whoop!</strong> Loremipisum. <br>
                <ul>
                    @foreach($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('game.store')}}" method="post">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-12">
                    <strong>Name :</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="col-md-12">
                    <strong>Price :</strong>
                    <input type="text" name="price" class="form-control" placeholder="Price">
                </div>
{{--                <div class="col-md-12">--}}
{{--                    <strong>Description</strong>--}}
{{--                    <textarea class="form-control" placeholder="Description" name="description" rows="8" cols="80"></textarea>--}}
{{--                </div>--}}
                <div class="col-md-12">
                    <a href="{{route('game.index')}}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>
        </form>


    </div>

@endsection
