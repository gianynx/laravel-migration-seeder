@extends('layouts.app')

@section('page_title')
    Home
@endsection

@section('content')
    <section class="container">
        <h1 class="text-center fw-bold text-danger">Trenitalia Tickets</h1>
        <div class="row pt-5 pb-5">
            @foreach ($trains as $train)
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title fw-bold pt-3">
                                <div>
                                    <span class="text-danger fs-4">Da:</span>
                                    <span class="fs-5">{{ $train['departure_station'] }}</span>
                                </div>
                                <div>
                                    <span class="text-danger fs-4">A:</span>
                                    <span class="fs-5">{{ $train['arrival_station'] }}</span>
                                </div>
                                <div>
                                    <span class="text-danger fs-4">Partenza:</span>
                                    <span class="fs-5">{{ $train['departure_time'] }}</span>
                                </div>
                                <div>
                                    <span class="text-danger fs-4">Arrivo:</span>
                                    <span class="fs-5">{{ $train['arrival_time'] }}</span>
                                </div>
                                <div>
                                    <span class="text-danger fs-4">Numero carrozze:</span>
                                    <span class="fs-5">{{ $train['number_carriages'] }}</span>
                                </div>
                                {{-- <div>
                                    <span class="text-danger fs-4">Ritardo:</span>
                                    <span class="fs-5">{{ $train['delay'] }}</span> <span class="fs-5">minuti</span>
                                </div> --}}
                                <div>
                                    <span class="text-danger fs-4">Categoria:</span>
                                    <span class="fs-5">{{ $train['train_type'] }}</span>
                                </div>
                                <div>
                                    <span class="text-danger fs-4">Prezzo:</span>
                                    <span class="fs-5">{{ $train['price'] }}</span> <span>&euro;</span>
                                </div>
                                <div>
                                    <span class="text-danger fs-4">Posti a sedere:</span>
                                    <span class="fs-5">{{ $train['seats'] }}</span>
                                </div>
                                <div class="mt-4">
                                    <button type="button" class="btn btn-outline-danger text-uppercase">prenota</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
