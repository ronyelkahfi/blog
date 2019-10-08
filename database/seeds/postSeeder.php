<?php

use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 100; $i++) {
        DB::table('post')->insert([
            'post_title' => Str::random(10),
            'post_category' => Str::random(10),
            'post_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam sit amet nisl suscipit adipiscing bibendum est. Dui nunc mattis enim ut tellus elementum sagittis. At erat pellentesque adipiscing commodo elit at. Nisl nunc mi ipsum faucibus vitae aliquet nec. Suscipit tellus mauris a diam maecenas sed enim ut sem. Curabitur gravida arcu ac tortor dignissim convallis. Pharetra massa massa ultricies mi quis hendrerit dolor magna. Rhoncus urna neque viverra justo nec ultrices dui. Pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum. Euismod quis viverra nibh cras pulvinar. Augue neque gravida in fermentum et sollicitudin ac orci. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Porta lorem mollis aliquam ut porttitor. Arcu dui vivamus arcu felis bibendum. Nulla pellentesque dignissim enim sit amet venenatis urna. Tempus imperdiet nulla malesuada pellentesque. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Urna nunc id cursus metus aliquam eleifend. Quam viverra orci sagittis eu volutpat odio facilisis. Vitae suscipit tellus mauris a diam maecenas sed enim. Sed risus ultricies tristique nulla aliquet enim. Lectus nulla at volutpat diam ut venenatis tellus in metus. Faucibus ornare suspendisse sed nisi lacus. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Tincidunt tortor aliquam nulla facilisi cras fermentum odio. Parturient montes nascetur ridiculus mus mauris vitae ultricies leo integer. Turpis nunc eget lorem dolor sed. Luctus venenatis lectus magna fringilla urna porttitor rhoncus. Sagittis vitae et leo duis. Orci sagittis eu volutpat odio facilisis mauris sit amet massa.",
        ]);
      }
    }
}
