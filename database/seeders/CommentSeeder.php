<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_comment = new Comment();

        //create 50 comments with a loop    
        for ($i = 0; $i < 50; $i++) {

            $project = Project::inRandomOrder()->first();

            $new_comment = new Comment();
            $new_comment->project_id = $project->id;
            $new_comment->author = fake()->name();
            $new_comment->content = fake()->text();
            $new_comment->save();
        }
    }
}
