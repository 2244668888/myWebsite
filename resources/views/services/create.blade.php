@extends('layouts.app')

@section('title', 'Create Service')

@section('content')
<h1>Add New Service</h1>
<form action="{{ route('services.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
