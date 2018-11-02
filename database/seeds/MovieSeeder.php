<?php

use Illuminate\Database\Seeder;
use App\Movie;

/**
 * Class MovieSeeder
 * @Author Ryan Kennell
 */
class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies');

        $covers = array('lof.jpg', 'movie1.jpg', 'movie2.jpg', 'movie3.jpg', 'moviesCover.jpg');

        $num_movies = 15;

        for($i = 0; $i < $num_movies; $i ++)
        {
            Movie::create(array(
                'title' => 'Movie Title Number ' . $i,
                'rating' => 'T',
                'length' => rand(50, 100),
                'genreID'=> '2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor vitae ante a scelerisque. Vestibulum orci nulla, gravida sed quam id, aliquam aliquet mauris. Nulla et pharetra ipsum, non pretium odio. Cras sodales finibus eros nec consequat. Duis id tortor turpis. Donec in velit eu nibh interdum iaculis. Suspendisse lobortis leo ac fermentum fermentum. Sed cursus sapien quis lectus rutrum sodales. Nam laoreet nulla felis, quis ultricies arcu pretium in. Phasellus ac laoreet massa. Praesent scelerisque augue sit amet lacus cursus porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. In enim nibh, rutrum eu risus non, consequat.',
                'onDVD' => '1',
                'onBlueRay' => '0',
                'coverPhoto' => $covers[rand(0,4)]
            ));
        }

    }
}
