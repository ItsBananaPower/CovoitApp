<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Voiture;
use Symfony\Component\HttpFoundation\Response;

class VerifCapaciteVoiture
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = $request->route('id');
        $voiture = Voiture::findOrFail($id);

         if ($voiture->nb_places >= 8) {
            return back()->with('erreur_bus', 'Visualisation des bus en cours');
        }

        return $next($request);
    }
}
