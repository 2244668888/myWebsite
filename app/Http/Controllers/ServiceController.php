<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('home', compact('services'));
    }

public function create()
{
    return view('services.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
    ]);
    
    Service::create($request->all());
    
    return redirect()->route('services.index')
                     ->with('success', 'Service created successfully.');
}

public function show($id)
{
    $service = Service::find($id);
    return view('services.show', compact('service'));
}

public function edit($id)
{
    $service = Service::find($id);
    return view('services.edit', compact('service'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
    ]);
    
    $service = Service::find($id);
    $service->update($request->all());
    
    return redirect()->route('services.index')
                     ->with('success', 'Service updated successfully.');
}

public function destroy($id)
{
    Service::find($id)->delete();
    
    return redirect()->route('services.index')
                     ->with('success', 'Service deleted successfully.');
}
 
}
