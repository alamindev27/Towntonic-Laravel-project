<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class WorkPermit extends Model
{
    /**
     * @var string
     */
    protected $table = 'work_permits';

    /**
     * @var array
     */
    protected $fillable = ['expatriaes_name','china_name','occupation','country_id','gender','dob','placeofissue','website_name','company_name','company_name_chinese','visa_no','visa_issue_date','visa_expiry_date','passport_no','passport_issue_date','passport_expiry_date','duration'];

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
