<?php

namespace App\Console\Commands;

use App\Models\Application;
use App\Models\User;
use Illuminate\Console\Command;

class ForceDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'force-delete {models} {days}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'force deletes models';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info($this->argument('models'));
        $this->info($this->argument('days'));
        $models = explode(',', $this->argument('models'));
        for ($i = 0; $i < count($models); $i++) {
            if ($models[$i] == strtolower(trim('application'))) {
                Application::onlyTrashed()->where('deleted_at', '<=', now()->subDays($this->argument('days')))->forceDelete();
            } else {
                User::onlyTrashed()->where('deleted_at', '<=', now()->subDays($this->argument('days')))->forceDelete();
            }
        }

        return Command::SUCCESS;
    }
}
