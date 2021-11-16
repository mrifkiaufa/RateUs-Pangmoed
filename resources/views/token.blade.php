@extends('template.template')
@section('title','Token')

@section('role')
    @if ($role == 'admin')
        <a href="/token">
            <img style="width: 10%;" src="image/gear.png" alt="">
        </a>
    @endif
@endsection

@section('isi')
<h1 >Halaman Token</h1>

<form action="/token" method="POST">
    @csrf

    <button type="submit" name="submit">Generate</button>
</form>
<table style="width:100%">
    <tr>
        <th>Token</th>
    </tr>
    @foreach ($users as $user)
        @if ($user->role == 'pelanggan')
            <tr>
                <td>{{ $user->password }}</td>
            </tr>
        @endif
    @endforeach
</table>
@endsection
