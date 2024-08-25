<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SocialUserResolver;
use Coderello\SocialGrant\Resolvers\SocialUserResolverInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(\App\Repositories\CompanyRepository::class, \App\Repositories\CompanyRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CompanyProgramsRepository::class, \App\Repositories\CompanyProgramsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserProgramPointsRepository::class, \App\Repositories\UserProgramPointsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AuthenticationMechanismRepository::class, \App\Repositories\AuthenticationMechanismRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\SocialLoginRepository::class, \App\Repositories\SocialLoginRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CategoryRepository::class, \App\Repositories\CategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TransactionRepository::class, \App\Repositories\TransactionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ConversionRateRepository::class, \App\Repositories\ConversionRateRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\RewardsRepository::class, \App\Repositories\RewardsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\RedemptionRepository::class, \App\Repositories\RedemptionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\SambazaRepository::class, \App\Repositories\SambazaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\OptedInProgramsRepository::class, \App\Repositories\OptedInProgramsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CustomerRepository::class, \App\Repositories\CustomerRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\VirtualCardRepository::class, \App\Repositories\VirtualCardRepositoryEloquent::class);

        $this->app->bind(SocialUserResolverInterface::class, SocialUserResolver::class);
        $this->app->bind(\App\Repositories\FaqRepository::class, \App\Repositories\FaqRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CustomerQuestionRepository::class, \App\Repositories\CustomerQuestionRepositoryEloquent::class);
        //:end-bindings:
    }
}
