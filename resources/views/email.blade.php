@extends('template.template')
@section('title','Email')

@section('role')
    @if ($role == 'admin')
        <a href="/token">
            <img width="30px;" src="image/gear.png" alt="">
        </a>
    @endif
@endsection

@section('isi')
<!-- Isi Formulir -->
<div class="container text-center" style="padding-top: 7rem;">

    <div class></div>
        <h2 style="color: white;"><b>Mengirim respon untuk pelanggan!!</b></h2>
        <h6 style="color: white;">Kamu dapat mengirim respon terhadap ulasan pelanggan. <br>Tentunya mereka sangat menantikan respon darimu :D </h6>

    </div>

    <form>
        <div class="mt-3">
            <div class="card-header text-black text-center mx-auto shadow-lg" style="width: 400px; background-color :#e6c395; border-radius: 15px 15px 0px 0px;">
                <b>{{ $ulasan->rating }}/5</b>
            </div>
            <div class="card-body text-black mx-auto shadow-lg" style="width: 400px; background-color: #f5e8d7; border-radius:  0px 0px 15px 15px;">
                <div class="form-group text-center">
                    <p id="ulasananda">{{ $ulasan->ulasan }}</p>
                </div>
            </div>
        </div>
    </form>

    <form action="/email/{{ $id }}" method="POST">
        @csrf

        <div class="mt-3">
            <div class="card-body text-black mx-auto shadow-lg" style="width: 400px; background-color: #f5e8d7; border-radius:  0px 0px 15px 15px;">
                <div class="form-group">
                    <p class="text-center" id="ulasananda">
                        <textarea name="balasan"></textarea>
                    </p>
                    <button type="submit" class="btn btn-success mt-3 shadow-sm" style="float: right;" name="submit">Kirim</button>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </form>

    <div class="container text-center" style="padding-top: 1rem;">

        <div class></div>
            <h6 style="color: white;">*Dengan menekan kirim, responmu akan langsung dikirim ke email pelanggan. </h6>
            <a class="btn btn-secondary mt-3 shadow-sm" href="/"name="Back">Back</a>
        </div>


<!--Akhir formulir-->
@endsection
