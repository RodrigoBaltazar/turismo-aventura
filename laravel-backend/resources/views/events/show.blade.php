
@extends('layouts.app')

@section('content')


<article class="bg-white rounded shadow p-8">
    <img src="{{ $event->image }}" alt="{{ $event->name }}" class="w-full h-60 object-cover rounded-t">
    <h1 class="text-3xl font-bold mt-4">{{ $event->name }}</h1>
    <p class="text-gray-600 text-sm">Viagem em {{ $event->created_at->format('d/m/Y') }}</p>
    <div class="mt-4">
        {!! nl2br(e($event->description)) !!}
        <i class="fa fa-eye" aria-hidden="true"></i>
        <i class="fa fa-eye" aria-hidden="false"></i>
    </div>
    <a href="{{ route('home') }}" class="text-blue-600 font-bold mt-4 inline-block">Voltar para a lista</a>
</article>
@endsection

