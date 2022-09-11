<?php

class Movie
{
    public $id;
    public $title;
    public $year;
    public $description;


    public function __construct($_id, $_title, $_year, $_description)
    {
        $_id -> $id;
        $_title->$title;
        $_year->$year;
        $_description->$description;
    }
    
    public function getAbstract($max = 30){
       return substr($this->description, 0, $max) . '...';
    }

}

$movie1_description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam perspiciatis voluptatem voluptates animi fuga, 
fugit eos fugiat suscipit ducimus maiores deserunt nisi consectetur inventore aspernatur doloremque blanditiis quos optio! Distinctio.";

$movie2_description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam perspiciatis voluptatem voluptates animi fuga, 
fugit eos fugiat suscipit ducimus maiores deserunt nisi consectetur inventore aspernatur doloremque blanditiis quos optio! Distinctio.";


$movie_1 = new Movie(1,"Deadpool","2016", $movie1_description);


$movie_2 = new Movie(2,"Deadpool 2", "2020", $movie2_description);


echo $movie_1;
















?>