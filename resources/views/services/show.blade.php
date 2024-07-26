@extends('layouts.app')

@section('title', 'Service Details')

@section('content')
<h1>Service Details</h1>
<p><strong>Name:</strong> {{ $service->name }}</p>
<p><strong>Description:</strong> {{ $service->description }}</p>
<a href="{{ route('services.index') }}" class="btn btn-secondary">Back to Services</a>
@endsection
