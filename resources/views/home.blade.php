@extends('template.template')
@section('title','Home')

@section('role')
    @if ($role == 'admin')
        <a href="/token">
            <img style="width: 10%;" src="image/gear.png" alt="">
        </a>
    @endif
@endsection

@section('isi')
<h1 >Halaman Home</h1>

@foreach ($menus as $menu)
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="image/{{ $menu->foto }}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ $menu->nama }}</h5>
        @if ($role == 'admin')
            <a href="/review/{{$menu->id}}" class="btn btn-primary">Lihat ulasan</a>
        @else
            @if ($menu->rate_status == 0)
            <a href="/review/{{$menu->id}}" class="btn btn-primary">Lihat ulasan</a>
            @else
            <a href="/feedback/{{$menu->id}}" class="btn btn-primary">Beri ulasan</a>
            @endif
        @endif
    </div>
</div>
@endforeach
@endsection

