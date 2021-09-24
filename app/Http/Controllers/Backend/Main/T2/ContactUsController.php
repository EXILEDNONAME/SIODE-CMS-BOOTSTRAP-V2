<?php

namespace App\Http\Controllers\Backend\Main\T2;

use Auth;
use DataTables;
use Redirect,Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

use App\Http\Requests\Backend\System\Dummy\Table\General\StoreRequest;
use App\Http\Requests\Backend\System\Dummy\Table\General\UpdateRequest;

class ContactUsController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->url = '/dashboard/sections/contact-us';
    $this->middleware('auth');

    if ( $this->middleware(['auth', 't2'])) {
      $this->path = 'pages.backend.main.theme-2.section.contact-us';
      $this->model = 'App\Models\Backend\Main\T2\ContactUs';
      $this->data = $this->model::get();
    }
  }

  /**
  **************************************************
  * @return SECTION-CONTACT-US
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
