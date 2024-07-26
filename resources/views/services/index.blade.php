@extends('layouts.app')

@section('title', 'Services')

@section('content')
<h1>Our Services</h1>
<a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Add New Service</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td>
                    <a href="{{ route('services.show', $service->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
