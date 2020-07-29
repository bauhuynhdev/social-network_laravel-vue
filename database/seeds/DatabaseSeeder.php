<?php

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $amount = 20;

        factory(User::class, $amount)->create();
        factory(Post::class, $amount)->create();
        factory(Comment::class, $amount)->create();
        for ($i = 1; $i <= 60; $i++) {
            $user_id = rand(1, $amount);
            DB::table('friends')->insert([
                'user_id' => $user_id,
                'friend_id' => $this->checkDuplicateUserAndFriend($user_id, $amount)
            ]);

            DB::table('likes')->insert([
                'post_id' => rand(1, $amount),
                'user_id' => $user_id
            ]);
        }
    }

    private function checkDuplicateUserAndFriend($user_id, $amount)
    {
        $friend_id = rand(1, $amount);
        if ($user_id === $friend_id) {
            return $this->checkDuplicateUserAndFriend($user_id, $amount);
        }

        return $friend_id;
    }
}
