@extends('layout')
@section('title', 'Dashboard')
@section('content')
    <div class="text-center py-20">
        <h1 class="text-5xl font-extrabold text-indigo-700 mb-6">Selamat Datang di Aplikasi PULPOWER 🔥</h1>
        <p class="text-lg text-gray-700 mb-8">Sistem Manajemen Data Mahasiswa yang ringan dan sederhana.</p>
        <a href="{{ route('mahasiswa.index') }}"
            class="bg-indigo-600 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow-lg hover:bg-indigo-700 transition">🚀
            Lihat Data Mahasiswa</a>
    </div>
@endsection