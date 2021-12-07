@extends('template.template')
@section('title','Ulasan')

@section('role')
    @if ($role == 'admin')
        <a href="/token">
            <img width="30px;" src="image/gear.png" alt="">
        </a>
    @endif
@endsection

@section('isi')
<br>
<br>
<br>
<br>
    <div class="m-5 pb-5">
        <h1>Ulasan untuk menu ini belum tersedia :(</h1>
        <a class="btn btn-light mt-3 shadow-sm" href="/">Back</a>
    </div>
@endsection

