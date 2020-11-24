<?php

namespace App\Console\Commands;

use App\Http\Controllers\SignalsController;
use App\Signals;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class GetFromFileCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getFileContent:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Data from files and insert to table "signals"';

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
     * @return void
     */
    public function handle()
    {
        app(SignalsController::class)->signals();
    }
}
