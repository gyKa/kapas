<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedBookmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $bookmark = App\Bookmark::create([
            'title' => 'Clean Code Concepts Adapted for PHP',
            'url' => 'https://laravel-news.com/clean-code-php-guide',
        ]);
        $bookmark->tags()->saveMany([
            App\Tag::where('title', 'php')->first(),
            App\Tag::where('title', 'programming')->first(),
            App\Tag::where('title', 'clean-code')->first(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('bookmarks')->delete();
    }
}
