<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class EstimateHeader extends Model
{
    // テーブル名
    public $table = "D_請求書ヘッダー";

    // プライマリキー
    protected $primaryKey = [
        "請求書番号",
        "データ種別コード"
    ];

    public $incrementing = false;

    public function estimate_body()
    {
        return $this->hashMany(EstimateBody::class, ["請求書番号", "データ種別コード"], ["請求書番号", "データ種別コード"]);
    }
}
