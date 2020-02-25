<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class OperationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 5;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        sleep(3);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
	    \Log::info("Hello, Job running");
	    //throw new \Exception("Uffi");
    }

    public function failed(Exception $exception)
    {
    	\Log::error("The job failed");
    }
}
