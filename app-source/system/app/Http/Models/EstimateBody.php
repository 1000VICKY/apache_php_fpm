<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class EstimateBody extends Model
{


    public $table = "D_請求書明細";

    protected $primaryKey = [
        "請求書番号",
        "データ種別コード",
        "請求書明細区分コード",
        "請求書明細行番号"
    ];
    public $incrementing = false;
}
