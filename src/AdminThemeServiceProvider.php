<?php namespace Bitsoflove\AdminTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class AdminThemeServiceProvider extends AddonServiceProvider
{
    /**
     * The class bindings.
     *
     * @var array
     */
    protected $bindings = [
        'Anomaly\Streams\Platform\Asset\Asset' => 'Bitsoflove\AdminTheme\Streams\Platform\Asset\Asset',
    ];
}
