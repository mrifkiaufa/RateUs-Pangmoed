@extends('template.template')
@section('title','Home')

@section('role')
    @if ($role == 'admin')
        <a href="/token">
            <img width="30px;" src="image/gear.png" alt="">
        </a>
    @endif
@endsection

@section('isi')
<div class="container" style="padding-top: 7rem;">
    <h1 class="text-center mt-4 text-black">MENU PANGMOED CAFE</h1>
    <br>
    <h3 class="text-start pb-1 text-black">Makanan</h3>


    <div class="row">
        @foreach ($menus as $menu)
            @if ($menu->jenis == 'Makanan')
                <div class="col-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="image/{{ $menu->foto }}" class="card-img-top" alt="nasigoreng">
                        <div class="card-body">
                            <h5 class="card-title">{{ $menu->nama }}</h5>
                            @if ($role == 'admin')
                                <a class="btn btn-primary" href="/review/{{$menu->id}}" class="btn btn-primary">Lihat ulasan</a>
                            @else
                                @if ($menu->rate_status == 0)
                                <a class="btn btn-primary" href="/review/{{$menu->id}}" class="btn btn-primary">Lihat ulasan</a>
                                @else
                                <a class="btn btn-primary" href="/feedback/{{$menu->id}}" class="btn btn-primary">Beri ulasan</a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
  


    <h3 class="text-start pb-1 text-black mt-5">Minuman</h3>

    <div class="row pb-5">
    @foreach ($menus as $menu)
        @if ($menu->jenis == 'Minuman')
        <div class="col-4">
            <div class="card text-center" style="width: 18rem;">
                <img src="image/{{ $menu->foto }}" class="card-img-top" alt="nasigoreng">
                <div class="card-body">
                <h5 class="card-title">{{ $menu->nama }}</h5>
                @if ($role == 'admin')
                    <a class="btn btn-primary" href="/review/{{$menu->id}}" class="btn btn-primary">Lihat ulasan</a>
                @else
                    @if ($menu->rate_status == 0)
                    <a class="btn btn-primary" href="/review/{{$menu->id}}" class="btn btn-primary">Lihat ulasan</a>
                    @else
                    <a class="btn btn-primary" href="/feedback/{{$menu->id}}" class="btn btn-primary">Beri ulasan</a>
                    @endif
                @endif
                </div>
            </div>
        </div>
        @endif
    @endforeach
    </div>
</div>
@endsection

