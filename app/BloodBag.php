<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodBag extends Model
{
    protected $table = 'blood_bag';

    protected $fillable = ['bbag_id', 'donor_id', 'donor_name', 'donor_bloodgroup', 'donor_bloodRh',
     'bbag_vol', 'bbag_comp', 'received_date', 'expiry_date', 'camp_id', 'hosp_name' ];
}
