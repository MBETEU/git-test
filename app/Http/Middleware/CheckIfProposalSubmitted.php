<?php

namespace App\Http\Middleware;

use App\Models\BloodDonor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIfProposalSubmitted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->proposals->contains('blood_donor_id', $request->donate->id))
        {
            return redirect()->route('user.donate.donors');
        }
        return $next($request);
    }
}
