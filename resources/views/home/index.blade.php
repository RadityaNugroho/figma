@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <section class="mb-3">
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5">
                    <img class="img-fluid" src="{{ asset('img/home/header.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5">
                    <h1 class="fw-bold">Adventuring Worry-Free With Us!</h1>
                    <p class="fs-5">Our partner in 30+ cities ready to rent you
                        adventure equipment you need!</p>
                    <button class="btn btn-primary" type="button">Sewa Sekarang</button>
                </div>
            </div>
        </div>
    </section>
    <h2 class="fw-bold text-center">What Do We Provide?</h2>
    <section>
        <div class="row justify-content-between">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('img/home/wdwp.png') }}" alt="">
            </div>
            <div class="col-md-5">
                <tr>
                    <td>
                        <h4 class="fw-bold">Camping Equipment</h4>
                        <p>We provide your basic need like: Tents, Portable Stove, Nesting, etc</p>
                    </td>
                    <td>
                        <h4 class="fw-bold">Hiking Equipment</h4>
                        <p>So you like hike through the mountains? we got your back! We also provide your need to conquer
                            those mountains from jacket, hiking boots, tracking pole, etc</p>
                    </td>
                </tr>
            </div>
        </div>
    </section>
@endsection
