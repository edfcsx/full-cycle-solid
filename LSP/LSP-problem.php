<?php
# subclasses podem ser substituidas pelas suas classes pai

class Movie
{
    public function play()
    {
        // play no video
    }

    public function increaseVolume()
    {

    }
}

class TheLionKing extends Movie
{

}

class ModernTimes extends Movie
{
    public function increaseVolume()
    {

    }
}

$movie = new Movie();
$movie = new TheLionKing();

/*
    No caso do movie e TheLionKing todos são filmes e conseguem em si aumentar o volume com o
    metodo increaseVolume porém o ModernTimes ele fere o principio devido a ser um filme mudo
    onde o metodo increaseVolume não faz sentido em um filme de categoria mudo, mesmo que o
    metodo seja reimplementado ele fere o principio base então o filme ModerTimes deveria
    ter um extends de uma classe MuteMovie ou algo que faça mais sentido ao seu contexto
*/