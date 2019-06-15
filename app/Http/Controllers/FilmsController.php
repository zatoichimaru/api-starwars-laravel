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
        $peopleArray = $this->films->all();

        return view('films.index', compact('peopleArray'));
    }

    public function findById($id)
    {
        $peopleArray = $this->films->findById($id);

        return view('films.show', compact('peopleArray'));
    }

    public function find($id, $type)
    {
        $peopleArray = $this->films->find($id, $type);

        return view('films.show', compact('peopleArray'));
    }

    public function findByTitle($title)
    {
        $peopleArray = $this->films->findByTitle($title);

        return view('films.index', compact('peopleArray'));
    }
}
