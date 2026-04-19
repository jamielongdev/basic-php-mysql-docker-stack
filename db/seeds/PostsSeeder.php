<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class PostsSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = [
            [
                'title'      => 'First Post',
                'body'       => 'This is the body of the first post.',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'      => 'Second Post',
                'body'       => 'Here is some more text for the second post.',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title'      => 'Third Post',
                'body'       => 'This is the third post body text.',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $posts = $this->table('posts');
        $posts->insert($data)->saveData();
    }
}
