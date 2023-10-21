<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- CSS -->
            <link rel="stylesheet" href="style.css">
                                
                                <!-- Fontawesome CDN Link -->
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
                                
                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.css">
  <!-- Add SlimSelect JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.27.0/slimselect.min.js"></script>
<!-- Include Flatpickr CSS -->
<link rel="stylesheet" href="path/to/flatpickr.min.css">

<!-- Include Flatpickr JavaScript -->
<script src="path/to/flatpickr.min.js"></script>
    <title>Project Data Entry</title>
</head>
<style>

    
    .title {
        position: relative;
        font-size: 27px;
        text-align: left;
        left: 20px;
        top: 15px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .projectheade {
        color: black;
        padding: 3px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .projectdrop {
        border-radius: 5px;
        position: absolute;
        padding: 3px;
        top: 98px;
        left: 20px;
        z-index: 10;
        width: 355px;
        font-family: Arial, Helvetica, sans-serif;
        list-style-type: none;
    }

    .projects {
        text-decoration: none;
        width: 357px;
        background-color: white;
        padding: 10px;
        color: #606266;
        list-style-type: none;
        display: none;
        left: -5px;
        position: absolute;
        font-family: Arial, Helvetica, sans-serif;
        max-height: 200px;
        /* Set the maximum height for the list */
    }

    .projects li {
        padding: 10px;
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;
        cursor: pointer;
    }

    .projectdrop li:hover>.projects {
        display: block;
        animation: slideup 0.3s ease;
        font-family: Arial, Helvetica, sans-serif;
    }

    .importHRs {
        font-family: Arial;
        background-color: #fff;
        border-radius: 6px;
        color: #00a2e8;
        border-color: #00a2e8 !important;
        padding: 5px;
        padding-left:5px ;
        padding-right: 5px;
        cursor: pointer;
        border: 1px solid;
        font-size: 17px;
        position: absolute;
        font-weight: 300;
        left: 857px;
        top: 102px;
        font-family: Arial, Helvetica, sans-serif;

    }

    .colourtitle {
        position: absolute;
        left: 988px;
        top: 109px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .colourbox {
        width: 30px;
        height: 30px;
        background-color: #3498db;
        border: 3px solid black;
        border-radius: 5px;
        left: 1096px;
        top: 102px;
        position: absolute;
        line-height: 100px;
    }

    .dupheade {
        color: black;
        padding: 3px;
        font-family: Arial, Helvetica, sans-serif;
        color: #D0D3D4;
    }

    .duplicatedrop {
        border: 2px solid #DCDFE6;
        border-radius: 5px;
        position: absolute;
        padding: 3px;
        top: 130px;
        left: 735px;
        z-index: 10;
        width: 270px;
        font-family: Arial, Helvetica, sans-serif;
        list-style-type: none;
    }


    .duplicates {
        text-decoration: none;
        width: 230px;
        background-color: white;
        padding: 20px;
        list-style-type: none;
        display: none;
        left: -5px;
        position: absolute;
        font-family: Arial, Helvetica, sans-serif;
        color: #606266;
        max-height: 200px;
        /* Set the maximum height for the list */
    }

    .duplicates li {
        padding: 10px;
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;
        cursor: pointer;
    }

      .duplicatedrop li:hover>.duplicates{
        display: block;
        animation: slideup 0.3s ease;
        font-family: Arial, Helvetica, sans-serif;
    }

    .createbtn {
        position: absolute;
        background-color: #fff;
        border-radius: 6px;
        color: #5fec13;
        border-color: #5fec13 !important;
        left: 1481px;
        width: 100px;
        padding: 5px;
        padding-left:5px ;
        padding-right: 5px;
        border: 1px solid;
        cursor: pointer;
        font-size: 14px;
        top: 103px;
        font-family: Arial, Helvetica, sans-serif;
        
    }

    .savebtn {
        background-color: #fff;
        border-radius: 6px;
        color: #5fec13;
        border-color: #5fec13 !important;
        position: absolute;
        padding: 5px;
        padding-left:7px ;
        padding-right: 7px;
        font-size: 15px;
        border: 1px solid;
        top: 102px;
    left: 1590px;        cursor: pointer;
        font-weight: 300;
        font-family: Arial, Helvetica, sans-serif;
    }

    .drop {
    font-size: larger;
    width: 410px;
    height: 35px;
    border: 1px solid white;
    border-radius: 7px;
    }


    .drop:focus {
        outline: none;
    }




.select-btn2{
    display: flex;
    height: 35px;
    align-items: center;
    justify-content: space-between;
    padding: 0 16px;
    border-radius: 8px;
    position: absolute;
    top: 100px;
    border: 1px solid #DCDFE6;
    cursor: pointer;
    left: 1135px;
    background-color: #fff;
    width: 330px;
    font-family: Arial, Helvetica, sans-serif;
    color: #D0D3D4;

}


.select-btn2 .btn-text2{
    font-size: 17px;
    font-family: Arial, Helvetica, sans-serif;
        color: #D0D3D4;

}
.select-btn2 .arrow-dwn2{
    display: flex;
    height: 21px;
    width: 21px;
    color: black;
    font-size: 14px;
    border-radius: 50%;
    align-items: center;
    justify-content: center;
    transition: 0.3s;
}
.select-btn2.open .arrow-dwn2{
    transform: rotate(-180deg);
}
.select-btn2.open ~ .list-items2{
    display: block;
}


.list-items2{
    position: absolute;
    margin-top: 15px;
    border-radius: 8px;
    width: 330px;
    top: 112px;
    left: 1131px;
    z-index: 100;
    padding: 16px;
    background-color: white;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    display: none;
    font-family: Arial, Helvetica, sans-serif;
    color: #606266;

}
.select-btn.open2 ~ .list-items2{
    display: block;
}
.list-items2 .item{
    display: flex;
    align-items: center;
    list-style: none;
    height: 50px;
    cursor: pointer;
    transition: 0.3s;
    padding: 0 15px;
    border-radius: 8px;
}
.list-items2 .item:hover{
    background-color: #e7edfe;
}
.item .item-text{
    font-size: 16px;
    font-weight: 400;
    color: #333;
}
.menu5:hover .arrow-dwnV i,
.menu2:hover .arrow-dwnW i,
.menu3:hover .arrow-dwnU i,
.menu4:hover .arrow-dwnA i {
    transform: rotate(180deg);
    transition: transform 0.3s ease; /* Add a smooth transition for better visual effect */
}



.menu5:hover>.submenu1,
.menu2:hover>.submenu1,
.menu3:hover>.submenu1,
.menu4:hover>.submenu1 {
        display: block;
        animation: slideup 0.9s ease;
        font-family: Arial, Helvetica, sans-serif;
    }



.arrow-dwnV,
.arrow-dwnW,
.arrow-dwnU,
.arrow-dwnA {
    position: relative;
    left: 5px;
    color: #909399;
}



.drop li {
    display: none;
    align-items: center;
    list-style: none;
    text-align: center;
    height: 40px;
    padding-top: 10px;
    background-color: white;
    cursor: pointer;
    transition: 0.3s;
    border-radius: 5px;
    position: relative;
    left: -12px;
    width: 432px;
    top: 31px;
    font-family: Arial, Helvetica, sans-serif;


}

.sss{


}

/* Show the dropdown options on hover */
.drop:hover .opt {
    display: block;
}

/* Style for the selected option */
.opt[selected] {
    background-color: #4CAF50;
    color: white;
}

/* Style for the selected option when dropdown is open */
.drop:hover .opt[selected] {
    background-color: #45a049;
}

.opt:hover{
    background-color: #45a049;
    color: white;

}

/* Style for the selected option text */
.opt[selected] {
    font-weight: bold;
}
 #result{
    position: absolute;
    top: 105px;
    left: 26px;
    width: 432px;
    font-family: Arial, Helvetica, sans-serif;


 }
 li {
        list-style: none;
        padding: 0;
    }
    label{
        width: 100%;
        padding: 0px 125px;

    }

    .ss-main .ss-single-selected{
        height: 35px;

    }

    .subprojectdrop{
    top: 99px;
    left: 436px;
    height:80px ;
    position: absolute;
    }

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');


.Hide{
    display: none;
}






.ss-content .ss-search{
    display: none;
}




.ss-content .ss-list .ss-option.ss-disabled{
    cursor: auto;
}





</style>
<header class="header">
    </a>
    <ul class="menu1">
        <li><a href="/The-Work-planing/index.html">Home</a> </li>
        <li id="menu5" class="menu5">
            <a href="#"  >Views         
                        <span class="arrow-dwnV">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </a>
            <ul class="submenu1">
                <li><a href="#">Work Plan View</a></li>
                <li> <a href="/The-Work-planing/The-Gantt.html" class="done">Resource Histogram</a></li>
                <li><a href="#">Sales Plan View</a></li>
            </ul>
        </li>
        <li id="menu2"class="menu2">
            <a href="#" >Work Planning Data
            <span class="arrow-dwnW">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </a>
            <ul class="submenu1">
                <li><a href="/The-Work-planing/The-Projects-View.html" class="done">Project Description</a></li>
                <li> <a href="#">Estimate Hours</a></li>
                <li><a href="#" class="done">Project Data Entry</a></li>
                <li><a href="#">Resource Allocation</a></li>
            </ul>
        </li>
        <li id="menu3"class="menu3">
            <a href="#" >User's Data Entry
            <span class="arrow-dwnU">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </a>
            <ul class="submenu1">
                <li><a href="#">DL Input Hours</a></li>
                <li><a href="#">Project Progress</a></li>
                <li><a href="https://mohmad5k.github.io/The-Work-planing/User-Availability.html" class="done">User Availability</a></li>
            </ul>
        </li>
        <li id="menu4"class="menu4">
            <a href="#" >Admin
            <span class="arrow-dwnA">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
            </a>
            <ul class="submenu1">
                <li> <a href="#">Access Permissions </a></li>
                <li> <a href="#">Role</a></li>
                <li> <a href="#">New Feature Popup</a></li>
                <li> <a href="#">Change Password</a></li>
                <li> <a href="#">Dashbored</a></li>
                <li> <a href="#">Logout</a></li>
            </ul>
        </li>
    </ul>
</header>

<body>
    <div class="title">Project Data Entry </div>
         

   





























































<form id="myform" method="POST" >

<button type="submit" class="savebtn" id="saveButton">Save</button>


<?php
include 'conn.php';

// Function to create dropdown options
function createDropdownOptions($result, $valueField, $textField) {
  $options = "";
  while ($row = $result->fetch_assoc()) {
      $options .= "<option value='{$row[$valueField]}'>{$row[$textField]}</option>";
  }
  return $options;
}

// Fetch data for the Project dropdown
$sqlProject = "SELECT ProjectID, ProjectName FROM Project";
$resultProject = $conn->query($sqlProject);

// Close the connection
$conn->close();
?>

<!-- SlimSelect Project Dropdown -->
<select id="project" class="my-dropdown drop projectdrop" onchange="loadParts()">
    <option class="hide" value="" selected disabled>Select Project</option>
    <?php echo createDropdownOptions($resultProject, 'ProjectID', 'ProjectName'); ?>
</select>


<!-- SlimSelect Parts Dropdown -->
<select id="part" class="my-dropdown drop subprojectdrop" onchange="loadSubParts()" disabled>
    <option value="" selected disabled>Project Parts</option>
    <!-- Options dynamically populated using PHP/JavaScript -->
</select>


<!-- SlimSelect Subparts Dropdown -->
<select id="subpart" class="my-dropdown Hide" disabled>
    <option value="" selected disabled>Select SubPart</option>
    <!-- Options dynamically populated using PHP/JavaScript -->
</select>

<!-- Display Part Data Table -->
<div id="partDataTableContainer" class="tasknametable  editable-table"></div>



<script>
// Initialize SlimSelect on your dropdowns
var projectSelect = new SlimSelect({
    select: '#project',
});

var partSelect = new SlimSelect({
    select: '#part',
    placeholder: 'Select Part',
    onChange: () => loadSubParts(),
});

var subPartSelect = new SlimSelect({
    select: '#subpart',
    placeholder: 'Select SubPart',
});

function loadParts() {
    var projectId = projectSelect.selected();

    // Fetch parts for the selected project using AJAX
    if (projectId !== "") {
        // You can replace 'get_parts.php' with the actual path to your PHP script
        var url = 'get_parts.php?project_id=' + projectId;
        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Populate Parts dropdown with fetched data
                partSelect.setData(data.map(part => ({ text: part.PartName, value: part.PartID })));
                // Enable Parts dropdown
                partSelect.set([]);
                partSelect.enable();
            })
            .catch(error => console.error('Error fetching parts:', error));
    } else {
        // Disable Parts dropdown if no project is selected
        partSelect.disable();
        partSelect.set([]);
        subPartSelect.disable();
        subPartSelect.set([]);
        clearPartDataTable();
    }
}

function loadSubParts() {
    var partId = partSelect.selected();

    // Fetch subparts for the selected part using AJAX
    if (partId !== "") {
        // You can replace 'get_subparts.php' with the actual path to your PHP script
        var url = 'get_subparts.php?part_id=' + partId;
        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Populate SubParts dropdown with fetched data
                subPartSelect.setData(data.map(subpart => ({ text: subpart.Task_Name, value: subpart.SubPartID })));
                // Enable SubParts dropdown
                subPartSelect.enable();
                // Display part data in a table
                displayPartDataTable(data);
                console.log(data)
            })
            .catch(error => console.error('Error fetching subparts:', error));
    } else {
        // Disable SubParts dropdown if no part is selected
        subPartSelect.disable();
        subPartSelect.set([]);
        clearPartDataTable();
    }
}
function displayPartDataTable(data) {
    // Clear previous table content
    clearPartDataTable();

    // Get the existing taskname table
    var tasknameTable = document.getElementById('taskname');

    // Clear existing rows
    while (tasknameTable.rows.length > 2) {
        tasknameTable.deleteRow(2);
    }

// Populate data rows for taskname table
data.forEach(part => {
    var row = tasknameTable.insertRow(-1);
    var cell = row.insertCell(-1);

    // Create an input field for Task_Name with a class
    var input = document.createElement("input");
    input.type = "text";
    input.value = part['Task_Name']; // Set initial value
    input.classList.add("SCDinputs2"); // Add your class name here
    input.id="taskNameInput"
    input.name = "taskNameInput"

    // Append the input field to the cell
    cell.appendChild(input);
});


    // Get the existing Hrstable table
    var hrstableTable = document.getElementById('Hrstable');

    // Clear existing rows
    while (hrstableTable.rows.length > 2) {
        hrstableTable.deleteRow(2);
    }

    // Populate data rows for Hrstable table
   // Populate data rows for Hrstable table
data.forEach(part => {
    var row = hrstableTable.insertRow(-1);

 

    // Create input fields with a class for each property
    var properties = ['Est', 'DL', 'RFI', 'PD', 'Buf', 'Adj', 'Plan1'];
    properties.forEach(property => {
        var input = document.createElement("input");
        input.value = part[property];
    // Add different classes based on the property index
        if (property === 'EST') {
            input.type = "number";
            input.id="se"
            input.classList.add("Tinputs"); // Add your default class name here
        } else {
            input.type = "number";

            input.classList.add("Tinputs"); // Add your default class name here
        }
        // Append the input field to the cell
        row.insertCell(-1).appendChild(input);
    });
});






    // Get the existing Hrstable table
    var SCDtableTable = document.getElementById('SCDtable');

    // Clear existing rows
    while (SCDtableTable.rows.length > 2) {
        SCDtableTable.deleteRow(2);
    }
    
    data.forEach((part, rowIndex) => {
    var row = SCDtableTable.insertRow(-1);

    // Create input fields with class for each property
    var properties = ['Doc_Supply', 'C%', 'Completion_Date'];
    properties.forEach((property) => {
        var input = document.createElement("input");
        input.value = part[property];

     // Add different classes based on the property
if (property === 'C%') {
    input.type = "number";
            input.classList.add("SCDinputs");
            input.id = "C_percentage_" + rowIndex; // Unique identifier for C%
} else if (property === 'Doc_Supply') {
    input.type = "text";
    input.name = "Doc_Supply";
    input.id = "Doc_Supply_" + rowIndex; // Unique identifier for Doc_Supply
    input.readOnly = true; // Make it read-only
    input.classList.add("datepicker");
    input.classList.add("flatpickr-input");
} else if (property === 'Completion_Date') {
    input.type = "text";
    input.name = "completion_date";
    input.id = "Completion_Date_" + rowIndex; // Unique identifier for Completion_Date
    input.readOnly = true; // Make it read-only

    input.classList.add("datepicker");
    input.classList.add("flatpickr-input");

    // Add event listener for date picker error handling
    input.addEventListener("change", function () {
        const completionDate = new Date(input.value);
        const docSupplyDate = new Date(document.getElementById("Doc_Supply_" + rowIndex).value);

        if (isNaN(completionDate.getTime()) || isNaN(docSupplyDate.getTime())) {
            // Handle invalid date
            alert("Invalid date selected. Please choose a valid date.");
            // You can also add a class to highlight the error, e.g., input.classList.add("error");
            input.value = ""; // Clear the invalid date
        } else if (completionDate < docSupplyDate ) {
            // Handle completion date earlier than doc supply date
            alert("Completion date cannot be earlier than the document supply date.");
            // You can also add a class to highlight the error, e.g., input.classList.add("error");
            input.value = ""; // Clear the invalid date
        }
    });
}

        // Append the input field to the cell
        row.insertCell(-1).appendChild(input);
    });
    // Assuming you have a button with the id 'saveButton' for triggering the save action
var saveButton = document.getElementById('saveButton');

});



// Assuming you have added Flatpickr library already

    flatpickr('.datepicker', {
        enableTime: false, // Adjust options as needed
        dateFormat: "d-M-Y",
        // Add more options if needed
    });







    // Get the existing Hrstable table
    var PTStableTable = document.getElementById('PTStable');

    // Clear existing rows
    while (PTStableTable.rows.length > 2) {
        PTStableTable.deleteRow(2);
    }

    // Populate data rows for Hrstable table
    data.forEach(part => {
    var row = PTStableTable.insertRow(-1);

   

    // Create input fields for each property with a class
    var properties = ['RAP', 'Pri', 'TS', 'DD', 'SP'];
    properties.forEach(property => {
        var input = document.createElement("input");
        input.value = part[property];
   // Add different classes based on the property index
      if (property === 'SP') {
            input.type = "text";
            input.classList.add("PTSinputs"); // Add your second class name here
        } else {
            input.type = "number";
            input.classList.add("PTSinputs"); // Add your default class name here
        }
        // Append the input field to the cell
        row.insertCell(-1).appendChild(input);
    });
});















    // Get the existing Hrstable table
    var AllotableTable = document.getElementById('ALLotable');

    // Clear existing rows
    while (AllotableTable.rows.length > 2) {
        AllotableTable.deleteRow(2);
    }

    // Populate data rows for Hrstable table
    data.forEach(part => {
    var row = AllotableTable.insertRow(-1);

 
    // Create input fields for each property with a class
    var properties = ['Algorithm_1', 'Algorithm_2', 'Override_1', 'Override_2', 'Override_3'];
    properties.forEach(property => {
        var input = document.createElement("input");
        input.type = "text";
        input.value = part[property];
        input.classList.add("Alloinputs"); // Add your class name here
        // Append the input field to the cell
        row.insertCell(-1).appendChild(input);
    });
});






    // Get the existing Hrstable table
    var PROtableTable = document.getElementById('PROtable');

    // Clear existing rows
    while (PROtableTable.rows.length > 2) {
        PROtableTable.deleteRow(2);
    }

 // Populate data rows for PROtable table
data.forEach(part => {
    var row = PROtableTable.insertRow(-1);
    

    // Create input fields for each property with a class
    var properties = ['Plan2', 'Act', 'Left1', 'Updated', '%', 'left2'];
    properties.forEach(property => {
        var input = document.createElement("input");
        input.type = "text";
        input.value = part[property];
// Add different classes based on the property index
        if (property === 'Updated') {
            input.type = "text";
            input.classList.add("datepicker"); // Add your second class name here
            input.classList.add("flatpickr-input");

        } else if (property === '%'){
    input.value = part[property] + '%';
    input.type = "text";
    input.classList.add("PROinputs"); // Add your default class name here


}

        else {
            input.type = "number";
            input.classList.add("PROinputs"); // Add your default class name here
        }
        // Append the input field to the cell
        row.insertCell(-1).appendChild(input);
    });
});

flatpickr('.datepicker', {
        enableTime: false, // Adjust options as needed
        dateFormat: "d-M-Y",
        // Add more options if needed
    });
}





function clearPartDataTable() {
    // Clear the container
    document.getElementById('partDataTableContainer').innerHTML = '';
}
</script>


</form>
<script>
  document.getElementById('myform').addEventListener('submit', function(event) {
    event.preventDefault();

    // Collect data from input fields
    var formData = {
        project: projectSelect.selected(),
        part: partSelect.selected(),
        subpart: subPartSelect.selected(),
        taskName: document.getElementById('taskNameInput').value,
     
        // Add more input fields as needed
    };
    console.log( formData)

    // Send data to server using fetch
    fetch('s.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData),
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // You can handle the response as needed
    })
    .catch(error => console.error('Error saving data:', error));
});


</script>




    <button class="importHRs"> Import Est Hrs</button>
    <div class="colourtitle">Project Colour</div>
    <div class="colourbox"></div>
  



  



    <div class="select-btn2">
                <span class="btn-text2  dupheade"> Select Copy Type</span>
                <span class="arrow-dwn2">
                    <i class="fa-solid fa-chevron-down"></i>
                </span>
    </div>

            <ul class="list-items2">
                <li class="item">
                    <span class="item-text">Without Data (Clean)</span>
                </li>
                <li class="item">
                    <span class="item-text">With All Data</span>
                </li>
                <li class="item">
                    <span class="item-text"> With Operative Selection Only</span>
                </li>
              
            </ul>

<hr>

<style>
    /* Hide the spinner arrows for number inputs */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        appearance: none;
        margin: 0;
    }

</style>




    <button class="createbtn"> Create New</button>
    <style>


hr {
    position: absolute;
    top: 144px;
    width: 100%;
    z-index: 100;
    border-color: rgba(220, 223, 230, 0.3);
}

        /* CSS for styling the table */
        .tablesContainer {
            top: 148px;
             position: absolute;
            height: 500px;
            overflow-y: hidden;
            overflow-x: hidden;
            padding-left: 13px;
            padding-top: 5px;
            width: 100%;
            padding-right:13px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .tasknametable {
            border-collapse: collapse;
            width: 10%;
            font-family: Arial, Helvetica, sans-serif;
            position: relative;
            padding: 5px;
        }

        .tasknametable td{
            padding-bottom: 6px;
        }


        .Hrstable {
            position: relative;
            border-collapse: collapse;
            width: 10%;
            font-family: Arial, Helvetica, sans-serif;
        }

        .Hrstable td {
            padding-left: 6px;
            padding-right: 3px;

        }

        .Tinputs:focus {
          outline: none;
        }

        .Tinputs {
            border: none;
            width: 25px;
            text-align: right;
                }

        .SCDtable {
            position: relative;
            border-collapse: collapse;
            width: 20%;
            font-family: Arial, Helvetica, sans-serif;

        }

        .SCDtable td {
            padding-left: 0px;
            padding-right: 3px;
            text-align: right;
        }


        .SCDtable th {
            text-align: center;
        }

        .SCDinputs {
            border: none;
            width: 20px;
    text-align: center;
        }

        .SCDinputs2{
            border: none;
        }

        .SCDinputs:focus {
            outline: none;
        }


        .PTStable {
            position: relative;
            border-collapse: collapse;

            width: 10%;
            font-family: Arial, Helvetica, sans-serif;

        }

        .PTStable td{
            padding-left: 2px;
            padding-right: 3px;
        }

      

        .PTSinputs {
            border: none;
            width: 40px;
            text-align: right;
        }


        .PTSinputs:focus {
        outline: none;
         }

        .Allotable {
            position: relative;
            border-collapse: collapse;
            width: 40%;
            font-family: Arial, Helvetica, sans-serif;

        }

        .Allotable td{
            padding: 3px;
            padding-bottom: 7px ;
        }

        .Alloinputs {
            border: none;
            width: 80px;
            text-align: right;

        }


        .Alloinputs:focus {
        outline: none;
    }

        .PROtable {
            position: relative;
            border-collapse: collapse;
            width: 15%;
            font-family: Arial, Helvetica, sans-serif;

        }

        .PROtable td{
            padding-left: 3px;
            padding-right: 3px;
        }

        .PROinputs {
            border: none;
            width: 30px;
            text-align: right;

        }


        .PROinputs:focus {
        outline: none;
    }

        .datepicker{
            border: none;
            width: 85px;
            text-align: right;
            padding-right: 3px;
           }

        th,
        td {
            border: 1px solid rgba(200, 200, 200, 1); /* Adjust the RGB values and alpha for the desired effect */
            padding: 8px;
            text-align: center;
            width: fit-content;
            font-family: Arial, Helvetica, sans-serif;

        }
        td{
            padding-left: 13px;
            padding-right: 13px;
            padding-top: 5px;
            padding-bottom: 5px;  
          }

        th {

            background-color: lightgrey;
            font-family: Arial, Helvetica, sans-serif;

        }

        .tasktitle {
            font-family: Arial, Helvetica, sans-serif;
            background-color: lightgray !important;
            color: black !important;
            width: 150px;
        }

        .mainheaders th {
            background-color: gray;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        inputs {
            border: none;
            font-family: Arial, Helvetica, sans-serif;

        }

        .empty {background-color: white;
            color: white;
        }

        .tablesContainer{
            display: flex;
            justify-content: space-between; /* Adjust as needed */
            align-items: flex-start; /* Align tables to the top */

        }

        .tablesContainer table {
             margin-right: 5px; /* Adjust the spacing between tables as needed */
}
    </style>
         <form onsubmit="return sve() " method="post">
        
       
   

<div class="tablesContainer">


            <table id = "taskname"  class="tasknametable  editable-table">
                <thead>
                    <tr class="mainheaders">
                        <th class="tasktitle">Task Name</th>
                    </tr>
                    <tr>
                        <td class="empty">
                            est
                        </td>
                    </tr>
                </thead>
             
            </table>
         




            <table id = "Hrstable" class="Hrstable  editable-table">
                <thead>
                    <tr class="mainheaders  editable-table">
                        <th colspan="7">Hours</th>
                    </tr>
                    <tr>
                        <th> Est </th>
                        <th> DL </th>
                        <th> RFI </th>
                        <th> PD </th>
                        <th> Buf </th>
                        <th> Adj </th>
                        <th> Plan </th>
                    </tr>
                </thead>
             
            </table>
        




            <table id = "SCDtable" class="SCDtable  editable-table">
                <thead>
                    <tr class="mainheaders">
                        <th colspan="3">Supply & Completion Dates</th>
                    </tr>
                    <tr>
                        <th>Doc Supply</th>
                        <th width="20px">C%</th>
                        <th>Completion</th>
                    </tr>
                </thead>
              
            </table>
        






            <table id = "PTStable" class="PTStable  editable-table">
                <thead>
                    <tr class="mainheaders">
                        <th colspan="5">Priority & Team Size</th>
                    </tr>
                    <tr>
                        <th>RAP</th>
                        <th>Pri</th>
                        <th>TS</th>
                        <th>DD</th>
                        <th>SP</th>
                    </tr>
                </thead>
               
            </table>






            <table id = "ALLotable" class="Allotable  editable-table">
                <thead>
                    <tr class="mainheaders">
                        <th colspan="5">Allocation</th>
                    </tr>
                    <tr>
                        <th>Algorithim 1</th>
                        <th>Algorithim 2</th>
                        <th>Override 1</th>
                        <th>Override 2</th>
                        <th>Override 3</th>
                    </tr>
                </thead>
             
            </table>
        




            <table id = "PROtable" class="PROtable  editable-table">
                <thead>
                    <tr class="mainheaders">
                        <th colspan="6">Progress</th>
                    </tr>
                    <tr>
                        <th>Plan</th>
                        <th>Act</th>
                        <th>left</th>
                        <th>Updated</th>
                        <th>%</th>
                        <th>left</th>
                    </tr>
                </thead>
             
            </table>
        

  <script>
 
  </script>




    </div>
</form>


  <!-- Include jQuery and jQuery UI libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="path/to/flatpickr.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>














    // Loop through the generated input fields

    <?php
    echo 'flatpickr("#Doc_Supply_' . $rowIndex . '", {
      dateFormat: "d-M-Y",
    });';
    ?>
 

    






     </script>
           <script>
    function submitForm() {
        document.getElementById("projectForm").submit();
    }
    </script>

        <script>


















          const items = document.querySelectorAll(".item");
          const selectBtn2 = document.querySelector(".select-btn2");
  

  
        



          selectBtn2.addEventListener("click", () => {
              selectBtn2.classList.toggle("open");
          });

  
          // Get the projects list and selected project element
          const projectsList2 = document.querySelector(".list-items2");
          const selectedProject2 = document.querySelector(".btn-text2");
  
          // Add click event listeners to each project item
          const projectItems2 = projectsList2.querySelectorAll(".item");
          projectItems2.forEach(item => {
              item.addEventListener("click", () => {
                  // Update the selected project text
                  selectedProject2.textContent = item.querySelector(".item-text").textContent.trim();

                  selectedProject2.style.color = "black";
                  projectsList2.style.display = "none";

              });
          });


        







      </script>


<script>
function sve(){
<?php


include 'conn.php';
$escapedTableName = mysqli_real_escape_string($conn, $selectedTable);

include 'conn.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $i = 1;
    $selectedTable = $_POST['table'];
    echo "Name: '$selectedTable'";

    while (isset($_POST['task_name' . $i])) {
        $taskName = $_POST['task_name' . $i];

        // Validate and sanitize the data if needed

        // Update the database for each task_name field

        // Assuming you have an 'id' column in your table, replace it with the actual primary key column name
        $id = $i;  // Replace this with the actual ID for each row

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "si", $taskName, $id);
        $result = mysqli_stmt_execute($stmt);

        if (!$result) {
            $error_message = 'Error updating data: ' . mysqli_error($conn);
            echo $error_message;

            // Use JavaScript to log the error message to the console
            echo '<script>console.error("' . $error_message . '");</script>';

            // Handle the error as needed
        }

        $i++;
    }
}





?>
}

<?php
include 'conn.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming the form has other fields for data input, let's say a text field with name 'dataField'
    $i = 1;
    while (isset($_POST['task_name' . $i])) {
        $taskName = $_POST['task_name' . $i];


    // Assuming $_POST['table'] contains the selected table name
    $selectedTable = $_POST['table'];

    // Your data validation and sanitization code goes here

    // Construct your SQL query to insert data into the selected table
    $sql = "UPDATE $selectedTable SET Task_Name = ? WHERE id = ?";
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}}

// Rest of your existing code for generating the dropdown menu goes here
?>





</script>


</body>
</html>