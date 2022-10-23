@extends('layouts.app')

@section('customcss')
    <link rel="stylesheet" href="/css/ticket/create.css">
@endsection

@section('customjs')
    <script src="/js/ticket/create.js" defer></script>
@endsection

@section('content')
    <h1 class='custom-h1'>Create new ticket:</h1>

    <div class="custom-container d-flex justify-content-between align-items-center mb-1">
        <h5 class="text-muted m-0">Select {{$combination_count}} digits:</h5>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="chkbx-random-digits">
            <label class="form-check-label fs-5 text-info" for="chkbx-random-digits">
                Random digits
            </label>
        </div>
    </div>
    

    <form action="/tickets" method="POST">
        @csrf
        <fieldset class="d-flex align-content-start flex-wrap d-flex">
            @for ($i = $digits_range['min']; $i <= $digits_range['max']; $i++)
            <div class="form-check form-check-digits form-check-inline position-relative">
                <label class="form-check-label create-ticket position-relative" for="{{ $i }}">
                    <input type="checkbox" class="form-check-input form-check-input-digits" name="digits[]" value="{{ $i }}" id="{{ $i }}">{{ $i }}
                </label>
            </div>
        @endfor
        </fieldset>

        <div class="buttons py-3">
            <a href="/tickets" class="btn btn-danger">Go back</a>
            <button id="btn-create" type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

    <!-- hidden div for holding digit range data to be used in js -->
    <div class="d-none concealed-data" 
        data-combination-count={{ $combination_count }}
        data-range-min={{ $digits_range['min'] }} 
        data-range-max={{ $digits_range['max'] }}>
    </div>
@endsection
