<?php

namespace App\Models\Backend\Main\T2;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ContactUs extends Model {

  use LogsActivity;

  protected $table = 'themes_2_contact_us';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
