<?php

namespace App\Http\Controllers\Backend\Main\T2;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

use App\Http\Requests\Backend\Main\Theme\StoreRequest;
use App\Http\Requests\Backend\Main\Theme\UpdateRequest;

class AboutController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->url = '/dashboard/themes-2/about';
    $this->middleware('auth');
      $this->path = 'pages.backend.main.theme.t2.section';
      $this->model = 'App\Models\Backend\Main\SectionAbout';
      $this->data = $this->model::get();
  }

  /**
  **************************************************
  * @return SECTION-ABOUT
  **************************************************
  **/

  public function index() {
    $data = $this->model::first();
    $path = $this->path . '.about';
    return view($this->path . '.about.index', compact('data', 'path'));
  }

  public function store(Request $request) {
    $store = $request->all();
    $this->model::create($store);
    return redirect($this->url)->with('success', trans('default.notification.success.item-created'));
  }

  public function update(Request $request) {
    $data = $this->model::first();
    $update = $request->all();
    $data->update($update);
    return redirect($this->url)->with('success', trans('default.notification.success.item-updated'));
  }

}
