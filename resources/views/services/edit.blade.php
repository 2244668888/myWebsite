@extends('layouts.app')

@section('title', 'Edit Service')

@section('content')
<h1>Edit Service</h1>
<form action="{{ route('services.update', $service->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $service->name }}" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $service->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
