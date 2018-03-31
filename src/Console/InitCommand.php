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
    }
}