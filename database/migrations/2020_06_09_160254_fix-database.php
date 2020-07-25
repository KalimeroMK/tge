<?php

use App\Models\Post;
use Illuminate\Database\Migrations\Migration;

class FixDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach (Post::all() as $posts) {
            $posts->views = rand(500, 10000);
            $posts->update();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
