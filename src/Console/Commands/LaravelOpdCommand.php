<?php namespace Bantenprov\LaravelOpd\Console\Commands;

use Illuminate\Console\Command;

/**
 * The LaravelOpdCommand class.
 *
 * @package Bantenprov\LaravelOpd
 * @author  bantenprov <developer.banten@gmail.com>
 */
class LaravelOpdCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:laravel-opd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\LaravelOpd package';

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
        $this->info('Welcome to command for Bantenprov\LaravelOpd package');
    }
}
