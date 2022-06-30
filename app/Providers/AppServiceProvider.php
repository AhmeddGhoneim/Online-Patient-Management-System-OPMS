<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Doctor\repositories\CategoryRepository;
use Modules\Doctor\Entities\Blog;
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

        if (\Illuminate\Support\Facades\Schema::hasTable('categories')) {
            
            $CategoryRepository=new CategoryRepository();
            $categories=$CategoryRepository->all();
            $Recent_Blogs=Blog::with('doctor')->take(2)->orderBy('id','desc')->get();
            $times = ['12::00am','1::00am','2::00am','3::00am','4::00am','5::00am','6::00am','7::00am','8::00am','9::00am','10::00am','11::00am','12::00pm',
             '12::00pm','1::00pm','2::00pm','3::00pm','4::00pm','5::00pm','6::00pm','7::00pm','8::00pm','9::00pm','10::00pm','11::00pm'];
             view()->share('categories', $categories);
             view()->share('times', $times);
             view()->share('Recent_Blogs', $Recent_Blogs);
        }

      
    }
}
