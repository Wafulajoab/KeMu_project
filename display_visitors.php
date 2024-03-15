<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kemu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch registered visitors with row number starting from 1
$sql = "SELECT 
            ROW_NUMBER() OVER(ORDER BY registration_time) AS serial_number, 
            username, 
            idno, 
            phone_number, 
            purpose, 
            DATE_FORMAT(registration_time, '%Y-%m-%d %H:%i') AS formatted_time 
        FROM visitors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    // Start printable version
    echo "<html><head><title>KEMU VISITORS RECORDS</title>";
    echo "<style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
            @media print {
                h1 { text-align: center; }
                table { width: 100%; border-collapse: collapse; }
                th, td { border: 1px solid #ddd; padding: 8px; }
                th { background-color: #f2f2f2; }
                .printable { display: block; } /* Show only elements with the 'printable' class */
                .non-printable { display: none; } /* Hide elements with the 'non-printable' class */
            }
          </style>";
    echo "</head><body>";

    // Non-printable logo
    echo "<div class='non-printable' style='text-align: center;'>";
    echo "<img src='kmu.jpeg' class='image2' alt='KeMU Image' style='max-width: 5%; height: auto;'>";
    echo "</div>";

    // Printable title
    echo "<h1 class='printable' style='text-align: center;'>KEMU VISITORS RECORDS</h1>";

    // Display visitors in a table
    echo "<table class='printable' style='width: 80%; margin: 0 auto;'>";
    echo "<thead><tr><th>Serial Number</th><th>Name</th><th>ID Number</th><th>Phone Number</th><th>Purpose of Visit</th><th>Date and Time of Arrival</th></tr></thead>";
    echo "<tbody>";
    
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['serial_number']}</td>";
        echo "<td>{$row['username']}</td>";
        echo "<td>{$row['idno']}</td>";
        echo "<td>{$row['phone_number']}</td>";
        echo "<td>{$row['purpose']}</td>";
        echo "<td>{$row['formatted_time']}</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";

    // End printable version
    echo "</body></html>";
} else {
    echo "No registered visitors yet.";
}

     //go back button
     echo "<button onclick='goBack()' class='back-btn'>Go Back</button>";
     echo "<style>
         .back-btn {
             background-color: purple;
             color: white;
             border: none;
             border-radius: 25px;
             cursor: pointer;
            padding: 10px;
             margin-top: 20px; /* Adjust margin-top as needed */
         }
         .back-btn:hover {
             background-color: green;
         }
     </style>";
     
     echo "<script>
         function goBack() {
             window.history.back();
         }
     </script>";
     

// Close connection
$conn->close();
?>
<br><br><br><br>
<!-- Footer -->
<footer id="footer">
    <style>
        #footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: lavender;
            text-align: center;
            padding: 0.1rem;
        }

        .footer p {
            justify-content: center;
        }

        .footer a {
            color: green;
            text-decoration: underline;
            font-weight: bold;
        }
    </style>

    <div class="footer">
    <p><span>Company.<strong>All Rights Reserved.</strong>Designed By <a href="jmtech.php">JMTech</a></span></p>
    </div>
</footer>
