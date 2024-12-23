@extends('layouts.app')

@section('content')
<!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"> -->
<div class="container mx-auto p-6 bg-fundo">
  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @foreach ($events as $event)
      <div class="bg-white border border-primary-200 rounded-lg shadow dark:bg-primary-800 dark:border-primary-700">
        <div class="p-5">
          <a href="{{ route('events.show', $event->id) }}">
            <img class="rounded-t-lg w-full h-48 object-cover" src="cabo-estrelas.png" alt="{{ $event->name }}">
            <h2 class="mt-4 mb-2 text-xl font-bold tracking-tight text-primary-900 dark:text-white">{{ $event->name }}</h2>
            <p class="mb-3 font-normal text-primary-700 dark:text-primary-400">{{ Str::limit($event->excerpt, 100) }}</p>
          </a>
          <a href="{{ route('events.show', $event->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            Leia mais
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
          </a>
          <p class="mt-2 text-sm text-primary-600 dark:text-primary-400">Viagem em {{ $event->created_at->format('d/m/Y') }}</p>
        </div>
      </div>
    @endforeach
  </div>
</div>


<div class="mt-8">
    {{ $events->links() }}
</div>
@endsection





    
<!-- </div> -->