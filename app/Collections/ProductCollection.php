<?php


namespace App\Collections;



use App\Category;
use Illuminate\Database\Eloquent\Collection;

class ProductCollection extends Collection
{
    public function sortAndFilter($data)
    {
        $model = $this;

        if ($allCatalog = $data->allCatalog) {
            $model = $this->catalog($model, $allCatalog);
        }

        if (($priceMin = $data->inputFirst) && ($priceMax = $data->inputSecond)) {
            $model = $this->price($model, $priceMin, $priceMax);
        }

        return $model;
    }

    public function catalog($model, $allCatalog)
    {
        return Category::whereIn('id', array_keys($allCatalog))->get()->map(function ($item) {
            return $item->products;
        })->flatten();
    }

    public function price($model, $priceMin, $priceMax)
    {
        return $model->filter(function ($value, $key) use ($priceMin, $priceMax) {
            return $value->sizesWholesale->where('price', '>=', $priceMin)->where('price', '<=', $priceMax)->count() ? true : false;
        });
    }
}
