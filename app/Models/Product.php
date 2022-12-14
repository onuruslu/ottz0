<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function dedicated_servers()
    {
        return $this->hasMany(DedicatedServer::class, 'product_id');
    }
}
