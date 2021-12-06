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
<h1>Ulasan untuk menu ini belum tersedia :(</h1>
<a type="submit" href="/">kembali</a>
@endsection

