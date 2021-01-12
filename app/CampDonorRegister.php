<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampDonorRegister extends Model
{
    protected $table = 'camp_donor_register';

    protected $fillable = ['camp_id', 'camp_place', 'camp_date','camp_time', 
    'donor_id', 'donor_name', 'donor_phone', 'donor_bloodgroup', 'donor_bloodRh', 'donor_status'];
}
