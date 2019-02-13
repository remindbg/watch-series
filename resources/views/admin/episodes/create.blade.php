@extends('layouts.admin')

@section('content')
    <div class="card">
        <form action="{{route('episode.store',$season->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="card-header">
                <strong>Create new Episode   to : <a href="{{route('season.edit',$season->id)}}">{{$season->title}}</a></strong>
            </div>
            <div class="card-body card-block">

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="title" class=" form-control-label">Episode Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="title" name="title" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Title</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="number" class=" form-control-label">Season Number</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="number" name="number" placeholder="" class="form-control">
                        <small class="form-text text-muted">Number[1-x]</small>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
        </form>
    </div>
@stop