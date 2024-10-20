@extends('layouts.mazer')
@section('title', 'Complaints')

@section('page-heading', 'Create Complaint Page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('complaints.store')}}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">Tambah Pengaduan</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">Nama Pelapor</label>
                                        <input type="text" class="form-control" id="basicInput"
                                            placeholder="Masukan Nama Anda">
                                    </div>
                                    <x-inputs.basic-input label="Email Pelapor" id="email" placeholder="Masukan email" name="email"/>
                                    <x-inputs.basic-input label="Nomor Pelapor" id="email" placeholder="Masukan nomor" name="no_telp"/>
                                    <x-inputs.basic-input type="file" label="Foto Profile" id="email" placeholder="Masukan nomor" name="no_telp"/>
                                    <x-inputs.textarea-input label="Pesan" id="pesan" placeholder="Masukan keluhan" name="pesan"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
