<?php 

namespace iBourgeois\Torch;

use Illuminate\Support\ServiceProvider;
use iBourgeois\Torch\Console\CICommand;
use iBourgeois\Torch\Console\UpCommand;
use iBourgeois\Torch\Console\DownCommand;
use iBourgeois\Torch\Console\FuelCommand;
use iBourgeois\Torch\Console\InitCommand;
use iBourgeois\Torch\Console\StopCommand;
use iBourgeois\Torch\Console\StartCommand;
use iBourgeois\Torch\Console\ConfigCommand;
use iBourgeois\Torch\Console\IgniteCommand;
use iBourgeois\Torch\Console\ServerCommand;
use iBourgeois\Torch\Console\ConsoleCommand;

class TorchServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // register torch commands
        if ($this->app->runningInConsole()) {
            if (file_exists(config_path('torch.php'))) {
                $this->commands([
                    CICommand::class,
                    UpCommand::class,
                    DownCommand::class,
                    FuelCommand::class,
                    StopCommand::class,
                    StartCommand::class,
                    ConfigCommand::class,
                    IgniteCommand::class,
                    ServerCommand::class,
                    ConsoleCommand::class,
                ]);
            } else {
                $this->commands([
                    InitCommand::class,
                ]);
            }
        };

        // publish torch cli tool
        $this->publishes([
            __DIR__.'/../config/torch.php' => config_path('torch.php'),
        ], 'torch');

    }
}