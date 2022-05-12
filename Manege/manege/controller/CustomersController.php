<?php
require(ROOT . "model/CustomerModel.php");


function index()
{
   
    $getAllCustomers = getAllCustomers();
    render("customers/index", array("customers" =>$getAllCustomers));
    
   
}

function addCustomer(){
 
 render("customers/create");
}

function createNewCustomer(){
    createCustomer($_POST["customerName"],$_POST["customerPhoneNumber"],$_POST["customerAdress"]);
    header("location: index");
}

function editCustomer($id){
   
    $getCustomer = getCustomer($id);
   
    render("customers/update", array("customer" => $getCustomer));
}

function updateCustomer($id){
    updateC($id, $_POST["customerName"],$_POST["customerPhoneNumber"],$_POST["customerAdress"]);
    header("location: ".URL."customers/index");
    

}

function deleteCustomer($id){
   
    $getCustomer = getCustomer($id);
    render("customers/delete", array("customer" =>$getCustomer));
   

}

function destroyCustomer($id){
    
    destroyC($id);
    header("location: ".URL."customers/index");
	
    
}
?>