<?php

namespace App\Providers;

use App\Models\job_listing;
use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('edit_jobs', function (User $user, job_listing $job_listing) {
            return $job_listing->employee->user->is($user); 
        });
        Model::preventLazyLoading();
        PaginationPaginator::useTailwind();   
    }
}
