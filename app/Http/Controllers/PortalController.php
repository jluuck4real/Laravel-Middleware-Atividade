<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AcessoMiddleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PortalController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware(AcessoMiddleware::class, only: ['painel']),
        ];
    }

    public function index()
    {
        return view('inicio');
    }

    public function painel()
    {
        return view('autorizado');
    }
}
