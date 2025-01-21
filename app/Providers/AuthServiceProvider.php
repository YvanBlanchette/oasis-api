<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
  protected $policies = [
    User::class => UserPermissionsPolicy::class,
  ];

  public function boot()
  {
    $this->registerPolicies();

    //
  }
}