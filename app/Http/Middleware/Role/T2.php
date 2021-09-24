<?php

namespace App\Http\Middleware\Role;

use Auth;
use Closure;

class T2 {
  public function handle($request, Closure $next) {
    if ( Auth::user()->id_theme != '2' ) {
      return redirect('/dashboard/sections')->with('error', 'Restrict Area!');
    }

    return $next($request);
  }
}
