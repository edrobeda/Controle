<?php
namespace App\Helpers;

/**
* AcHelper é uma classe de Helper para o Acompanhamento.
*/
class Helper {
    
    public function uploadImage($imageContent){

        dd('res->', $imageContent );

        $extencion = $request->file("file")->getClientOriginalExtension();
        $fileName = rand(11111, 99999)."_".date("d_m_Y").".".$extencion;
        $request->file("file")->move(public_path("/uploads/users"), $fileName);
        return $fileName;
    }

}