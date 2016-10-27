@extends('app')

@section('content')
  <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Add New Tag</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{{url('tags/save')}}" class="form-horizontal">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="name">
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