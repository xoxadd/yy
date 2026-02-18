<?php
include "config.php";

if($_SESSION['role']!="admin"){
    header("Location: admin.html");
}

$status = $conn->query("SELECT * FROM voting_status WHERE id=1")->fetch_assoc();
?>

<h2>Admin Dashboard</h2>

<p>Voting Status: <?php echo $status['status']; ?></p>

<a href="add_candidate.php">Add Candidate</a><br>
<a href="manage_voting.php">Open/Close Voting</a><br>
<a href="../index.php">Logout</a>
