<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\View;
use App\Models\CourseCategory;
use App\Models\Branch;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Builder::defaultStringLength(191);
        $branch =Branch::with('country')->with('venue')->where('active', '=',1)->where('hq', '=',1)->firstOrFail();
        $courseCategories =CourseCategory::with('courseSubCategories')->where('id', '!=',4)->where('id', '!=',6)->where('active', '=',1)->get();
        View::share(['courseCategories' => $courseCategories, 'branch' => $branch]);
    }
}
