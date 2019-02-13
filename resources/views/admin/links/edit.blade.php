@extends('layouts.admin')

@section('content')
    <div class="card">
        <form action="{{route('link.update',$link->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="card-header">
                <strong>Edit  Link   to : <a href="{{route('episode.edit',$link->episode->id)}}">{{$link->episode->title}}</a></strong>
            </div>
            <div class="card-body card-block">

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="title" class=" form-control-label">Link URL</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" value="{{$link->url}}" id="title" name="url" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">url</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="domain" class=" form-control-label">Domain</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="domain" name="domain" value="{{$link->domain}}" placeholder="domain" class="form-control">
                        <small class="form-text text-muted">url</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="selectSm" class=" form-control-label">Active?</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="isactive" id="SelectLm" class="form-control-sm form-control">
                            <option value="0">No</option>
                            <option value="1" selected>Yes</option>
                        </select>
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