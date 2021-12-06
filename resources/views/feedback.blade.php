@extends('template.template')
@section('title','Feedback')

@section('role')
@endsection

@section('isi')

    <!-- Isi Formulir -->
    <div class="container" style="padding-top: 7rem;">

        <!-- Awal formulir -->
        <div class="mt-3">
            <div class="card-header text-black text-center mx-auto shadow-lg" style="width: 600px; background-color :#e6c395; border-radius: 15px 15px 0px 0px;">
                <b>{{ $menu->nama }}</b>
            </div>
            <div class="card-body text-black mx-auto shadow-lg" style="width: 600px; background-color: #f5e8d7; border-radius:  0px 0px 15px 15px;">
                <form action="/feedback/{{ $menu->id }}" method="POST">
                    @csrf

                    <div class="form-group text-center">
                        <img src="/image/{{ $menu->foto }}" class="rounded mx-auto d-block" width="200" length="200" alt="gambar gagal dibuka">
                        <br>
                        <label>E-mail*</label>
                        <br>
                        <input type="email" name="email" class="text-center mx-auto rounded form-control" style="width: 400px;" placeholder="Silahkan Masukkan Alamat E-mail Anda">
                        <h6>*Email bersifat opsional. Boleh diisi jika ingin mendapat balasan dari admin.</h6>
                        <div class="form-group mt-3">
                            <label>Rating</label>
                            <br>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="1">
                              <label class="form-check-label" for="inlineRadio1"></label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value="2">
                              <label class="form-check-label" for="inlineRadio2"></label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="3">
                              <label class="form-check-label" for="inlineRadio1"></label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value="4">
                              <label class="form-check-label" for="inlineRadio2"></label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="5">
                              <label class="form-check-label" for="inlineRadio1"></label>
                            </div>

                          <div class="form-group mt-3">
                        <label>Ulasan</label>
                        <textarea class="form-control text-center mx-auto" style="width: 400px;" name="ulasan" placeholder="Silahkan Masukkan Ulasan Anda" required></textarea>

                    <a class="btn btn-secondary mt-3 shadow-sm" href="/">Back</a>
                    <button type="submit" class="btn btn-success mt-3 shadow-sm" name="submit">Send Feedback</button>
                </form>
            </div>
        </div>
    </div>
    <!--Akhir formulir-->
@endsection
