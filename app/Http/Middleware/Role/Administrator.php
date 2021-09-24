<?php

namespace App\Http\Middleware\Role;

use Auth;
use Closure;

class Administrator {
  public function handle($request, Closure $next) {
    if ( Auth::user()->id_role == '1' ) {
      return $next($request);
    }

    return redirect('/dashboard/sections')->with('error', 'Restrict Area!');

  }
}
