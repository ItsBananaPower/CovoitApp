<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifPossessionVoiture
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $id = $request->route('id');
        $employe = \App\Models\Employe::findOrFail($id);

        if ($employe->voitures->count() > 0) {
            return $next($request);
        }

        return redirect()->route('voitures.create', ['id_employe' => $id]);
    }
}
