<?php 
// echo "<center>";
// if(isset($_REQUEST["name"]))
// {
    include "db.php";
   if($_REQUEST["operation"] == "c"){


    $salary = $_REQUEST["Salary"];
    $job = $_REQUEST["Job"];
    $name = $_REQUEST["Name"];
  
    $createObject = new databasefunctions(); 
    $result = $createObject->create($name, $job, $salary);
    $response = "";
    if($result == 1){
        $response = ["Message"=>"Success"];  
    }else{
        $response = ["Message"=>"Failed"];  

    }

        echo json_encode($response);
}

else if($_REQUEST["operation"] == "r"){
    
    //include "link.html";  
    
    $createObject = new databasefunctions(); 
    $readValue = $createObject->read();
    
    echo json_encode($readValue);

  
} else if($_REQUEST["operation"] == "u"){

   $updateObject = new databasefunctions();
//    $myassocarray=array("response"=>$updateObject->update());
//    echo json_encode($myassocarray);
    echo  $updateObject->update();
//    {"response":"success"}
}
else if($_REQUEST["operation"] == "d"){

    $deleteObject = new databasefunctions();
    
    echo $deleteObject->delete();

}   




    
    //$details = ["doubledsalary" => $salary*2];
   // $dataReceive = json_encode($details);

    //echo $dataReceive;

// }
// echo "</center>";
?>