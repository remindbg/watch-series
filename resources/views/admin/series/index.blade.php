@extends('layouts.admin')

@section('content')
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>date added</th>
                <th>Series Seasons</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($allseries as $serie)
                <tr>
                    <td>{{$serie->id}}</td>
                    <td>{{$serie->title}}</td>
                    <td>{{$serie->created_at}}</td>
                    <td><a href="/admin2/{{$serie->id}}/seasons" class="btn btn-success">Seasons</a></td>
                    <td>
                        <a href="{{route('series.edit',$serie->id)}}" class="btn btn-sm btn-info">Edit</a>
                    </td>
                    <td>
                        <form  action="{{route('series.destroy',$serie->id)}}" method="POST">
                            @csrf
                            @method('destroy')
                            <button type="submit" class="btn btn-sm btn-danger"
                               onclick="confirm('Yes?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop