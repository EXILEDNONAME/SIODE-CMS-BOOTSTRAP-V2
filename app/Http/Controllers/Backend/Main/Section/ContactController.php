<?php

namespace App\Http\Controllers\Backend\Main\Section;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class ContactController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/sections/contact';
    $this->path = 'pages.backend.main.section.contact';
    $this->model = 'App\Models\Backend\Main\SectionContact';
    $this->data = $this->model::get();
  }

  /**
  **************************************************
  * @return SECTION-CONTACT-US
  **************************************************
  **/

  public function index() {
    $data = $this->model::first();
    $path = $this->path;
    return redirect($this->url . '/..')->with('error', trans('default.notification.error.no-configuration'));
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
