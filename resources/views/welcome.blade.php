@extends('layouts.app')

@section('content')
<div style="background-image: url('{{ asset('images/img.jpg') }}'); background-size: cover; background-position: center; height: 100vh;">
    <div class="content-container main-page">
        <p>CREATE YOUR WEBSITE</p>
        <h1>I am a full-stack website developer. Here are some of the services I offer:</h1>
        <p>Stand out online with a professional website, online store, or portfolio. With Squarespace, you can turn any idea into a reality.</p>
    </div>
</div>

<div class="cards-page">
    <div class="container">
        <div class="card-container">
            <div class="card">
                <img src="{{ asset('images/abcd.jpg') }}" class="card-img-top" alt="Service 1">
                <div class="card-body">
                    <h5 class="card-title">MUHAMMAD SHOAIB</h5>
                    <p class="card-text">Web Developer</p>
                    <p class="card-text">Phone: +923056750978</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/p5.avif') }}" class="card-img-top" alt="Service 2">
                <div class="card-body">
                    <h5 class="card-title">Service 2</h5>
                    <p class="card-text">Description for service 2.</p>
                    <p class="card-text">Phone: 123-456-7890</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/p6.avif') }}" class="card-img-top" alt="Service 3">
                <div class="card-body">
                    <h5 class="card-title">Service 3</h5>
                    <p class="card-text">Description for service 3.</p>
                    <p class="card-text">Phone: 123-456-7890</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/p7.avif') }}" class="card-img-top" alt="Service 4">
                <div class="card-body">
                    <h5 class="card-title">Service 4</h5>
                    <p class="card-text">Description for service 4.</p>
                    <p class="card-text">Phone: 123-456-7890</p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="full-screen-section">
    <div class="left-card">
        <div class="inner-card">
            <img src="{{ asset('images/p8.avif') }}" alt="Inner Image 1">
            <img src="{{ asset('images/p2.avif') }}" alt="Inner Image 2">
        </div>
    </div>
    <div class="right-card">
        <div>
            <h2>Project Details</h2>
            <p>This section provides detailed information about the project. It can include descriptions, objectives, technologies used, and any other relevant details.</p>
        </div>
    </div>
</div>
@endsection
