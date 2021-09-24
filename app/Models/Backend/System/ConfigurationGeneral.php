<?php

namespace App\Models\Backend\System;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ConfigurationGeneral extends Model {

  use LogsActivity;

  protected $table = 'configuration_general';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
