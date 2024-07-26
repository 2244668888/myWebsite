@extends('layouts.app')

@section('content')
<div class="image-grid">
    <div class="row">
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp1.jpeg') }}" class="image primary-image" alt="Image 1">
            <img src="{{ asset('images/pp12.jpeg') }}" class="image secondary-image" alt="Image 1">
        </div>
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp2.jpeg') }}" class="image primary-image" alt="Image 2">
            <img src="{{ asset('images/pp1.jpeg') }}" class="image secondary-image" alt="Image 2">
        </div>
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp3.jpeg') }}" class="image primary-image" alt="Image 3">
            <img src="{{ asset('images/pp2.jpeg') }}" class="image secondary-image" alt="Image 3">
        </div>
    </div>
    <div class="row">
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp4.jpeg') }}" class="image primary-image" alt="Image 4">
            <img src="{{ asset('images/pp3.jpeg') }}" class="image secondary-image" alt="Image 4">
        </div>
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp5.jpeg') }}" class="image primary-image" alt="Image 5">
            <img src="{{ asset('images/pp4.jpeg') }}" class="image secondary-image" alt="Image 5">
        </div>
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp6.jpeg') }}" class="image primary-image" alt="Image 6">
            <img src="{{ asset('images/pp5.jpeg') }}" class="image secondary-image" alt="Image 6">
        </div>
    </div>
    <div class="row">
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp7.jpeg') }}" class="image primary-image" alt="Image 7">
            <img src="{{ asset('images/pp6.jpeg') }}" class="image secondary-image" alt="Image 7">
        </div>
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp8.jpeg') }}" class="image primary-image" alt="Image 8">
            <img src="{{ asset('images/pp7.jpeg') }}" class="image secondary-image" alt="Image 8">
        </div>
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp9.jpeg') }}" class="image primary-image" alt="Image 9">
            <img src="{{ asset('images/pp8.jpeg') }}" class="image secondary-image" alt="Image 9">
        </div>
    </div>
    <div class="row">
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp10.jpeg') }}" class="image primary-image" alt="Image 10">
            <img src="{{ asset('images/pp9.jpeg') }}" class="image secondary-image" alt="Image 10">
        </div>
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp11.jpeg') }}" class="image primary-image" alt="Image 11">
            <img src="{{ asset('images/pp3.jpeg') }}" class="image secondary-image" alt="Image 11">
        </div>
        <div class="col-4 image-container">
            <img src="{{ asset('images/pp12.jpeg') }}" class="image primary-image" alt="Image 12">
            <img src="{{ asset('images/pp5.jpeg') }}" class="image secondary-image" alt="Image 12">
        </div>
    </div>
</div>
@endsection
