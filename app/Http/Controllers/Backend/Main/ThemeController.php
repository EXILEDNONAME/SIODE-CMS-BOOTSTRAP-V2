<?php

namespace App\Http\Controllers\Backend\Main;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

use App\Http\Requests\Backend\Main\Theme\StoreRequest;
use App\Http\Requests\Backend\Main\Theme\UpdateRequest;

class ThemeController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware(['auth', 'administrator']);
    $this->url = '/dashboard/themes';
    $this->path = 'pages.backend.main.theme';
    $this->model = 'App\Models\Backend\Main\Theme';
    $this->data = $this->model::get();
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
      ->rawColumns(['description'])
      ->addIndexColumn()
      ->make(true);
    }
    return view($this->path . '.index', compact('model'));
  }

  /**
  **************************************************
  * @return Enable
  * @return Disable
  * @return Status-Done
  * @return Status-Pending
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

  public function status_done($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 1 ]);
    return Response::json($data);
  }

  public function status_pending($id) {
    $data = $this->model::where('id', $id)->update([ 'status' => 2 ]);
    return Response::json($data);
  }

}
