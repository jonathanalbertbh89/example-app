<?php

namespace App\Http\Controllers;

use App\ContaPessoal\ContaPessoal;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class ContaPessoalController extends Controller
{

    /**
     * @var \App\Models\ContaPessoal
     */
    protected $contaPessoal;

    public function __construct(ContaPessoal $contaPessoal)
    {
        $this->contaPessoal = $contaPessoal;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->contaPessoal->criarConta();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}