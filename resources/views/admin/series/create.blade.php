@extends('layouts.admin')

@section('content')
    <div class="card">
        <form action="{{route('series.index')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
        <div class="card-header">
            <strong>Create Series</strong>
        </div>
        <div class="card-body card-block">

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="title" class=" form-control-label">Title name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="title" name="title" placeholder="Text" class="form-control">
                        <small class="form-text text-muted">Title</small>
                    </div>
                </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="slug" class=" form-control-label">slug</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="slug" name="slug" placeholder="" class="form-control">
                    <small class="form-text text-muted">slug</small>
                </div>
            </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Image</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="image" name="image" placeholder="" class="form-control">
                        <small class="form-text text-muted">Image</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" id="description" rows="5" placeholder="Content..." class="form-control"></textarea>
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