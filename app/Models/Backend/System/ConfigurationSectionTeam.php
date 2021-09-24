<?php

namespace App\Models\Backend\System;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ConfigurationSectionTeam extends Model {

  use LogsActivity;

  protected $table = 'configuration_section_teams';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}
