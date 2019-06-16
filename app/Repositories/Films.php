<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class Films extends GuzzleHttpRequest
{
    const NAME_ACTION = 'films';

    protected $typeAction = [
        'characters' => 'people',
        'planets' => 'planets',
        'starships' => 'starships',
        'vehicles' => 'vehicles',
        'species' => 'species'
    ];

    public function all()
    {
        return $this->get(self::NAME_ACTION);
    }

    public function findById( $id )
    {  
        $informationArray = [];

        $filmsArray = $this->get( self::NAME_ACTION . '/' . $id );

        foreach( $filmsArray['characters'] as $characters ){
      
            $informationArray[] = $this->get( 'people/' . preg_replace('/[^0-9]/', '', $characters ) );
      
        }

        $filmsArray['data'] = $informationArray;

        return $filmsArray;
    }

    public function find( $id, $type )
    {  
        $filmsArray = $this->get( self::NAME_ACTION . '/' . $id );

        $informationArray = [];

        $typeArray = [
            'characters' => 'personagem',
            'planets' => 'planetas',
            'starships' => 'naves',
            'vehicles' => 'veiculos',
            'species' => 'especies'
        ];

        if( empty( $filmsArray['title'] ) ){

            return [];

        }

        if( in_array( $type, $typeArray ) ){

            $indexAction = array_search( $type, $typeArray );

            foreach( $filmsArray[$indexAction] as $characters ){

                $informationArray[] = $this->get( $this->typeAction[$indexAction] . '/' . preg_replace('/[^0-9]/', '', $characters ) );

            }
            
            $filmsArray['data'] = $informationArray;

        }

        return $filmsArray;
    }

    public function findByTitle( $title )
    {
        $filmsArray = $this->all();

        if( empty( $filmsArray['results'] ) ){

            return [];
        
        }

        $indexValue = array_search( $title, array_column( $filmsArray['results'], 'title' ) );
        
        $filmsArray['results'] = [ $filmsArray['results'][$indexValue] ];

        return $filmsArray;
    }

    public function findByInformation( $type )
    {
        $filmsArray = $this->all();

        if( empty( $filmsArray['results'] ) ){

            return [];

        }

        $indexValue = array_search( $title, array_column( $filmsArray['results'], 'title' ) );
        
        $filmsArray['results'] = [ $filmsArray['results'][$indexValue] ];
        
        return $filmsArray;
    }
}