<!-- create.blade.php -->
@extends('layout')

@section('content')
    <h1>Create a New Event</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="dia">dia:</label>
            <input type="date" name="dia" id="dia" class="form-control">
        </div>
        <div class="form-group">
            <label for="Descricao">Descrição:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection