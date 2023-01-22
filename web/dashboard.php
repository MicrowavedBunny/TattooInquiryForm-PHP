<?php
// Include the database configuration file  
require_once 'includes/dbConfig.php';
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="w-100 p-3 mw-100">
        <table class="table table-bordered table-hover table-sm table-responsive w-100 p-3 mw-100">
            <thead class="table-dark">
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
                <?php $results = $db->query("SELECT * FROM formsubmission LEFT JOIN images ON formsubmission.id = images.id ORDER BY formsubmission.id");
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
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>