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
}