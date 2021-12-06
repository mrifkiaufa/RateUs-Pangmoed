@extends('template.template')
@section('title','Review')

@section('role')
    @if ($role == 'admin')
        <a href="/token">
            <img width="30px;" src="image/gear.png" alt="">
        </a>
    @endif
@endsection

@section('isi')
<h1>Feedback Review</h1>
<!-- Isi Formulir -->
<div class="container" style="padding-top: 7rem;">

    <!-- Awal formulir -->
    <div class="mt-3">
        <div class="card-header text-black text-center mx-auto shadow-lg" style="width: 600px; background-color :#e6c395; border-radius: 15px 15px 0px 0px;">
            <h4>{{ $menu->nama }}</h4>
        </div>
        <div class="card-body text-black mx-auto shadow-lg" style="width: 600px; background-color: #f5e8d7; border-radius:  0px 0px 15px 15px;">
            <form method="" action="">
                <div class="form-group text-center">
                    @if ($role == 'pelanggan')
                    <img src="/image/{{ $menu->foto }}" alt="Halo">
                    <br>
                    <p>Rating anda: {{ $feedback->rating }}/5</p>
                    <p>Ulasan anda: {{ $feedback->ulasan }}</p>
                    <p>Rating rata-rata: {{ $meanRate }}/5</p>
                    @endif

                    @if ($role == 'admin')
                    <img src="/image/{{ $menu->foto }}" alt="Halo">
                    <br>
                    <p>Rating rata-rata: {{ $meanRate }}/5</p>
                    @endif
                    <br>
                    <h3 class="text-center mt-5 pb-1 text-black">People's Rate</h3>
@foreach ($ulasan as $uls)
<form>
    <div class="mt-3">
        <div class="card-header text-black text-center mx-auto shadow-lg" style="width: 400px; background-color :#e6c395; border-radius: 15px 15px 0px 0px;">
            <b>{{ $uls->rating }}/5</b>
        </div>
        <div class="card-body text-black mx-auto shadow-lg" style="width: 400px; background-color: #f5e8d7; border-radius:  0px 0px 15px 15px;">
            <div class="form-group text-center">
                @if ($role == 'admin')
                    @if (isset($uls->email))
                        <a href="/email/{{ $uls->id }}">
                            <img style="width: 7%;" src="/image/gmail.png" alt="">
                        </a>
                    @endif
                @endif
                <p id="ulasananda">{{ $uls->ulasan }}</p>
            </div>
        </div>
    </div>
</form>
@endforeach
<br>

@if ($role == 'admin')
<img style="width: 7%;" src="/image/gmail.png" alt="">
<h6 align="left">Jika terdapat logo di atas, tandanya kamu dapat membalas feedback pelanggan
dengan cara meng-klik logonya. Respon kamu akan langsung terkirim ke email pelanggan </h6>
@endif
            </form>
        </div>
    </div>
</div>
<!--Akhir formulir-->
@endsection
