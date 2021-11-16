@extends('template.template')
@section('title','Ulasan')

@section('role')
    @if ($role == 'admin')
        <a href="/token">
            <img style="width: 10%;" src="image/gear.png" alt="">
        </a>
    @endif
@endsection

@section('isi')
<h1>Ulasan untuk menu ini belum tersedia :(</h1>
<a type="submit" href="/">kembali</a>
@endsection

