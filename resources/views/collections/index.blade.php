@extends('layout.app')
@section('content')
<div class="h-[112px]">
    <x-nav/>
</div>
<div class="container">
    <div class="container mx-auto py-8 px-4">

        <br><br>
        <h1 class="text-4xl font-semibold text-center mb-8" style="color: white">Koleksi Lukisan</h1>
        <br><br>

        <div class="grid grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:shadow-2xl duration-300">

            <div class="row">
                @foreach($collections as $collection)
                    <div class="col-1">
                        <div class="card">
                            <img src="{{ Storage::url($collection->image) }}" style="width:100%; height: 200px;" class="w-full h-full object-cover transform transition-all hover:scale-110" alt="{{ $collection->name }}">
                            <div class="containers">
                                <h5>{{ $collection->name }}</h5>
                                <h5>{{ $collection->nama_pelukis }}</h5>
                                <p>{{ Str::words($collection->description, 10) }}...</p>
                                <br>
                                <div class="flex justify-between" style="color: white">
                                    <span>Tahun: {{ $collection->year }}</span>
                                </div>
                                <div class="flex justify-between" style="color: white">
                                    <span>Status: {{ $collection->status }}</span>
                                </div>

                                <div class="flex justify-between mt-2" style="color: white">
                                    <span>Tipe: {{ $collection->tipe_lukisan }}</span>
                                </div>
                                <div class="flex justify-between mt-2" style="color: white">
                                    <span>Kondisi: {{ $collection->condition }}</span>
                                </div>
                                <br><br>
                                <form action="{{ route('collections.show', $collection->id) }}" method="GET">
                                    <button type="submit" class="btn btn-primary">
                                        <b>Read more</b>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <br>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="container mx-auto py-8 px-4">
        <h1 id="event" class="text-4xl font-semibold text-center mb-8" style="color: white">Event</h1>

        <div class="grid grid-cols-6 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:shadow-2xl duration-300">
            <div class="row">
                @foreach($acaras as $acara)
                    <div class="col-1">
                        <div class="card">
                            <div class="containers">
                                <h5>{{ $acara->name }}</h5>
                                <p>{{ Str::words($acara->description, 20) }}...</p>
                                <br>
                                <div class="flex justify-between" style="color: white">
                                    <span>Tanggal: {{ $acara->date->format('d-m-Y') }}</span>
                                </div>
                                <div class="flex justify-between" style="color: white">
                                    <span>Status: {{ $acara->status }}</span>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <br>
            </div>
        </div>
    </div>
</div>
@endsection
