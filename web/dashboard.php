<?php
session_start();
include('includes/dbconfig.php');
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class=" sticky-footer bg-light" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register Users</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="table-responsive">
        <table class="table table-bordered table table-hover table-sm table-responsive w-100 p-3 mw-100">
            <thead>
                <tr>
                    <th scope="col">Time Submitted</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Placement</th>
                    <th scope="col">Cover Up?</th>
                    <th scope="col">Size</th>
                    <th scope="col">Style</th>
                    <th scope="col">Color</th>
                    <th scope="col">Description</th>
                    <th scope="col">Font</th>
                    <th scope="col">Preferred Days</th>
                    <th scope="col">Preferred Time</th>
                    <th scope="col">Specific Date</th>
                    <th scope="col">Comments</th>
                    <th scope="col">Previous Client?</th>
                    <th scope="col">Placement Picture</th>
                    <th scope="col">Reference 1</th>
                    <th scope="col">Reference 2</th>
                    <th scope="col">Reference 3</th>
                    <th scope="col">Individual View</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $count=1;
                $results = $db->query("SELECT * FROM formsubmission LEFT JOIN images ON formsubmission.id = images.id ORDER BY formsubmission.id");
                if (mysqli_num_rows($results) > 0) {
                while ($row = $results->fetch_assoc()) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $row["created"] ?>
                        </th>
                        <td>
                            <?php echo $row['name'] ?>
                        </td>
                        <td>
                            <?php echo $row['email'] ?>
                        </td>
                        <td>
                            <?php echo $row['phone_number'] ?>
                        </td>
                        <td>
                            <?php echo $row['placement'] ?>
                        </td>
                        <td>
                            <?php echo $row['coverup'] ?>
                        </td>
                        <td>
                            <?php echo $row['tattoo_size'] ?>
                        </td>
                        <td>
                            <?php echo $row['style'] ?>
                        </td>
                        <td>
                            <?php echo $row['color'] ?>
                        </td>
                        <td>
                            <?php echo $row['description'] ?>
                        </td>
                        <td>
                            <?php echo $row['font'] ?>
                        </td>
                        <td>
                            <?php echo $row['preferred_days'] ?>
                        </td>
                        <td>
                            <?php echo $row['preferred_time'] ?>
                        </td>
                        <td>
                            <?php echo $row['specific_date'] ?>
                        </td>
                        <td>
                            <?php echo $row['comments'] ?>
                        </td>
                        <td>
                            <?php echo $row['previous_client'] ?>
                        </td>
                        <td>
                            <img class="img-thumbnail"
                                src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["placementImage"]); ?>" />
                        </td>
                        <td>
                            <img class="img-thumbnail"
                                src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["reference1"]); ?>" />
                        </td>
                        <td>
                            <img class="img-thumbnail"
                                src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["reference2"]); ?>" />
                        </td>
                        <td>
                            <img class="img-thumbnail"
                                src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["reference3"]); ?>" />
                        </td>
                        <td>
                            <a href="individualView.php?varname=<?php echo $row["id"] ?>">View</a>
                        </td>
                    </tr>
                    <?php
                $count++;
            }
            } else {
            echo '0 results';
            }?>
            </tbody>
        </table>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
} else {
    header("Location: login.php");
    die();
}
?>