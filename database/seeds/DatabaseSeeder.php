<?php

use Illuminate\Database\Seeder;

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
            factory(App\User::class, 20)->create()->each(function($user){
                $user->profile()->save(factory(App\Profile::class)->make());
            });

            factory(App\Company::class, 10)->create()->each(function($company){
                $ids = range(1, 50);
                shuffle($ids);
                $sliced = array_slice($ids, 1, 20);
                $company->projects()->attach($sliced);
            });

            factory(App\Project::class, 30)->create()->each(function($project){
                $ids = range(1, 50);
                shuffle($ids);
                $sliced = array_slice($ids, 1, 20);
                $project->users()->attach($sliced);
            });

            factory(App\Role::class, 4)->create()->each(function($role){
                $ids = range(1, 5);
                shuffle($ids);
                $sliced = array_slice($ids, 1, 20);
                $role->users()->attach($sliced);
            });
            factory(App\Task::class, 100)->create()->each(function($task){
                $ids = range(1, 50);
                shuffle($ids);
                $sliced = array_slice($ids, 1, 20);
                $task->users()->attach($sliced);
            });

            factory(App\Country::class, 30)->create();
            factory(App\Comment::class, 60)->create();

            factory(App\Article::class, 50)->create()->each(function($article){
                $ids = range(1, 50);
                shuffle($ids);
                $sliced = array_slice($ids, 1, 20);
                $article->tags()->attach($sliced);
            });

            factory(App\Tag::class, 20)->create();

            factory(App\Review::class, 50)->create()->each(function($review){
                $ids = range(1, 50);
                shuffle($ids);
                $sliced = array_slice($ids, 1, 20);
                $review->tags()->attach($sliced);
            });


    }
}
