<?php

include('utilisateur.php');

class Standard extends Utilisateur
{
private $nb_rdv_rsrv;
private $nb_rdv_mnq;
protected $etat_u_validation;
protected $etat_u_blocage;
//constructeur
public function __construct($nb_rdv_rsrv,$nb_rdv_mnq,$etat_u_validation,$etat_u_blocage)
{
	parent::__construct($id_u,$nom,$prenom,$email,$tel,$pass);
	$this->nb_rdv_rsrv=$nb_rdv_rsrv;
	$this->nb_rdv_mnq=$nb_rdv_mnq;
	$this->etat_u_validation=$etat_u_validation;
	$this->etat_u_blocage=$etat_u_blocage;
}
//methodes de classe
public function get_nb_rdv_r()   {return $this->nb_rdv_rsrv;}
public function get_nb_rdv_mnq() {return $this->nb_rdv_mnq;}
public function get_etat_u() {return $this->etat_u;}

public function set_nb_rdv_rsrv($nb_rdv_rsrv){$this->nb_rdv_rsrv=$nb_rdv_rsrv;}
public function set_rv_mnq($nb_rdv_mnq){$this->nb_rdv_mnq=$nb_rdv_mnq;}
public function set_etat_u($etat_u){$this->etat_u=$etat_u;}

public function prendrdv($date_rdv,$debut_rdv,$fin_rdv){}
public function historiques(){}
public function connecter($email,$pass){}
}






























