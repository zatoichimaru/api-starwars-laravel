<?php

namespace App\Http\Controllers;

use App\Repositories\Films;
use App\Repositories\Translate;

use Illuminate\Http\Request;

class FilmsController extends Controller
{
    protected $films;
    protected $translate;

    public function __construct(Films $films, Translate $translate)
    {
        $this->films = $films;
        $this->translate = $translate;
    }

    public function index()
    {
        $filmArray = $this->films->all();

        return view('films.index', compact('filmArray'));
    }

    public function findById($id)
    {
        $informationFilmArray = $this->films->findById($id);

        $informationFilmArray['translate'] = $this->translate->language('personagem','pt-br');

        return view('films.show', compact('informationFilmArray'));
    }

    public function find($id, $type)
    {
        $informationFilmArray = $this->films->find($id, $type);

        $informationFilmArray['translate'] = $this->translate->language($type, 'pt-br');

        return view('films.show', compact('informationFilmArray'));
    }

    public function findByTitle($title)
    {
        $informationFilmArray = $this->films->findByTitle($title);

        return view('films.index', compact('informationFilmArray'));
    }
}
