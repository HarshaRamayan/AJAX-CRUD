
read();

function update(id){
    $("#id").val(id);
}
function deleterow(id){
    datasent = {id : id, operation : "d"}

    $.post("server.php", datasent, function(data){
      read();
  });  

}
function read(){
    $("table").html("<tr><th>Name</th><th>Job</th><th>Salary</th><th>Action</th></tr>");
    $.get("server.php?operation=r",function(data){
        var dataGet = JSON.parse(data);
        // dataGet = [{ID: "1", Name: "Sudheer", Job: "Software", Salary: "300"},{ID: "1", Name: "Sudheer", Job: "Software", Salary: "300"}];
        console.log(dataGet);
        i=0;
        while(i<dataGet.length){
        $("table").append(`<tr><td>${dataGet[i].Name}</td><td>${dataGet[i].Job}</td><td>${dataGet[i].Salary}</td>
        <td><button onclick="update(${dataGet[i].ID})" type="button" class="btn btn-primary" data-target="#myModal" data-toggle="modal">Update</button>
        <button class="btn btn-primary" onclick= "deleterow(${dataGet[i].ID})">Delete</button></td></tr>`);
        i++;
        }
    });
}

$("#createform").submit(function(event){
    event.preventDefault();
    var name = $("#empname").val();
    var job = $("#empjob").val();
    var salary = $("#empsal").val();
    
    var details = {Name: name , Job: job, Salary: salary, operation : "c"};
    
    $.post("server.php", details, function(data){
     
    });
    read();
    

});


$("#updateform").submit(function(event){
    event.preventDefault();
    var id = $("#id").val();
    var salary = $("#sal").val();
    
    var details = {id:id,salary: salary, operation : "u"};
    
    $.post("server.php", details, function(data){
        $("#sal").val('');
        $("#myModal").modal('hide');
    });
    read();
    

});

// $("#hibtn").click(function(){

//     alert("hi");
// });

