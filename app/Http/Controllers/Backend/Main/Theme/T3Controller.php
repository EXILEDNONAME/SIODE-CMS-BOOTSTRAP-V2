<?php

namespace App\Http\Controllers\Backend\Main\Theme;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class T3Controller extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/themes-3';
    $this->path = 'pages.backend.main.theme.t3';
    $this->model = 'App\Models\Backend\Main\Section';
    $this->data = $this->model::where('id_theme', 3)->orderBy('active', 'asc')->orderBy('sort', 'asc')->get();
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    $model = $this->model;
    if(request()->ajax()) {
      return DataTables::of($this->data)
      ->editColumn('id_themes', function($order) { return $order->themes->name; })
      ->rawColumns(['description'])
      ->addIndexColumn()
      ->make(true);
    }

    $data = $this->model::where('id_theme', 2)->get();
    return view($this->path . '.index', compact('data', 'model'));
  }

  /**
  **************************************************
  * @return Enable
  * @return Disable
  **************************************************
  **/

  public function enable($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 1 ]);
    return Response::json($data);
  }

  public function disable($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 2 ]);
    return Response::json($data);
  }

}
