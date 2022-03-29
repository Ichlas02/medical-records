<x-app-layout>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Medis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center py-3">
                <h1>Ada yang sakit?</h1>
                <a href="/datamedis/formulir" class="text-decoration-none btn btn-primary">Tambah data baru</a>
            </div>
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="card mb-3">
                    <h5 class="card-header">Dr. Strange S.Tlr</h5>
                    <div class="card-body">
                      <h5 class="card-title">Nama Pasien: Udin</h5>
                      <p class="card-text">Kondisi: Sehat</p>
                      <p class="card-text">Suhu: 37</p>
                      <a href="#" class="btn btn-primary">Lihat lebiih detail</a>
                    </div>
                </div>
                <div class="card mb-3">
                    <h5 class="card-header">Dr. Doofenshmirtz S.Dgr</h5>
                    <div class="card-body">
                      <h5 class="card-title">Nama Pasien: Pepen</h5>
                      <p class="card-text">Kondisi: Sakit Kritis</p>
                      <p class="card-text">Suhu: 39</p>
                      <a href="#" class="btn btn-primary">Lihat lebiih detail</a>
                    </div>
                </div>
                <div class="card mb-3">
                    <h5 class="card-header">Dr. Phil S.Okin</h5>
                    <div class="card-body">
                      <h5 class="card-title">Nama Pasien: Bambang</h5>
                      <p class="card-text">Kondisi: Sehat Walafiat</p>
                      <p class="card-text">Suhu: 36</p>
                      <a href="#" class="btn btn-primary">Lihat lebiih detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
