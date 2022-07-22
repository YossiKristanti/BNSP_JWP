@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <!-- Menampilkan form edit profile -->
                    <form method="post" action="">
                        {{ csrf_field()}}
                        <div class="form-grup">
                            <label for="code">name</label>
                            <input type="text" class="form-control" name="nama" value="" required>

                        </div>
                        <div class="form-grup">
                            <label for="name">bio</label>
                            <input type="text" class="form-control" name="bio" value="" required>
                        </div>

                        <div class="form-grup">
                            <label for="birth_place">Location</label>
                            <input type="text" class="form-control" name="lokasi" value="" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection