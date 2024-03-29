<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'products;

    protected $fillable = ['name', 'price', 'description', 'image'];

    public function verifyProductsExist($name)
    {
        if ($product = self::where('name', $name)->first()) {
            return $product->id;
        }

        return 0;
    }

    public function search($filter = null)
    {
        $results = $this->where(function ($query) use ($filter) {
            if ($filter) {
                $query->where('name', 'LIKE', "%{$filter}%");
            }
        })
            ->paginate();

        return $results;
    }
}
