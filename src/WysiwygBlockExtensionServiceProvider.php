<?php namespace Pixney\WysiwygBlockExtension;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Pixney\WysiwygBlockExtension\Test\Contract\TestRepositoryInterface;
use Pixney\WysiwygBlockExtension\Test\TestRepository;
use Anomaly\Streams\Platform\Model\WysiwygBlock\WysiwygBlockTestEntryModel;
use Pixney\WysiwygBlockExtension\Test\TestModel;
use Pixney\WysiwygBlockExtension\Block\Contract\BlockRepositoryInterface;
use Pixney\WysiwygBlockExtension\Block\BlockRepository;
use Anomaly\Streams\Platform\Model\WysiwygBlock\WysiwygBlockBlocksEntryModel;
use Pixney\WysiwygBlockExtension\Block\BlockModel;
use Illuminate\Routing\Router;

class WysiwygBlockExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Pixney\WysiwygBlockExtension\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Pixney\WysiwygBlockExtension\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Pixney\WysiwygBlockExtension\Event\ExampleEvent::class => [
        //    Pixney\WysiwygBlockExtension\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Pixney\WysiwygBlockExtension\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        WysiwygBlockTestEntryModel::class => TestModel::class,
        WysiwygBlockBlocksEntryModel::class => BlockModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        TestRepositoryInterface::class => TestRepository::class,
        BlockRepositoryInterface::class => BlockRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
