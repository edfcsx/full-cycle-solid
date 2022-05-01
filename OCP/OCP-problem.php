<?php

class Video
{
    private $type;

    public function calculaInteresse()
    {
        if ($this->type == "Movie") {
            // calcula interesse baseado em filme
        } else if ($this->type == "TVShow") {
            // calcula interesse baseado em serie
        }
    }
}


/*
    Essa calsse Video está ferindo o principio de open/closed
    pois ela não está fechada para modificações, toda vez 
    que um tipo novo for incluido ela deve ser 
    modificada
*/