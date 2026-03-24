<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Employe;
use Symfony\Component\HttpFoundation\Response;

class VerifAppartenanceCampus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = $request->route('id');
        $employe = Employe::findOrFail($id);

        if ($employe->campuses->count() > 0) {
            return $next($request);
        }

        return redirect()->route('employes.index')->with('error', "L'employé n'est rattaché à aucun campus.");
    }
}
