@extends('layouts.app')

@section('customcss')
    <link rel="stylesheet" href="/css/menu.css">
@endsection

@section('customjs')
    <script src="/js/menu.js" type="module"></script>
@endsection

@section('content')
    <h1 class="pb-4 align-self-center">Welcome, {{ Auth::user()->name }}.</h1>
    <h3 class="pb-3 align-self-center">Select type of Lotto to play:</h3>

    <div class="d-flex flex-column row gx-0 gy-2 cards-container align-self-center">
        <div class="card bg-success text-white">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title fs-1">Lotto 6/42</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <form action="/menu/set" method="GET" class="d-flex flex-column">
                    @csrf
                    <input type="hidden" name="lotto_mode" value="Lotto 6/42">
                    <button type="submit" class="btn btn-warning align-self-end px-4">Play now</button>
                </form>
            </div>
        </div>

        <div class="card bg-secondary text-white">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title fs-1">Swertres Lotto 3/10</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <form action="/menu/set" method="GET" class="d-flex flex-column">
                    @csrf
                    <input type="hidden" name="lotto_mode" value="Swertres Lotto 3/10">
                    <button type="submit" class="btn btn-warning align-self-end px-4">Play now</button>
                </form>
            </div>
        </div>

        <div class="card bg-danger text-white">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title fs-1">Mega Lotto 6/45</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <form action="/menu/set" method="GET" class="d-flex flex-column">
                    @csrf
                    <input type="hidden" name="lotto_mode" value="Mega Lotto 6/45">
                    <button type="submit" class="btn btn-warning align-self-end px-4">Play now</button>
                </form>
            </div>
        </div>

        <div class="card bg-dark text-white">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body d-flex flex-column">
                <h5 class="card-title fs-1">Ultra Lotto 6/58</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <form action="/menu/set" method="GET" class="d-flex flex-column">
                    @csrf
                    <input type="hidden" name="lotto_mode" value="Ultra Lotto 6/58">
                    <button type="submit" class="btn btn-warning align-self-end px-4">Play now</button>
                </form>
            </div>
        </div>
    </div>
@endsection
