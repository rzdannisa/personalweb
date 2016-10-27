@extends('app')
@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data article</h3>
    </div><!-- /.box-header -->
        <div class="box-body">
            <table class="for_datatable table table-bordered table-hover">
                <thead>
                    <tr>
                    <th>No.</th>
                    <th>Tags</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Create By</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
                @foreach($all as $article)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $article->tags}}</td>
                    <td>{{ $article->title}}</td>
                    <td>{{ substr($article->content),0,100 }}</td>
                    <td>{{ $article->created_by }}</td>
                    <td>
                    <a href="{{ url('article/edit/'.$article->slug)}}"><i class="fa fa-pencil-square-o"></i> Edit </a>
                    
                    <a onclick="return confirm('Yakin hapus?')" href="{{ url('article/delete/'.$article->slug)}}"><i class="fa fa-trash"></i> Delete </a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
</div>

@endsection