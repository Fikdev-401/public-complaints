@extends('layouts.mazer')
@section('title', 'Profile')

@section('page-heading', 'Profile Page')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Profile Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" readonly class="form-control-plaintext" id="email"
                                    value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-3 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                <input type="tel" readonly class="form-control-plaintext" id="phone"
                                    value="{{ Auth::user()->telp ?? 'Tidak tersedia' }}">
                            </div>
                        </div>
                        <!-- Jika User Sudah Login -->
                        <div class="text-start">
                            @auth
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Logout</button>
                                </form>

                            @endauth
                            <a href="/profile.edit" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
