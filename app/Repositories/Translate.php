<?php

namespace App\Repositories;

class Translate
{
    private $translateArray = [
        'personagem' => 
        [
            'pt-br' => 
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
        'planetas' => 
        [
            'pt-br' => 
            [
                'Name',
                'Clima',
                'Gravidade',
                'Água',
                'População',
            ]
        ],
        'naves' => 
        [
            'pt-br' => 
            [
                'Name',
                'Modelo',
                'Fabricante',
                'Tripulação',
                'Classe',
            ]
        ],
        'veiculos' => 
        [
            'pt-br' => 
            [
                'Name',
                'Modelo',
                'Fabricante',
                'Tripulação',
                'Classe',
            ]
        ],
        'especies' => 
        [
            'pt-br' => 
            [
                'Name',
                'Classificação',
                'Desiginação',
                'Tempo de Vida',
                'Idioma',
            ]
        ],
    ];

    public function language($type, $language)
    {
        return $this->translateArray[$type][$language];
    }
}