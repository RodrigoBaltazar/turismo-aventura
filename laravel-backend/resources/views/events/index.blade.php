@extends('layouts.app')

@section('content')
<!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"> -->
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    @foreach ($events as $event)
    
    <div class="p-5">
        <div class="bg-white rounded shadow p-4">
            <a href="{{ route('events.show', $event->id) }}">
                <!-- <img class="rounded-t-lg" src="{{ $event->image }}" alt="{{ $event->name }}"> -->
                <img class="rounded-t-lg" src="cabo-estrelas.png " alt="{{ $event->name }}">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $event->name }}</h2>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($event->excerpt, 100) }}</p>
                <a href="{{ route('events.show', $event->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Leia mais
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </a>
        </div>
        </a>
    </div>
    @endforeach
</div>

<div class="mt-8">
    {{ $events->links() }}
</div>
@endsection





    
<!-- </div> -->