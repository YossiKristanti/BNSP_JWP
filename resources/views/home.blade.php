@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Beranda</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <!-- form menambah postingan di twitter -->
                    <form class="" action="{{ route('addpost') }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <!--Text area untuk menginputkan tweet -->
                            <textarea placeholder="Apa Kabar?" class="form-control" id="post" name="post" rows="3"></textarea>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <!-- Button untuk menyimpan s -->
                            <button type="submit" class="btn btn-primary me-md-2">Tweet</button>
                        </div>
                    </form>
                </div>
                <div class="card-header">
                    <div class="table-responsive-xxl">
                        <tbody>
                            @foreach($tweet as $tweet)
                            <tr>
                                <td class="">{{$tweet->post}}</td>
                                <td>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <form href="/home/{{$tweet->id}}/delete" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>

                                        <a href="/home/{{$tweet->id}}" class="btn btn-warning">Edit</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection