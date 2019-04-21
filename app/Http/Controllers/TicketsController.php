<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $tickets = $this->getBooksData();
        return view('tickets.index')->with([
            'searchTerm' => '',
            'tickets' => $tickets,
        ]);
    }

    public function home()
    {
        return view('tickets.home');
    }

    public function showTicket($subject)
    {
        return view('tickets.edit')->with([
            'subject' => $subject,
        ]);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->session()->get('searchTerm', '');
        $searchResults = $request->session()->get('searchResults', null);

        return view('tickets.search')->with([
            'searchTerm' => $searchTerm,
            'searchResults' => $searchResults,

        ]);
    }

    public function searchProcess(Request $request)
    {
        $searchResults = array();

        $searchTerm = $request->input('searchTerm', null);

        if($searchTerm) {

            $ticketsData = file_get_contents(database_path('/tickets.json'));
            //echo "<pre>"; var_dump($ticketsData); echo "</pre>";
            $tickets = json_decode($ticketsData, true);

            foreach ($tickets as $title => $ticket) {
                $match = $title == $searchTerm;
                if($match) {
                    $searchResults[$title] = $ticket;
                }
            }
        }

        return redirect('/tickets/search')->with([
           'searchTerm' => $searchTerm,
            'searchResults' => $searchResults,
        ]);
    }

    /*
     * GET /ticckets/create
     */
    public function create()
    {
        return view('tickets.create');
    }

    /*
     * POST /tickets
     */
    public function store(Request $request)
    {
        # Validate the request data
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',

        ]);

        # Note: If validation fails, it will redirect the visitor back to the form page
        # and none of the code that follows will execute.

        # Code will eventually go here to add the book to the database,
        # but for now we'll just dump the form data to the page for proof of concept
        //return redirect('/tickets/create');
        return redirect('/tickets/create');
    }

    public function contact()
    {
        return view('tickets.contact');
    }

    public function getBooksData()
    {
        $ticketsData = file_get_contents(database_path('/tickets.json'));
        $tickets = json_decode($ticketsData, true);

        return $tickets;
    }
}
