@extends('app')
@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Tags</h3>
    </div><!-- /.box-header -->
        <div class="box-body">
            <table class="for_datatable table table-bordered table-hover">
                <thead>
                    <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Create By</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
                @foreach($all as $tags)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $tags->name}}</td>
                    <td>{{ $tags->created_by }}</td>
                    <td>
                    <a href="{{ url('tags/edit/'.$tags->id)}}"><i class="fa fa-pencil-square-o"></i> Edit </a>
                    
                    <a onclick="return confirm('Yakin hapus?')" href="{{ url('tags/delete/'.$tags->id)}}"><i class="fa fa-trash"></i> Delete </a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
</div>

@endsection