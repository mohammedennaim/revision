<?php 
Interface ReservableInterface{
	public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation;
}