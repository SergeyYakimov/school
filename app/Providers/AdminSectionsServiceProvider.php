<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        //\App\User::class => 'App\Http\Sections\Users',
        \App\MainSettings::class => 'App\Http\Sections\MainSettings',
        \App\Abc::class => 'App\Http\Sections\Abc',
        \App\Goal::class => 'App\Http\Sections\Goal',
        \App\TargetCategory::class => 'App\Http\Sections\TargetCategory',
        \App\Price::class => 'App\Http\Sections\Price',
        \App\Profession::class => 'App\Http\Sections\Profession',
        \App\About::class => 'App\Http\Sections\About',
        \App\Achievement::class => 'App\Http\Sections\Achievement',
        \App\Format::class => 'App\Http\Sections\Format',
        \App\Video::class => 'App\Http\Sections\Video',
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
