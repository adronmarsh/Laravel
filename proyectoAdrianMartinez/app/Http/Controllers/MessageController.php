<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = Message::orderBy('created_at', 'desc')->get();
        return view('mensajes.index', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($message)
    {
        $mensaje = Message::findOrFail($message);
        $mensaje->readed = 1;
        $mensaje->save();
        return view('mensajes.show', compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('mensajes.index');
    }


    public function procesarFormulario(Request $request)
    {
        $message = new Message;
        $message->name = $request->input('name');
        $message->subject = $request->input('subject');
        $message->text = $request->input('message');
        $message->save();
        return redirect()->route('enviado');
    }

    public function enviado()
    {
        return view('mensajes.enviado');
    }
}
