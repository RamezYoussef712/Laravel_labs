@extends('layouts.app')


@section('title') Create @endsection

@section('content')
<div class="container mt-5"">
    <div class="card border-dark mb-3">
        <div class="card-header">Post Info</div>
        <div class="card-body text-dark">
        <h5 class="card-title">Title:</h5>
        <p class="card-text fs-4 fw-bold">{{$post['title']}}</p>
        <h5 class="card-title">Posted by:</h5>
        <p class="card-text fs-4 fw-bold">{{$post['posted_by']}}</p>
        <h5 class="card-title">Created at:</h5>
        <p class="card-text fs-4 fw-bold">{{$post['created_at']}}</p>
        </div>
    </div>
</div>

    @endsection