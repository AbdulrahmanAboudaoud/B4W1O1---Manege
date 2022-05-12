<?php

function getAllCustomers(){
  // Met het try statement kunnen we code proberen uit te voeren. Wanneer deze
  // mislukt kunnen we de foutmelding afvangen en eventueel de gebruiker een
  // nette foutmelding laten zien. In het catch statement wordt de fout afgevangen
   try {
       // Open de verbinding met de database
       $conn=openDatabaseConnection();
   
       // Zet de query klaar door middel van de prepare method
       $stmt = $conn->prepare("SELECT * FROM customers");

       // Voer de query uit
       $stmt->execute();

       // Haal alle resultaten op en maak deze op in een array
       // In dit geval is het mogelijk dat we meedere medewerkers ophalen, daarom gebruiken we
       // hier de fetchAll functie.
       $result = $stmt->fetchAll();

   }
   // Vang de foutmelding af
   catch(PDOException $e){
       // Zet de foutmelding op het scherm
       echo "Connection failed: " . $e->getMessage();
   }

   // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
   // van de server opgeschoond blijft
   $conn = null;

   // Geef het resultaat terug aan de controller
   return $result;
}

function getCustomer($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
 
        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
        // WHERE clause toe (WHERE id = :id. Deze vullen we later in de code
        $stmt = $conn->prepare("SELECT * FROM customers WHERE id = :id");
        // Met bindParam kunnen we een parameter binden. Dit vult de waarde op de plaats in
        // We vervangen :id in de query voor het id wat de functie binnen is gekomen.
        $stmt->bindParam(":id", $id);

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;
 
    // Geef het resultaat terug aan de controller
    return $result;
 }

function createCustomer($customerName,$customerPhoneNumber,$customerAdress){
    // Maak hier de code om een medewerker toe te voegen
  try{
    $conn=openDatabaseConnection();
    $sql = "INSERT INTO customers(CustomerName, CustomerPhoneNumber, CustomerAdress) VALUES(:customerName, :customerPhoneNumber, :customerAdress)";
    $query = $conn->prepare($sql);
    $query->bindParam(":customerName", $customerName);
    $query->bindParam(":customerPhoneNumber", $customerPhoneNumber);
    $query->bindParam(":customerAdress", $customerAdress);
    $query->execute();
  }

  catch(PDOException $e){

    echo "Connection failed: " . $e->getMessage();
}
    $conn = null;
 }


 function updateC($id,$customerName,$customerPhoneNumber,$customerAdress){
    // Maak hier de code om een medewerker te bewerken
    try{
        $conn=openDatabaseConnection();
        $sql = "UPDATE customers SET  CustomerName = :customerName, CustomerPhoneNumber = :customerPhoneNumber, CustomerAdress = :customerAdress WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->bindParam(":customerName", $customerName);
        $query->bindParam(":customerPhoneNumber", $customerPhoneNumber);
        $query->bindParam(":customerAdress", $customerAdress);
        $query->execute();
      }
    
      catch(PDOException $e){
    
        echo "Connection failed: " . $e->getMessage();
    }
        $conn = null;
 }

 function destroyC($id){
    // Maak hier de code om een medewerker te verwijderen
    try{
        $conn=openDatabaseConnection();
        $sql = "DELETE FROM customers WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
       
        $query->execute();
      }
    
      catch(PDOException $e){
    
        echo "Connection failed: " . $e->getMessage();
    }
        $conn = null;
     }
    
 


?>