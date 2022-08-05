<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FiveMinutePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command fetches posts from provided API';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $this->output->progressStart(count($posts));
        foreach ($posts as $post) {
            Post::updateOrCreate(
                ['id' => $post['id']],
                ['userId' => $post['id'], 'title' => $post['title'], 'body' => $post['body']]
            );
            sleep(2);
            $this->output->progressAdvance();
        }
        return 0;
    }
}
