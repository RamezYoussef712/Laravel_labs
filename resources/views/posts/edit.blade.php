@extends('layouts.app')


@section('title') Create @endsection

@section('content')

<div class="container mt-5 col-7">
    <form action="{{route('posts.update', ['post' => $post['id']])}}" method="POST">
        @csrf
    <div class="mb-3">
        <label for="titleInput" class="form-label">Title</label>
        <input type="text" class="form-control" id="titleInput" placeholder="" value="{{$post['title']}}">
      </div>
      <div class="mb-3">
        <label for="descriptionTextarea" class="form-label">Description</label>
        <textarea class="form-control" id="descriptionTextarea" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="creatorMenu" class="form-label">Post Creator</label>
        <select class="form-control" id="creatorMenu" aria-label="Default select example">
                <option value="{{$post['id']}}" selected>{{$post['posted_by']}}</option>
          </select>
      </div>
      <button class="btn btn-success mt-3">Update</button>
    </form>
</div>


    @endsection