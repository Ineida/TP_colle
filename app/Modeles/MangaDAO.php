<?php

namespace App\Modeles;

use App\Metier\Manga;
use Illuminate\Database\Eloquent\Model;
use DB;

class MangaDAO extends DAO{


    public function getLesMangas(){
        $Mangas=DB::table('manga')->get();

        $lesMangas=array();
        foreach ($Mangas as $manga) {
            $idManga=$manga->id_manga;
            $lesMangas[$idManga]=$this->creerObjetMetier($manga);
        }
        return $lesMangas;
    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        // TODO: Implement creerObjetMetier() method.
        $leManga = new Manga();
        $leManga->setIdManga($objet->id_manga);
        $leManga->setPrix($objet->prix);
        $leManga->setTitre($objet->titre);

        $genreDAO= new genreDAO();
        $lesGenres=$genreDAO->getGenre($objet->id_Genre);

        if($lesGenres){
            $leManga->setGenre($lesGenres);
        }
        else
            $leManga->setGenre(null);

        return $leManga;
    }
}
