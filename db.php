<?php

$mysqliObject = new mysqli("localhost", "root", "", "phplearning");

class databasefunctions{    
        
    function create($name,$job,$salary){ 
        global $mysqliObject;
        $name = $_REQUEST["Name"];
        $job = $_REQUEST["Job"];
        $salary = $_REQUEST["Salary"];
        
         $mysqliObject->query("Insert into employees(Name, Job, Salary) values('$name', '$job',$salary)");
         if($mysqliObject->affected_rows){
            return 1;
        }else{
            return 0;
        }
        
    }

    function update(){
        global $mysqliObject;
        $id = $_REQUEST["id"];
        $salary = $_REQUEST["salary"];    
        $mysqliObject->query("update employees set Salary= $salary where ID= $id");
        if($mysqliObject->affected_rows==1)
        {
            return "success";
        }
        else
        {
            return "fail";
        }
    }
    function delete() {
        global $mysqliObject;
        $id = $_REQUEST["id"];
        $mysqliObject->query("Delete from employees where ID = $id");
        if($mysqliObject->affected_rows == 1){
            return "success";
        }else{return "fail";}
      

    }
    function read(){
        
        global $mysqliObject;
        $resultsetObject = $mysqliObject->query("Select * from employees");
        // echo "<center>";
        //  echo "<table>";
        // echo "<th>". "ID". "</th>". "<th>". "Name". "</th>". "<th>". "Job". "</th>". "<th>". "Salary". "</th>" ;
       $response = [];
        // 
        while($dataStore = $resultsetObject->fetch_assoc()){

            $response[] = $dataStore;

        // echo "<tr>"."<td>".$dataStore["ID"]."</td>"."<td>".$dataStore["Name"]."</td>". "<td>".$dataStore["Job"]."</td>".
        // "<td>".$dataStore["Salary"]."</td>"."</tr>"."<br>";}
        // echo "</table>";
        // echo "</center>";
    }
        return $response;
        }
    }
?>
