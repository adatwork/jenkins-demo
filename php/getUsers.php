<?php
//header part
require('./header.php');
?>


<?php
// head-navbar
require('./headerNav.php');
?>

<?php
// carousel part
require('./carousel.php');
?>

<div class="container">
    <div class="row mx-auto">
        <div class="col-md-6 mx-auto">
            <?php

            include("db_connect.php");

            $sql = "SELECT * FROM user_list ORDER BY username";
            $result = mysqli_query($connect, $sql);

            // Fetch all
            // $arraySet = mysqli_fetch_all($result, MYSQLI_ASSOC);

            // foreach ($arraySet as $ele) {
            //     print_r($ele);
            // }

            echo "<table class='table'>

<thead class='thead-dark'>

<tr>

<th scope = 'col'>Username</th>

<th scope = 'col'>Password</th>

<th scope = 'col'>Name</th>

<th scope = 'col'>Phone No.</th>

</tr>

</thead>

<tbody>";


            while ($row = mysqli_fetch_assoc($result)) {
                $username = $row['username'];
                $password = $row['password'];
                $name = $row['name'];
                $phone_no = $row['phone_no'];

                echo "<tr>";

                echo "<td>" . $username . "</td>";

                echo "<td>" . $password . "</td>";

                echo "<td>" . $name . "</td>";

                echo "<td>" . $phone_no . "</td>";

                echo "</tr>";
            }

            echo "</table>";
            // Free result set
            mysqli_free_result($result);

            mysqli_close($connect);
            ?>


        </div>
    </div>
</div>


<?php
// footer part
require('./footer.php');
?>