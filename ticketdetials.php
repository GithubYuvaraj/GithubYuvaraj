<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
<meta http-equiv="refresh" content="5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ticket detials</title>
 
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="./css/ticketdetialsfront.css" />
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
    body {
        padding: 0px;
        margin: 0;

        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    table {
        margin-top:250px;
        position: absolute;
        
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
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

    <!------zen coding ------>
    <section id="headerBlock">
      <article class="container">
        <nav class="leftNav">
          <section>
            <div class="logo">
              <a href="#">logo</a>
            </div>
            <div class="leftmenu">
                <p>RHYTHMIC ROAMER - TICKET DETIALS</p>
            </div>
          </section>
        </nav>

       <nav class="rightNav">
          <ul>
          <li>
              <a href="http://localhost/project_web/">
                <span><i class="fa fa-sign-out" aria-hidden="true"> </i></span>
              </a>
            </li>
          </ul>
        </nav>

      </article>

    </section>


    <table>

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

        // SQL query to retrieve data
        $sql = "SELECT ticket_no, trip_no, date, time, starting_point, ending_point, adult, child, luggage, price FROM ticketdata ORDER BY ticket_no DESC LIMIT 20";
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
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }
        // Close connection
        $conn->close();
        ?>
    </table>
</body>
</html>

