<?php



class Rdv
{
private $id_rdv;
private $etat_rdv;
private $date_rdv;
private $debut_rdv;
private $fin_rdv;

//Constructeur
public function __construct($id_u,$nom,$prenom,$email,$tel,$pass)
{
	$this->id_u=$id_u;
	$this->nom=$nom;
	$this->prenom=$prenom;
	$this->email=$email;
	$this->tel=$tel;
	$this->pass=$pass;
}

//methodes de classe
public function get_id_rdv()   {return $this->id_rdv;}
public function get_etat_rdv() {return $this->etat_rdv;}
public function get_date_rdv() {return $this->date_rdv;}
public function get_debut_rdv(){return $this->debut_rdv;}
public function get_fin_rdv()  {return $this->fin_rdv;}

public function set_id_rdv($id_rdv)      {$this->id_rdv=(int)$id_rdv;}
public function set_etat_rdv($etat_rdv)  {$this->etat_rdv=(int)$etat_rdv;}
public function set_date_rdv($date_rdv)  {$this->date_rdv=(date)$date_rdv;}
public function set_debut_rdv($debut_rdv){$this->debut_rdv=(time)$debut_rdv;}
public function set_fin_rdv($fin_rdv)    {$this->fin_rdv_rdv=(time)$fin_rdv;}

//methods
public function get_rdv($date_rdv,$debut_rdv,$fin_rdv){}
public function cancel_rdv($id_rdv){} 
public function check_get_rdv($date_rdv){} 






























