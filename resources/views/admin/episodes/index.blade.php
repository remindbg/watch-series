@extends('layouts.admin')

@section('content')
    <div class="table-responsive table--no-card m-b-30">
        <a class="btn btn-block btn-success" href="{{route('episode.create',$season->id)}}">Create new Episode for : {{$season->title}}</a>
        <table class="table table-borderless table-striped table-earning">
            <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>date added</th>
                <th>Season</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($season->episodes as $episode)
                <tr>
                    <td>{{$episode->id}}</td>
                    <td>{{$episode->title}}</td>
                    <td>{{$episode->created_at}}</td>
                    <td><a href="{{route('season.edit',$episode->season->id)}}">{{$episode->season->title}}</a></td>
                    <td>
                        <a href="{{route('link.index',$episode->id)}}" class="btn btn-sm btn-success">Links</a>
                    </td>
                    <td>
                        <a href="{{route('episode.edit',$episode->id)}}" class="btn btn-sm btn-info">Edit</a>
                    </td>
                    <td>
                        <form  action="{{route('season.destroy',$episode->id)}}" method="POST">
                            @csrf
                            @method('post')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yes?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop