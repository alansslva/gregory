<?php 


#CLASSE DE CONFIGURACAO, CHAMADAS GERAIS DO PROJETO
#ARQUIVOS GERAIS DE CONFIGURACAO 
class Config {

	// nome do projeto
	private $projectName = 'Projeto Gregory';

	private $baseUrl = 'http://127.0.0.1/gregory/';

	// meus dados
	private $owner = [
		'name' 			=> 'Gregory vieira',
		'github'		=> 	'http://www.github.com/nome',
		'repository'	=> 'http://www.github.com/nome/repositorio',
		'email'			=> 'email@email.com'
	];


	//NOME DO PROJETO
	function getProjectName(){
		return  $this->projectName;
	}

	// retorna meus dados
	function getOwnerData(){
		return $this->owner;
	}

	// retornar url base para criacao de paginas e links
	function baseUrl($url = ''){
		return $this->baseUrl.''.$url;
	}


}