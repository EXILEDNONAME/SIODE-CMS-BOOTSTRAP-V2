<?php

namespace App\Models\Backend\Main;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Theme extends Model {

  use LogsActivity;

  protected $table = 'themes';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
