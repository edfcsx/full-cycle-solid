<?php

abstract class Video
{
    abstract public function calculaInteresse();
}

class Movie extends Video
{
    public function calculaInteresse()
    {
        // calcula
    }
}

class TVShow extends Video
{
    public function calculaInteresse()
    {

    }
}

/**
 * Agora toda vez que eu precisar calcular o interesse
 * basta apenas criar uma nova classe e implementar o metodo definido
 * assim minha classe Video está fechada para modificações porém consegue
 * ser expandida
 */
