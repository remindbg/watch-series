@extends('layouts.admin')

@section('content')
    <div class="table-responsive table--no-card m-b-30">
        <a class="btn btn-block btn-success" href="{{route('season.create',$series->id)}}">Create new Season for : {{$series->title}}</a>
        <table class="table table-borderless table-striped table-earning">
            <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>date added</th>
                <th>Series</th>
                <th>Episodes</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($series->seasons as $season)
                <tr>
                    <td>{{$season->id}}</td>
                    <td>{{$season->title}}</td>
                    <td>{{$season->created_at}}</td>
                    <td><a href="{{route('series.edit',$series->id)}}">{{$series->title}}</a></td>
                    <td>
                        <a href="{{route('episode.index',$season->id)}}" class="btn btn-sm btn-success">EPISODES</a>
                    </td>
                    <td>
                        <a href="{{route('season.edit',$season->id)}}" class="btn btn-sm btn-info">Edit</a>
                    </td>
                    <td>
                        <form  action="{{route('season.destroy',$season->id)}}" method="POST">
                            @csrf
                            @method('post')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick=" return confirm('Yes?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop