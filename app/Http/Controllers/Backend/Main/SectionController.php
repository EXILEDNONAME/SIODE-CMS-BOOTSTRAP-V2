<?php

namespace App\Http\Controllers\Backend\Main;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class SectionController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/sections';
    $this->path = 'pages.backend.main.section';
    $this->model = 'App\Models\Backend\Main\Section';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    if ( Auth::User()->id_theme == 1 ) { $data = $this->model::get()->where('id_theme', 1); }
    if ( Auth::User()->id_theme == 2 ) { $data = $this->model::get()->where('id_theme', 2); }
    if ( Auth::User()->id_theme == 3 ) { $data = $this->model::get()->where('id_theme', 3); }
    $model = $this->model;
    if(request()->ajax()) {
      return DataTables::of($data)
      ->rawColumns(['description'])
      ->addIndexColumn()
      ->escapeColumns('name')
      ->make(true);
    }
    return view($this->path . '.index', compact('model'));
  }

}
