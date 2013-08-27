<?php

class Clients
{
    //Récupérer toutes les offres
    public static function getAll()
    {
      //On définit la bdd pour la fonction
    global $bdd;
    $clients = $bdd->query('SELECT * FROM client')->fetchAll(PDO::FETCH_ASSOC);
    return ($clients);
	  	
    }

    //Récupérer info d'un client
	//TDO faire la requete avec un like si champs de recherche
    public static function getOne($id_client)
    {
      global $bdd;
      $client = $bdd->query('SELECT * FROM client WHERE client.id = '.$id_client.' ')->fetch(PDO::FETCH_ASSOC);
      return ($client);
    }

    //Rajout d'un client
    public static function Add($data)
    {
      global $bdd;
      $insert = $bdd->exec('INSERT INTO client(NomClient, RaisonSocial , ..., ) VALUES('.$data['NomClient'].', '.$data['RaisonSocial'].')');
      return ($insert);
    }
}

?>