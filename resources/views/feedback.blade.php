@extends('template.template')
@section('title','Feedback')

@section('role')
@endsection

@section('isi')
<h1>Feedback Form</h1>

<h1>{{ $menu->nama }}</h1>
<img src="/image/{{ $menu->foto }}" alt="Halo">
<form action="/feedback/{{ $menu->id }}" method="POST">
    @csrf
    <p>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Masukkan email..." />
    </p>

    <p>
        <label>Rating:</label>
        <label><input type="radio" name="rating" value="1" />1</label>
        <label><input type="radio" name="rating" value="2" />2</label>
        <label><input type="radio" name="rating" value="3" />3</label>
        <label><input type="radio" name="rating" value="4" />4</label>
        <label><input type="radio" name="rating" value="5" />5</label>
    </p>

    <p>
        <label>Ulasan:</label>
        <textarea name="ulasan"></textarea>
    </p>

    <button type="submit" name="submit">Send feedback</button>
    <a type="submit" href="/">kembali</a>
</form>
@endsection
