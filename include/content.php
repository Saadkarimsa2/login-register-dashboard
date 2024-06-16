<?php
    require 'connection2.php';

    $result = mysqli_query($conn, "SELECT * FROM users");
?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4> User Details!</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $counter = 1;
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<th scope='row'>" . $counter . "</th>";
                                    echo "<td>" . $row['username'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['date_of_birth'] . "</td>";
                                    echo "<td>" . $row['gender'] . "</td>";
                                    echo "<td>" . $row['contact_number'] . "</td>";
                                    echo "<td>" . $row['address'] . "</td>";
                                    echo "</tr>";
                                    $counter++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



