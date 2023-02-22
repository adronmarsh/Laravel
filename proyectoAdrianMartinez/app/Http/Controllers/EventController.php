<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Auth;
use DateTime;

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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user() !== null) {
            if (Auth::user()->rol == 'admin') {
                return view('eventos.create');
            }
            return redirect('eventos');
        } else {
            return redirect('eventos');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {

        if (Auth::user()->rol == 'admin') {
            $eventos = new Event();
            $date = DateTime::createFromFormat('Y-m-d', $request->get('date'));

            if ($date !== false) {
                $eventos->birthday = $date->format('Y-m-d');
            } else {
                return redirect('/eventos');
            }

            $eventos->name = $request->get('name');
            $eventos->description = $request->get('description');
            $eventos->location = $request->get('location');
            $eventos->hour = $request->get('hour');
            $eventos->date = $request->get('date');
            $eventos->tags = $request->get('tags');
            $eventos->visible = $request->get('visible');

            $eventos->save();
        }
        return redirect('/eventos');
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
        $date = DateTime::createFromFormat('Y-m-d', $request->get('date'));

        if ($date !== false) {
            $evento->birthday = $date->format('Y-m-d');
        } else {
            return view('eventos.show', compact('evento'));
        }

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

    public function apuntados(Event $evento)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $user = Auth::user();
        $evento->miembros()->toggle($user);

        return redirect()->route('eventos.index');
    }

    public function visible(Event $evento)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $evento->visible = !$evento->visible;

        $evento->save();

        return redirect()->route('eventos.index');
    }
}
