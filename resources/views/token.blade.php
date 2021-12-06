@extends('template.template')
@section('title','Token')

@section('role')
    @if ($role == 'admin')
        <a href="/token">
            <img width="30px;" src="image/gear.png" alt="">
        </a>
    @endif
@endsection

@section('isi')
<div class="container text-center" style="padding-top: 8rem;">

    <div class></div>
        <h6 style="color: white;">Agar pelanggan dapat login ke situs RateUs.Pangmoed, digunakan token yang <br>
        diberikan kepada pelanggan. Sebagai Admin, kamu dapat menggenerate token tersebut. <br>Setiap kali tombol generate di-klik
        maka akan muncul token baru di dalam tabel yang hanya berlaku untuk sekali login  </h6>
        <form action="/token" method="POST">
            @csrf
            <button type="submit" class="btn text-center btn-success mt-3 shadow-sm" name="submit" role="button">GENERATE</button>
        </form>
        <br>
        <br>
    </div>

    <form>
        <div class="mt-3">
            <div class="card-header text-black text-center mx-auto shadow-lg" style="width: 400px; background-color :#e6c395; border-radius: 15px 15px 0px 0px;">
                <b>TOKEN AKTIF</b>
            </div>
            <div class="card-body text-black mx-auto shadow-lg" style="width: 400px; background-color: #f5e8d7; border-radius:  0px 0px 15px 15px;">
                <div class="form-group text-center">
                    @foreach ($users as $user)
                        @if ($user->role == 'pelanggan')
                            <p>{{ $user->password }}</p>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="container text-center" style="padding-top: 1rem;">

                <div class></div>
                    <h6 style="color: white;">*Token yang sudah dipakai akan otomatis kadaluarsa dan dihapus dari tabel. </h6>
                </div>
        </div>
    </form>
@endsection
