<?php
require(ROOT . "model/ReservationModel.php");
require(ROOT . "model/HorsesModel.php");
require(ROOT . "model/CustomerModel.php");



function index()
{
   
    $getAllReservations = getAllReservations();
    render("reservation/index", array("reservation" =>$getAllReservations , "horses" =>getAllHorses(),"customers" =>getAllCustomers() ));
    
   
}


function addReservation(){
 
 render("reservation/create", array("horses" =>getAllHorses(),"customers" =>getAllCustomers() ));
}

function createNewReservation(){
    createReservation($_POST["customerName"],$_POST["horseName"],$_POST["startTime"],$_POST["numberOfRides"]);
    header("location: index");
}

function editReservation($id){
   
    $getReservation = getReservation($id);
   
    render("reservation/update", array("reservation" => $getReservation , "horses" =>getAllHorses(),"customers" =>getAllCustomers()));
}

function updateReservation($id){
    updateR($id,$_POST["customerName"],$_POST["horseName"],$_POST["startTime"],$_POST["numberOfRides"]);
    header("location: ".URL."reservation/index");
    

}

function deleteReservation($id){
   
    $getReservation = getReservation($id);
    render("reservation/delete", array("reservation" =>$getReservation , "horses" =>getAllHorses(),"customers" =>getAllCustomers()));
   

}

function destroyReservation($id){
    
    destroyR($id);
    header("location: ".URL."reservation/index");
	
    
}
?>