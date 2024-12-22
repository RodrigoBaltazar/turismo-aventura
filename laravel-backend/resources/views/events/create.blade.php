

@extends('layout')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md mt-8">
  <h1 class="text-2xl font-bold text-gray-800 mb-6">Create a New Event</h1>
  <form 
    id="eventForm" 
    action="{{ route('events.store') }}" 
    method="POST" 
    class="space-y-4"
    onsubmit="return validateForm()"
  >
    @csrf
    <!-- Campo Nome -->
    <div>
      <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name:</label>
      <input 
        type="text" 
        name="name" 
        id="name" 
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
        placeholder="Event name"
      >
      <small id="nameError" class="text-red-500 hidden">This field is required.</small>
    </div>
    <!-- Campo Data -->
    <div>
      <label for="dia" class="block text-sm font-medium text-gray-700 mb-1">Day:</label>
      <input 
        type="date" 
        name="dia" 
        id="dia" 
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
      >
      <small id="diaError" class="text-red-500 hidden">This field is required.</small>
    </div>
    <!-- Campo Descrição -->
    <div>
      <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description:</label>
      <textarea 
        name="description" 
        id="description" 
        rows="4"
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
        placeholder="Event description"
      ></textarea>
      <small id="descriptionError" class="text-red-500 hidden">This field is required.</small>
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

<script>
  function validateForm() {
    let isValid = true;

    // Get fields
    const name = document.getElementById('name');
    const dia = document.getElementById('dia');
    const description = document.getElementById('description');

    // Get error message elements
    const nameError = document.getElementById('nameError');
    const diaError = document.getElementById('diaError');
    const descriptionError = document.getElementById('descriptionError');

    // Reset errors
    nameError.classList.add('hidden');
    diaError.classList.add('hidden');
    descriptionError.classList.add('hidden');

    // Validate Name
    if (!name.value.trim()) {
      nameError.classList.remove('hidden');
      isValid = false;
    }

    // Validate Date
    if (!dia.value.trim()) {
      diaError.classList.remove('hidden');
      isValid = false;
    }

    // Validate Description
    if (!description.value.trim()) {
      descriptionError.classList.remove('hidden');
      isValid = false;
    }

    return isValid;
  }
</script>


@endsection