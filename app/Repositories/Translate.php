<?php

namespace App\Repositories;

class Translate
{
    private $translateName = [
        'people' => 
        [
            'pt' => 
            [
                'Name',
                'Altura',
                'Peso',
                'Cabelo',
                'Pele',
                'Olhos',
                'Gênero',
            ]

        ],
        'planets' => 
        [
            'pt' => 
            [
                'Name',
                'Clima',
                'Gravidade',
                'Água',
                'População',
            ]
        ],
        'starships' => 
        [
            'pt' => 
            [
                'Name',
                'Modelo',
                'Fabricante',
                'Tripulação',
                'Classe',
            ]
        ],
        'vehicles' => 
        [
            'pt' => 
            [
                'Name',
                'Modelo',
                'Fabricante',
                'Tripulação',
                'Classe',
            ]
        ],
        'species' => 
        [
            'pt' => 
            [
                'Name',
                'Classificação',
                'Desiginação',
                'Tempo de Vida',
                'Idioma',
            ]
        ],
    ];

    public function language($type)
    {
        return $translateName[$type];
    }
}