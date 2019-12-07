<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    //定义可供修改的表字段
    protected $fileable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];

    //表示last_used_at字段是一个时间日期类型
    protected $dates = ['last_used_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    //创建一个访问器来获取完整的地址
    public function getFullAddressAttribute(){
        return "{$this->province}{$this->city}{$this->address}";
    }
}
