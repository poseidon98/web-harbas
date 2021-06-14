@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', 'Error 404')
@section('message', __('Not Found'))
@section('gambar')
<img class="inline-block" src="/image/error/404 Page Not Found _Two Color.png" alt="">
<div class="text-lg text-gray-700 text-center">
    Maaf untuk halaman yang kamu cari tidak ditemukan, silahkan coba lagi
</div>
@endsection