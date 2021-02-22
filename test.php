<?php
$mysqliobj = new mysqli();
$resultsetobj->fetch_assoc();
class mysqli
{
    function query()
    {
      $resultsetobj = new resultset();
      return $resultsetobj;
    }
    class resultset
    {
        function fetch_assoc()
        {
                //returns data
        }
    }
}
?>