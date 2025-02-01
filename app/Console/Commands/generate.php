<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Generate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wingen:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates a WinterCMS Project';

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
     * @return int
     */
    public function handle()
    {
        $this->info("wingen");
        return 0;
    }
}
