<?php

namespace iBourgeois\Torch\Console;

use Illuminate\Console\Command;

class ConsoleCommand extends Command
{
	/**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'torch:console';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

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
        //
    }
}