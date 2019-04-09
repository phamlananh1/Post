<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post();
        $post->title = 'Hướng dẫn xây dựng ứng dụng nghe nhạc dành cho Android';
        $post->description = ' ứng dụng nghe nhạc';
        $post->content = 'Trong phiên hướng dẫn này chúng ta sẽ xây dựngự xây dựng các ứng dụng khác với quy mô tương tự. ';
        $post->image = "https://codegym.vn/wp-content/uploads/2019/01/lap-trinh-web-bang-wordpress-5.jpg";
        $post->user_id = 1;
        $post->save();


        $post = new \App\Post();
        $post->title = 'Hướng dẫn xây dựng ứng dụng nghe nhạc dành cho Android';
        $post->description = ' ứng dụng nghe nhạc';
        $post->content = 'Trong phiên hướng dẫn này chúng ta sẽ xây dựngc với quy mô tương tự. ';
        $post->image = "https://codegym.vn/wp-content/uploads/2019/01/hoc-lap-trinh-php-o-dau-tot-nhat-6-1.jpg";
        $post->user_id = 1;
        $post->save();
    }
}
