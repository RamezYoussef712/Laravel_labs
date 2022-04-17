@extends('layouts.app')

@section('title') Index @endsection

@section('content')
    
    <div class="d-flex justify-content-center">
        <a href="{{route('posts.create')}}" class="btn btn-success btn-lg mt-5 mb-3">Create Post</a>
    </div>

    <div class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted by</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post['id'] }}</th>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['posted_by'] }}</td>
                    <td>{{ $post['created_at']}}</td> 
                    <td>
                        <a href="{{route('posts.show', ['post' => $post['id']])}}" class="btn btn-primary">View</a>
                        <a href="{{route('posts.edit', ['post' => $post['id']])}}" class="btn btn-secondary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    
    @endsection