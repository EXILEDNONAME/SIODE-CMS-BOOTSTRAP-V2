<?php

namespace App\Http\Controllers\Backend\Main\T2;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class ContactUsController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->middleware('auth');
    $this->url = '/dashboard/themes-2/contact-us';
    $this->path = 'pages.backend.main.theme.t2.section.contact-us';
    $this->model = 'App\Models\Backend\Main\SectionContactUs';
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
