@extends('layouts.mazer')
@section('title', 'Complaints')

@section('page-heading', 'Page Complaint')
@section('content')

<section class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-end">
        <a href="{{route('complaints.create')}} " class="btn btn-primary">Create</a>
        </div>
    </div>
</section>
@endsection

