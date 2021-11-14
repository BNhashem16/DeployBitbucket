<?php

namespace Bnhashem\DeployBitbucket;

use Illuminate\Support\ServiceProvider;

class DeployBitbucketServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__. '/bitbucket-pipelines.yml'     => base_path('bitbucket-pipelines.yml'),
            __DIR__. '/deployment-exclude-list.txt' => base_path('deployment-exclude-list.txt'),
            __DIR__. '/Envoy.blade.php'             => base_path('Envoy.blade.php'),
            __DIR__. '/bitbucket.php'               => base_path('bitbucket.php'),
        ]);
        
    }

}
