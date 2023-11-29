<?php

namespace App\Http\Controllers;

use App\Models\ClientRequest;
use Illuminate\Http\Request;

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
