@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit tweet</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- Menampilkan form edit post -->
                    <form class="" action="edit/{{$post->id}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="mb-3">

                            <textarea type="text" class="form-control" id="post" name="post" value="{{$post->post}}" rows="3"></textarea>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                            <button type="submit" class="btn btn-primary me-md-2">Update</button>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection