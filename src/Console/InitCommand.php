<?php

namespace iBourgeois\Torch\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InitCommand extends Command
{
	/**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'torch:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize torch for this project';

    private $torch = 'torch/torch.yml';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // publish torch config file
        $this->call('vendor:publish', [
            '--tag' => 'torch'
        ]);

        // create torch directory
        File::makeDirectory(base_path('torch'));

        // check for Docker
        $this->info(
            'Docker Version: ' 
            . exec("docker version --format '{{.Server.Version}}'", $version, $return
        ) 
        ? $this->setDockerVersion($version) 
        : 'Docker not installed');

        
    }

    private function setDockerVersion($version) 
    {
        File::put(base_path($this->torch), '- docker:');
        File::append(base_path($this->torch), '    version: ' . $version);

        return $version;
    }
}