<?php

use Illuminate\Database\Seeder;
use App\Genre;

/**
 * Class GenreSeeder
 *
 * @author Ryan Kennell
 */
class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->delete();

        Genre::create(array(
            'name'=> 'Action',
            'description'=> 'An action story is similar to adventure, and the protagonist usually takes a risky turn.',
        ));

        Genre::create(array(
            'name'=> 'Adventure',
            'description'=> 'An adventure story is about a protagonist who journeys to epic or distant places to accomplish something.',
        ));

        Genre::create(array(
            'name'=> 'Comedy',
            'description'=> 'Comedy is a story that tells about a series of funny, or comical events, intended to make the audience laugh.',
        ));

        Genre::create(array(
            'name'=> 'Crime',
            'description'=> 'A crime story is about a crime that is being committed or was committed. It can also be an account of a criminal\'s life.',
        ));

        Genre::create(array(
            'name'=> 'Drama',
            'description'=> 'Drama is a genre of narrative fiction (or semi-fiction) intended to be more serious than humorous in tone,focusing on in-depth development of realistic characters who must deal with realistic emotional struggles.',
        ));

        Genre::create(array(
            'name'=> 'Fantasy',
            'description'=> 'A fantasy story is about magic or supernatural forces, rather than technology (as science fiction) if it happens to take place in a modern or future era.',
        ));

        Genre::create(array(
            'name'=> 'Horror',
            'description'=> 'A horror story is told to deliberately scare or frighten the audience, through suspense, violence or shock.',
        ));

        Genre::create(array(
            'name'=> 'Romance',
            'description'=> 'The term "romance" has multiple meanings; historical romances like those of Walter Scott would use the term to mean "a fictitious narrative in prose or verse; the interest of which turns upon marvellous and uncommon incidents".[8] But most often a romance is understood to be "love stories", emotion-driven stories that are primarily focused on the relationship between the main characters of the story. Beyond the focus on the relationship, the biggest defining characteristic of the romance genre is that a happy ending is always guaranteed...',
        ));

        Genre::create(array(
            'name'=> 'Western',
            'description'=> 'Stories in the Western genre are set in the American West, between the time of the Civil war and the early twentieth century.',
        ));
    }
}
