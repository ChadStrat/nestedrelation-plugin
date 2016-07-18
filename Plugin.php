<?php namespace Radiantweb\NestedRelation;

use Backend;
use System\Classes\PluginBase;

/**
 * NestedRelation Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'NestedRelation',
            'description' => 'No description provided yet...',
            'author'      => 'Radiantweb',
            'icon'        => 'icon-cubes'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Radiantweb\NestedRelation\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'radiantweb.nestedrelation.some_permission' => [
                'tab' => 'NestedRelation',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'nestedrelation' => [
                'label'       => 'NestedRelation',
                'url'         => Backend::url('radiantweb/nestedrelation/things'),
                'icon'        => 'icon-diamond',
                'permissions' => ['radiantweb.nestedrelation.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerFormWidgets() {
        return [
            'Radiantweb\NestedRelation\Formwidgets\showstuff' => [
                'label' => 'ShowStuff',
                'code' => 'showstuff'
            ],
            'Radiantweb\NestedRelation\Formwidgets\showmorestuff' => [
                'label' => 'ShowMoreStuff',
                'code' => 'showmorestuff'
            ],
        ];
    }


}
