@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>Danh sách Game</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-sm btn-success" href="{{ route('game.create')  }}">Create</a>
            </div>
        </div>
        @if($message = \Illuminate\Support\Facades\Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
        <table class="table table-hover table-sm">
            <tr>
                <th width="50px"><b>No.</b></th>
                <th width="150px"><b>Name</b></th>
                <th width="150px"><b>Price</b></th>
{{--                <th><b>Decription</b></th>--}}
                <th width="180px"><b>Action</b></th>
            </tr>

            @foreach($games as $game)
                <tr>
                    <td><b>{{++$i}}.</b></td>
                    <td>{{$game->name}}</td>
                    <td>{{$game->price}}</td>
{{--                    <td>{{$game->description}}</td>--}}
                    <td>
                        <form action="{{ route('game.destroy', $game->id)}}" method="post">
                            <a class="btn btn-sm btn-success" href="{{ route('game.show', $game->id) }}">Show</a>
                            <a class="btn btn-sm btn-warning" href="{{ route('game.edit', $game->id) }}">Edit</a>
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
{!! $games->links() !!}
    </div>
@endsection
