<?php

namespace App\Http\Controllers;

use App\Models\ClientRequest;

class ClientRequestsController extends Controller
{
    public function index()
    {
        return view('pages.client-requests.index');
    }

    public function show(ClientRequest $clientRequest)
    {
        return view('pages.client-requests.show', compact('clientRequest'));
    }
}
