@extends('template.template')
@section('title','Review')

@section('role')
    @if ($role == 'admin')
        <a href="/token">
            <img style="width: 10%;" src="image/gear.png" alt="">
        </a>
    @endif
@endsection

@section('isi')
<h1>Feedback Review</h1>

@if ($role == 'pelanggan')
<img src="/image/{{ $menu->foto }}" alt="Halo">
<p>Nama menu: {{ $menu->nama }}</p>
<p>Rating anda: {{ $feedback->rating }}</p>
<p>Ulasan anda: {{ $feedback->ulasan }}</p>
<p>Rating rata-rata: {{ $meanRate }}/5</p>
@endif

@if ($role == 'admin')
<img src="/image/{{ $menu->foto }}" alt="Halo">
<p>Nama menu: {{ $menu->nama }}</p>
<p>Rating rata-rata: {{ $meanRate }}/5</p>
@endif

    </hr>
<h1>People's rate:</h1>
@foreach ($ulasan as $uls)
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $uls->rating }}/5</li>
        <li class="list-group-item">{{ $uls->ulasan }}</li>
    </ul>
    @if ($role == 'admin')
        @if (isset($uls->email))
            <a href="/email/{{ $uls->id }}">
                <img style="width: 10%;" src="/image/gmail.png" alt="">
            </a>
        @endif
    @endif
</div>
</br>
@endforeach
@endsection
