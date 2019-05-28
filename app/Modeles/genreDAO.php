<?php

namespace App\Modeles;

use App\Metier\Genre;
use Illuminate\Database\Eloquent\Model;
use DB;
class genreDAO extends DAO
{
    //
    public function getGenre($idManga){
            $lesGenre=array();
            $genres=DB::table('genre')->select('id_genre','lib_genre')->where("id_genre","=",$idManga)->get();
            if($genres){
                foreach ($genres as $legenre){
                    $idCom=$legenre->id_genre;
                    $lesGenre[$idCom]=$this->creerObjetMetier($legenre);

                }
            }
            return $lesGenre;

    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        // TODO: Implement creerObjetMetier() method.
        $leGenre = new Genre();
        $leGenre->setIdGenre($objet->id_genre);
        $leGenre->setLibelleGenre($objet->lib_genre);
        return $leGenre;
    }
}
