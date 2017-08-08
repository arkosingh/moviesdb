<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $conn = mysqli_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysqli_select_db($conn,"movies_db");
        

      //execute the SQL query and return records
      $result = mysqli_query($conn,"SELECT * FROM movies ");
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>email_id</th>
          <th>password</th>
          <!--<th>Employee_dob</th>
          <th>Employee_Adress</th>
          <th>Employee_dept</th>
          <td>Employee_salary</td>-->
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
           
            echo "<tr>";
            echo "<td>".$row['email_id']."</td>";
			echo "<td>".$row['password']."</td>";
              /*<td>{$row/['password'\]}</td>
              <td>{$row\['employee_dob'\]}</td>
              <td>{$row\['employee_addr'\]}</td>
              <td>{$row\['employee_dept'\]}</td>
              <td>{$row\['employee_sal'\]}</td>
            </tr>\n";*/
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($conn); ?>
    </body>
    </html>