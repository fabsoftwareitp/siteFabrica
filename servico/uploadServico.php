<?php

function uploadImagem($arquivo, $caminhoImagem = "publico/Images/") {
    $imagem_tmp = $arquivo["tmp_name"];
    $imagem = basename($arquivo["name"]);

    move_uploaded_file($imagem_tmp, $caminhoImagem . $imagem);
    $diretorio_da_imagem = $caminhoImagem . $imagem;

    return $diretorio_da_imagem;
}


function verificarImagem($type, $error, $size){

	if(($type == 'image/jpeg') || ($type == 'image/png') || ($type == 'image/gif')){
		if($error = 0){
			if($size < 100000000000000000000000000){
				return true;
			} else { return "Imagem muito grande."; }
		} else { return "A imagem apresenta erros de upload."; }
	} else { return "Extensão não permitida."; }

}
?>