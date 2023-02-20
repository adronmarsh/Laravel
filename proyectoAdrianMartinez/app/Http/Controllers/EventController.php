<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Event::all();
        return view('eventos.index', compact('eventos'));
    }


    public function crear()
    {
        return view('eventos.create');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $event = new Event();
        $event->name = $request->get('name');
        $event->description = $request->get('description');
        $event->location = $request->get('location');
        $event->hour = $request->get('hour');
        $event->date = $request->get('date');
        $event->tags = $request->get('tags');
        $event->visible = $request->get('visible');

        $event->save();

        return view('eventos.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($evento)
    {
        $evento = Event::findOrFail($evento);
        $evento->save();
        return view('eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($event)
    {
        $evento = Event::findOrFail($event);
        return view('eventos.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $evento)
    {
        $evento->name = $request->get('name');
        $evento->description = $request->get('description');
        $evento->location = $request->get('location');
        $evento->date = $request->get('date');
        $evento->hour = $request->get('hour');
        $evento->tags = $request->get('tags');
        $evento->visible = $request->get('visible');
        $evento->save();

        return view('eventos.show', compact('evento'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $evento)
    {
        $evento->delete();
        return redirect()->route('eventos.index');
    }

    public function getEventsByTag($tag)
    {
        $events = Event::findOrFail($tag->get());
        return view('', compact('envents'));
    }



}
