<?php

namespace App\Providers;

use App\Category;
use App\Image;
use App\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Paginate a standard Laravel Collection.
         *
         * @param int $perPage
         * @param int $total
         * @param int $page
         * @param string $pageName
         * @return array
         */
        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
        Blade::if('admin', function (){
            if (request()->user()) {
                return request()->user()->isAdmin();
            }
            return false;
        });

//        view()->composer('blocks.right-sidebar.new', function ($view) use ($articles_for_subblock) {
//            $view->with('articles_for_subblock', $articles_for_subblock);
//        });

        if (Schema::hasTable('products')) {
            $collection = Product::all();
            $random = $collection->count() > 0 ? $collection->random(1) : null;
            View::share('random', $random);

            $categories = Category::all();
            View::share('categories', $categories);

            $hits = Product::where('hit', '=', 1)->get();
            $rand_hit = count($hits) ? $hits->random(7) : null;
            View::share('hits', $rand_hit);

            $images = Image::where('active', 1)->get();
            View::share('images', $images);
        }
    }
}
