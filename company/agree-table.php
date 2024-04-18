<?php
include('header.php');
?>

<section class="section-hero overlay inner-page bg-image" style="background-image: url('https://images.pexels.com/photos/1714205/pexels-photo-1714205.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="custom-breadcrumbs">
                    <!-- Add your breadcrumbs here if needed -->
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-4">
    <?php
    include('../include/config.php');

  


    $place = "SELECT a.*, p.jobtitle
              FROM `tbl_apply` a
              INNER JOIN `tbl_post` p ON a.jobid = p.id";

    $place_run = mysqli_query($conn, $place);
    ?>

    <table class="table text-nowrap mx-auto">
        <thead>
            <tr>
                <th class="border-top-0">No</th>
                <th class="border-top-0">Name</th>
                <th class="border-top-0">Email</th>
                <th class="border-top-0">Date</th>
                <th class="border-top-0">Message</th>
                <th class="border-top-0">Position</th>
                <th class="border-top-0">File</th>
                <th class="border-top-0">Approved</th>
                <th class="border-top-0">Rejected</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($place_run)) {
                while ($row = mysqli_fetch_assoc($place_run)) {
            ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['jobtitle']; ?></td>
                        <td>
                            <?php echo "<img src='" . $row['file'] . "' style='width: 50px; height: 50px;'>"; ?>
                            <a href="download.php?image=<?php echo urlencode($row['file']); ?>">⬇️</a>
                        </td>
                        <td><?php echo '<a href="agree.php?id=' . $row['id'] . '"><button class="btn btn-success">Agree</button></a>'; ?> </td>
                        <td><?php echo '<a href="decline.php?id=' . $row['id'] . '"><button class="btn btn-danger">Reject</button></a>'; ?></td>
                    </tr>
            <?php
                }
            } else {
                echo '<tr><td colspan="8">No records found</td></tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Your existing script tags -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- ... (other scripts) ... -->
<script src="js/custom.js"></script>
</body>

</html>
