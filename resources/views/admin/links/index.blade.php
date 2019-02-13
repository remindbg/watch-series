@extends('layouts.admin')

@section('content')
    <div class="table-responsive table--no-card m-b-30">
        <a class="btn btn-block btn-success" href="{{route('link.create',$episode->id)}}">Create new Link for : {{$episode->title}}</a>
        <table class="table table-borderless table-striped table-earning">
            <thead>
            <tr>
                <th>id</th>
                <th>url</th>
                <th>domain</th>
                <th>created_at</th>
                <th>Active?</th>
                <th>Episode</th>
                <th>Edit</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($episode->links as $link)
                <tr>
                    <td>{{$link->id}}</td>
                    <td>{{str_limit($link->url,'15','...')}}</td>
                    <td>{{$link->domain}}</td>
                    <td>{{$link->created_at}}</td>
                    <td>@if($link->isactive)Yes @else No @endif</td>
                    <td><a href="{{route('episode.edit',$link->episode->id)}}">{{$link->episode->title}}</a></td>

                    <td>
                        <a href="{{route('link.edit',$link->id)}}" class="btn btn-sm btn-info">Edit</a>
                    </td>
                    <td>
                        <form  action="{{route('link.destroy',$link->id)}}" method="POST">
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