@extends('posts.layout')
  
@section('content')


    <h2>Post Detail</h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table-latitude">
               
                
                <thead>
                    <th>Post Title </th>
                    <th>Post Description</th>
                    <th>Posted Use</th>
                    <th>Poseted Date</th>
                </thead>
                <tbody>
                
                        <tr>
                            <td> {{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->status }}</td>
                            <td>{{ $post->created_at->format('d/m/Y') }}</td>
                            
                        </tr>
               
            </table>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
    {{-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post Title:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post Description:</strong>
                {{ $post->description }}
            </div>
        </div> --}}

@endsection