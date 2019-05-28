<?php

namespace App\Modeles;

use App\Metier\Genre;
use Illuminate\Database\Eloquent\Model;

class genreDAO extends DAO
{
    //
    public function getGenre($idManga){
            $lesGenre=array();
            $genres=DB::table('genre')->select('id_Genre','lib_genre')->where("id_genre","=",$idManga)->get();
            if($genres){
                foreach ($genres as $legenre){
                    $idCom=$legenre->idCom;
                    $lesGenre[$idCom]=$this->creerObjetMetier($legenre);

                }
            }
            return $lesGenre;

    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        // TODO: Implement creerObjetMetier() method.
        $leGenre = new Genre();
        $leGenre->setIdGenre($objet->idGenre);
        $leGenre->setLibelleGenre($objet->libelle);
        return $leGenre;
    }
}
