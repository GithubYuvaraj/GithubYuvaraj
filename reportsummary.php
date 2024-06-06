<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report Summary</title>
 
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="./css/reportsummaryfront.css" />
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <style>
  
 
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    
    }
 .custom-header {
    background-color: #ec495a;
    color: #fff;
    padding:20px 60px;
    text-align: left;
  }
  .custom-header h1 {
    margin: 0;
    font-size: 24px;
  }
span{
text-decoration:none;
display:flex;
 color: #fff; /* Custom color */
    font-size: 24px; /* Custom size */
    margin-left: 1500px; /* Custom spacing */
margin-top: -27px;
}

    .container {
        display: flex;
       
        justify-content: space-between;
        width: 800px;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
        margin-left: 430px;
        margin-top: 50px;
   
     
    }
    .container:hover {
        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
    }
    .box {
        width: calc(33.33% - 10px);
    }
    h2 {
        margin-top: 0;
        color: #333;
    }
    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-size: 18px;
        font-weight: bold;
    }
    input[type="date"],
    select {

        padding: 12px;
        font-size: 16px;
        width: calc(100% - 24px);
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        background-color: #f9f9f9;
        cursor: pointer;
        outline: none;
    }
    input[type="date"]:hover,
    select:hover {
        background-color: #e9e9e9;
    }
    input[type="submit"] {
        height: 45px;
        width:150px;
        margin-left:-200px;
        margin-top:165px;
        padding: 2px 10px;
        font-size: 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        outline: none;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }

    
    #tablea{
      
        position:absolute;
       
        left: 50%;
        top: 30%;
        transform: translate(-50%, +160%);
        border-collapse: collapse;
        width: 1000px;
        height: 150px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
 
     #tablet{
      
        position:absolute;
        margin-left:-750px;
  
        margin-top:300px;
        left: 50%;
        top: 50%;
        border-collapse: collapse;
        width: 1500px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #ec495a;
        color: #fff;
    }
 
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }


    </style>
</head>
 <body>
    <!----header Block starts here-->
<header class="custom-header">
  <h1>RHYTHMIC ROAMER - REPORT</h1>

 <a href="http://localhost/project_web/">
                <span><i class="fa fa-sign-out" aria-hidden="true"></i></span>
 </a> 
</header>
 
<div class="container">
    <div class="box">
        <h2>DATE REPORT</h2>
        <form method="post">
            <label for="start_date" style="color: #333; font-size: 20px;">Starting Date:</label>
            <input type="date" id="start_date" name="start_date">
            <label for="end_date" style="color: #333; font-size: 20px;">Ending Date:</label>
            <input type="date" id="end_date" name="end_date">
    </div>
    <div class="box">
        <h2>PLACE REPORT</h2>
        <label for="start_place" style="color: #333; font-size: 20px;">Starting Place:</label>
        <select id="start_place" name="start_place">
            <option value=""> </option>
            <option value="Madurai">Madurai</option>
            <option value="Dindigul Bypass">Dindigul Bypass</option>
            <option value="Oddanchatram">Oddanchatram</option>
            <option value="Dharapuram">Dharapuram</option>
            <option value="Palladam">Palladam</option>
             <option value="Ramanathapuram">Ramanathapuram</option>
        </select>
        <label for="end_place" style="color: #333; font-size: 20px;">Ending Place:</label>
        <select id="end_place" name="end_place">
            <option value=""> </option>
            <option value="Dindigul Bypass">Dindigul Bypass</option>
            <option value="Oddanchatram">Oddanchatram</option>
            <option value="Dharapuram">Dharapuram</option>
            <option value="Palladam">Palladam</option>
             <option value="Ramanathapuram">Ramanathapuram</option>
             <option value="Coimbatore">Coimbatore</option>
        </select>
    </div>
    <div class="box">
        <h2>TRIP REPORT</h2>
        <label for="trip_number" style="color: #333; font-size: 20px;">Trip Number:</label>
        <select id="trip_number" name="trip_number">
            <?php for ($i = 0; $i <= 15; $i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>
    </div>
    <input type="submit" value="GO">
    </form>
</div>
 
 <table id="tablea">

        <tr id="header">
            <th>TOTAL TICKET</th>
            <th>TOTAL TRIP</th>
            <th>ADULT COUNT</th>           
            <th>CHILD COUNT</th>
            <th>LUGGAGE COUNT</th>
            <th>TOTAL AMOUNT</th>
         
         
        </tr>



  <?php
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "busticket";

        $conn = new mysqli("localhost", "root", "", "busticket");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


// Example usage of the functions
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (!empty($_POST["start_date"]) && !empty($_POST["end_date"])){

    // Example 1: Retrieving data between two dates
    $start_date = $_POST["start_date"]; // Change to the name attribute of your start date input field in your HTML form
    $end_date = $_POST["end_date"]; // Change to the name attribute of your end date input field in your HTML form
 $columns = array("ticket_no", "trip_no", "adult", "child", "luggage", "price"); // Add more columns as needed

// Construct the SQL query to sum values from the specified columns
$sql = "SELECT COUNT(ticket_no) AS sum_ticket_no, MAX(trip_no) AS sum_trip_no, SUM(adult) AS sum_adult, SUM(child) AS sum_child, SUM(luggage) AS sum_luggage, SUM(price) AS sum_price FROM ticketdata WHERE date BETWEEN '$start_date' AND '$end_date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the sums for each column
    $row = $result->fetch_assoc();
    foreach ($columns as $column) {
        echo "<tc>
                   <td>".$row["sum_$column"]."</td>
             </tc>";
              }

}
?>
<table id="tablet">

        <tr id="header">
            <th>TICKET NUMBER</th>
            <th>TRIP NO</th>
            <th>DATE</th>
            <th>TIME</th>
            <th>BOARD</th>
            <th>ALIGHT</th>
            <th>NO OF TICKET</th>
            <th>NO OF HALF-TICKET</th>
            <th>LUGGAGE</th>
            <th>PRICE</th>
        </tr>
      
  <?php
        // SQL query to retrieve data
        $sql = "SELECT ticket_no, trip_no, date, time, starting_point, ending_point, adult, child, luggage, price FROM ticketdata WHERE date BETWEEN '$start_date' AND '$end_date'";
        $result = $conn->query($sql);

        // Check if any rows are returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["ticket_no"]."</td>
                        <td>".$row["trip_no"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["time"]."</td>
                        <td>".$row["starting_point"]."</td>
                        <td>".$row["ending_point"]."</td>
                        <td>".$row["adult"]."</td>
                         <td>".$row["child"]."</td>
                        <td>".$row["luggage"]."</td>
                        <td>".$row["price"]."</td>
                    </tr>";
            }
        }

   
exit;
} 

if (!empty($_POST["start_place"]) && !empty($_POST["end_place"])){
    // Example 2: Retrieving data based on two places
    $start_place = $_POST["start_place"]; // Change to the name attribute of your place1 input field in your HTML form
    $end_place = $_POST["end_place"]; // Change to the name attribute of your place2 input field in your HTML form

 $columns = array("ticket_no", "trip_no", "adult", "child", "luggage", "price"); // Add more columns as needed

// Construct the SQL query to sum values from the specified columns
$sql = "SELECT COUNT(ticket_no) AS sum_ticket_no, MAX(trip_no) AS sum_trip_no, SUM(adult) AS sum_adult, SUM(child) AS sum_child, SUM(luggage) AS sum_luggage, SUM(price) AS sum_price FROM ticketdata WHERE starting_point = '$start_place' AND ending_point = '$end_place'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the sums for each column
    $row = $result->fetch_assoc();
    foreach ($columns as $column) {
        echo "<tc>
                   <td>".$row["sum_$column"]."</td>
             </tc>";
              }

}
?>
<table id="tablet">

        <tr id="header">
            <th>TICKET NUMBER</th>
            <th>TRIP NO</th>
            <th>DATE</th>
            <th>TIME</th>
            <th>BOARD</th>
            <th>ALIGHT</th>
            <th>NO OF TICKET</th>
            <th>NO OF HALF-TICKET</th>
            <th>LUGGAGE</th>
            <th>PRICE</th>
        </tr>
      
  <?php
        // SQL query to retrieve data
        $sql = "SELECT ticket_no, trip_no, date, time, starting_point, ending_point, adult, child, luggage, price FROM ticketdata WHERE starting_point = '$start_place' AND ending_point = '$end_place'";
        $result = $conn->query($sql);

        // Check if any rows are returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["ticket_no"]."</td>
                        <td>".$row["trip_no"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["time"]."</td>
                        <td>".$row["starting_point"]."</td>
                        <td>".$row["ending_point"]."</td>
                        <td>".$row["adult"]."</td>
                         <td>".$row["child"]."</td>
                        <td>".$row["luggage"]."</td>
                        <td>".$row["price"]."</td>
                    </tr>";
            }
        }

exit;
} 

 if (!empty($_POST["trip_number"])){
 

    // Example 3: Retrieving data based on trip number
    $trip_number = $_POST["trip_number"]; // Change to the name attribute of your trip number input field in your HTML form

 $columns = array("ticket_no", "trip_no", "adult", "child", "luggage", "price"); // Add more columns as needed

// Construct the SQL query to sum values from the specified columns
$sql = "SELECT COUNT(ticket_no) AS sum_ticket_no, MAX(trip_no) AS sum_trip_no, SUM(adult) AS sum_adult, SUM(child) AS sum_child, SUM(luggage) AS sum_luggage, SUM(price) AS sum_price FROM ticketdata WHERE trip_no = '$trip_number'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the sums for each column
    $row = $result->fetch_assoc();
    foreach ($columns as $column) {
        echo "<tc>
                   <td>".$row["sum_$column"]."</td>
             </tc>";
              }

}
?>
<table id="tablet">

        <tr id="header">
            <th>TICKET NUMBER</th>
            <th>TRIP NO</th>
            <th>DATE</th>
            <th>TIME</th>
            <th>BOARD</th>
            <th>ALIGHT</th>
            <th>NO OF TICKET</th>
            <th>NO OF HALF-TICKET</th>
            <th>LUGGAGE</th>
            <th>PRICE</th>
        </tr>
      
  <?php
        // SQL query to retrieve data
        $sql = "SELECT ticket_no, trip_no, date, time, starting_point, ending_point, adult, child, luggage, price FROM ticketdata WHERE trip_no = '$trip_number'";
        $result = $conn->query($sql);

        // Check if any rows are returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["ticket_no"]."</td>
                        <td>".$row["trip_no"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["time"]."</td>
                        <td>".$row["starting_point"]."</td>
                        <td>".$row["ending_point"]."</td>
                        <td>".$row["adult"]."</td>
                         <td>".$row["child"]."</td>
                        <td>".$row["luggage"]."</td>
                        <td>".$row["price"]."</td>
                    </tr>";
            }
        }
exit;
}
}

   // Close connection
        $conn->close();
        ?> 

</body>
</html>