<?php

namespace FilippoToso\TestEmail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;

class TestEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:email {--to=default} {--queue}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a test email using the current mail configuration';

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

        $to = $this->option('to');

        if ($to == 'default') {
            $to = config('mail.from.address');
        }

        if ($this->option('queue')) {
            TestEmailJob::dispatch($to);
        } else {
            Mail::to($to)->send(new TestEmail());
        }
    }
}
