<?php

class Movie{
  public $name;
  public $year;
  public $vote;
  public $duration;

  function __construct($_name, $_year, $_vote, $_duration)
  { 
    $this->name = $_name;
    $this->year = $_year;
    $this->vote = $_vote;
    $this->duration = $_duration;
  }

  public function getAllData(){
    return 'nome: '. $this->name .'/ anno: '. $this->year .'/ votazione: '. $this->vote .'/ durata: '. $this->duration;
  }
}

$matrix = new Movie("Matrix", 1999, "8,7", "2h 16min");

$jurassicPark = new Movie("Jurassic Park", 1993, "8,2", "2h 7min");

?>