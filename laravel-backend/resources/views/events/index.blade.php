<!-- @extends('layout')

@section('content')
    <h1>List of events</h1>
    <a href="{{ route('events.create') }}" class="btn btn-primary">Create New Event</a>
    <ul>
        @foreach ($events as $event)
            <li>
                <a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a>
                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection -->

@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($events as $event)
        <div class="bg-white rounded shadow p-4">
        <img src="{{ $event->image }}" alt="{{ $event->name }}">
            <h2 class="text-xl font-bold mt-4">{{ $event->name }}</h2>
            <p class="text-gray-600 mt-2">{{ Str::limit($event->excerpt, 100) }}</p>
            <a href="{{ route('events.show', $event->id) }}" class="text-blue-600 font-bold mt-4 inline-block">Leia mais</a>
        </div>
    @endforeach
</div>

<div class="mt-8">
    {{ $events->links() }}
</div>
@endsection
