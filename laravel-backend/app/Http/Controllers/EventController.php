<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $events = Event::paginate(6);
        return view('events.index', compact('events'));
    }

    public function show($id)
    {
        // Busca o evento pelo ID ou retorna um erro 404 se não encontrado
        $event = Event::findOrFail($id);

        // Retorna a view com os dados do evento
        return view('events.show', compact('event'));
    }


    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $events = new Event();
        $events->name = $request->name;
        $events->dia = $request->dia;
        $events->description = $request->description;
        $events->save();

        return redirect()->route('events.index');
    }
    public function edit($id)
    {
        $events = Event::findOrFail($id);
        return view('events.edit', compact('events'));
    }

    public function update(Request $request, $id)
    {
        $events = Event::findOrFail($id);
        $events->name = $request->name;
        $events->dia = $request->dia;
        $events->description = $request->description;
        $events->save();

        return redirect()->route('events.index');
    }
    public function destroy($id)
    {
        $events = Event::findOrFail($id);
        $events->delete();

        return redirect()->route('events.index');
    }
}
