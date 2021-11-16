@extends('template.template')
@section('title','Balasan')

@section('role')
    @if ($data['role'] == 'admin')
        <a href="/token">
            <img style="width: 10%;" src="image/gear.png" alt="">
        </a>
    @endif
@endsection

@section('isi')
<h1>Balasan Feedback kamu:</h1>
    </hr>
<h3 style="color: white">{{ $data['isi'] }}</h3>
    </br>
<a type="submit" href="/">kembali</a>
@endsection
