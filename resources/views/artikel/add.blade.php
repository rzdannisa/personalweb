@extends('app')

@section('content')
  <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Add New Article</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{{url('article/save')}}" enctype="multipart/form-data" class="form-horizontal">
                  <div class="box-body">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Select Tag</label>
                      <div class="col-sm-10">
                      <select name="tag" class="form-control">
                      @foreach($tags as $tag)
                        <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                      @endforeach
                      </select>
                     </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                      <div class="col-sm-10">
                        <input name="title" type="text" class="form-control" id="inputEmail3" placeholder="Title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Content</label>
                      <div class="col-sm-10">
                        <input name="content" type="text" class="form-control" id="inputPassword3" placeholder="Content">
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->

@endsection