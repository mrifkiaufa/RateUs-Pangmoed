@extends('template.template')
@section('title','Email')

@section('role')
    @if ($role == 'admin')
        <a href="/token">
            <img style="width: 10%;" src="image/gear.png" alt="">
        </a>
    @endif
@endsection

@section('isi')
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $ulasan->rating }}/5</li>
        <li class="list-group-item">{{ $ulasan->ulasan }}</li>
    </ul>
    <a href="/email/{{ $ulasan->id }}">
        <img style="width: 10%;" src="/image/gmail.png" alt="">
    </a>
</div>
</br>
<form action="/email/{{ $id }}" method="POST">
    @csrf
    <p>
        <textarea name="balasan"></textarea>
    </p>

    <button type="submit" name="submit">Send feedback</button>
    <a type="submit" href="/">kembali</a>
</form>
@endsection
