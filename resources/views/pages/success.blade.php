@extends('layouts.success')
@section('title', 'Nomads | Success')

@section('content')
<!-- MAIN -->
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url('frontend/images/icon/ic_mail.png') }}" alt="Succes Icon">
            <h1>Yay! Success</h1>
            <p>
                We've sent you email for trip insctuction
                <br>
                please read it as well
            </p>
            <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        </div>
    </div>
</main>
<!-- MAIN -->
@endsection
