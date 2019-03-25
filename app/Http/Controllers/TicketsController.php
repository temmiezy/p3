<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        return view('tickets.index');
    }

    public function createTicket()
    {
        return view('tickets.create');
    }

    public function showTicket($subject)
    {
        return view('tickets.edit')->with([
            'subject' => $subject,
        ]);
    }
}
