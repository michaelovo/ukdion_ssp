<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use App\Notifications\NotifyEmailCampaign;


class EmailCampaign extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:campaignMessage';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email campaign message';

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
        $users = User::get();

        foreach($users as $user){

            $user->notify(new NotifyEmailCampaign());
        }
       // return Command::SUCCESS;
    }
}
