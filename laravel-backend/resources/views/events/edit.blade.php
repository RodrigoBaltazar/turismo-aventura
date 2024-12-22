@extends('layout')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md mt-8">
  <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Event</h1>
  <form action="{{ route('events.update', $events->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <!-- Campo Nome -->
    <div>
      <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name:</label>
      <input 
        type="text" 
        name="name" 
        id="name" 
        value="{{ $events->name }}" 
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
        placeholder="Enter event name"
      >
    </div>

    <!-- Campo Data -->
    <div>
      <label for="dia" class="block text-sm font-medium text-gray-700 mb-1">Day:</label>
      <input 
        type="date" 
        name="dia" 
        id="dia" 
        value="{{ $events->dia }}" 
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
      >
    </div>

    <!-- Campo Descrição -->
    <div>
      <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description:</label>
      <textarea 
        name="description" 
        id="description" 
        rows="4"
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
        placeholder="Enter event description"
      >{{ $events->description }}</textarea>
    </div>

    <!-- Botão -->
    <button 
      type="submit" 
      class="w-full bg-green-500 text-white py-2 rounded-md text-sm font-medium hover:bg-green-600 transition"
    >
      Save
    </button>
  </form>
</div>
@endsection
