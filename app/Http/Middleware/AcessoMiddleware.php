<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AcessoMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Simulação de uma verificação de permissão.
        $permissao = false;

        if (!$permissao) {
            return response()->view('nao-autorizado', [
                'mensagem' => 'Você não tem permissão para acessar este site.',
                'orientacao' => 'Favor entrar em contato com o administrador.'
            ], 403);
        }

        return $next($request);
    }
}
