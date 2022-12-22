<?php

namespace App\Providers;

use App\Services\Anagram\AnagramFinder;
use App\Services\Anagram\AnagramFinderInterface;
use App\Services\Wordbase\EkiWordbaseSource;
use App\Services\Wordbase\WordbaseSourceInterface;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use Psr\Http\Client\ClientInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AnagramFinderInterface::class,AnagramFinder::class);
        $this->app->bind(WordbaseSourceInterface::class,EkiWordbaseSource::class);
        $this->app->bind(ClientInterface::class,Client::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
