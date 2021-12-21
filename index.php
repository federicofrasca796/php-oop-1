<?php

class Movie
{
    public $name;
    public $release_year;
    public $director;
    public $actor_1;
    public $actor_2;

    /**
     * Constructor
     */
    function __construct(string $name, int $release_year, string $director, string $actor_1, string $actor_2)
    {
        $this->name = $name;
        $this->release_year = $release_year;
        $this->actor_1 = $actor_1;
        $this->actor_2 = $actor_2;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getMovieInfo()
    {
        return "This movies name is " . $this->name . '. It was released in' . $this->release_year . '. Directed by ' . $this->director . ' and played by ' . $this->actor_1 . ' and ' . $this->actor_2;
    }
}

$matrix = new Movie('Matrix', 2001, 'Lana Wachowski', 'Keanu Reeves', 'Carrie-Annie Moss');
$the_ring = new Movie('The Ring', 2003, 'Gore Verbinski', 'Naomi Watts', 'David Dorfman');

var_dump($matrix, $the_ring);
echo $matrix->getMovieInfo() . '<br>';
echo $the_ring->getMovieInfo();
