<?php

namespace App\Http\Controllers\Backend\Main\Configuration;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

use App\Http\Requests\Backend\System\Dummy\Table\General\StoreRequest;
use App\Http\Requests\Backend\System\Dummy\Table\General\UpdateRequest;

class AboutController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {

    $this->middleware('auth');
    $this->url = '/dashboard/dummy/table/generals';
    $this->path = 'pages.backend.main.configuration.about';
    $this->modelConfigurationAbout = 'App\Models\Backend\System\Dummy\Table\General';
    $this->modelConfigurationAbout::get();

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
      ->editColumn('date_start', function($order) { return \Carbon\Carbon::parse($order->date_start)->format('d F Y, H:i'); })
      ->editColumn('date_end', function($order) { return \Carbon\Carbon::parse($order->date_end)->format('d F Y, H:i'); })
      ->rawColumns(['description'])
      ->addIndexColumn()
      ->make(true);
    }
    return view($this->path . '.index', compact('model'));
  }

  /**
  **************************************************
  * @return CONFIGURATION-SECTION-ABOUT
  **************************************************
  **/

  public function about() {
    $data = $this->modelConfigurationAbout::first();
    $path = $this->path;
    return view($this->path . '.index', compact('data', 'path'));
  }

  public function about_update(Request $request) {
    $data = $this->modelConfigurationAbout::first();
    $update = $request->all();
    $data->update($update);
    return redirect($this->url . '/section/teams')->with('success', trans('default.notification.success.profile-updated'));
  }

}
