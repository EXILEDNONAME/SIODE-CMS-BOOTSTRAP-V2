<?php

namespace App\Http\Controllers\Backend\Main\Section;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class AboutController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/sections/about';
    $this->path = 'pages.backend.main.section.about';
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
    $path = $this->path;
    return view($this->path . '.index', compact('data', 'path'));
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
