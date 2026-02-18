<?php
session_start();
require_once 'config.php'; // Database connection

// Check if logged in as teacher
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'teacher') {
    header("Location: login.php?role=teacher");
    exit();
}

// Messages
$error = "";
$success = "";

// Handle adding student
if (isset($_POST['add_student'])) {
    $lrn = trim($_POST['lrn']);

    if (!$lrn) {
        $error = "Please enter LRN!";
    } else {
        // Check if student already exists
        $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND role='student'");
        $stmt->bind_param("s", $lrn);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "Student with this LRN already exists!";
        } else {
            $default_password = password_hash("student123", PASSWORD_DEFAULT);
            $role = "student";
            $status = "active";

            $stmt = $conn->prepare("INSERT INTO users (username, password, role, status) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $lrn, $default_password, $role, $status);
            if ($stmt->execute()) {
                $success = "Student added successfully! Default password: student123";
            } else {
                $error = "Error adding student!";
            }
        }
    }
}

// Fetch all students
$students = $conn->query("SELECT * FROM users WHERE role='student' ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Teacher Dashboard</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
* { margin:0; padding:0; box-sizing:border-box; font-family:"Segoe UI", sans-serif; }
body { min-height:100vh; background: linear-gradient(135deg,#efe9ff,#d9ccff); }
.container { display:flex; min-height:100vh; padding:20px; }
.sidebar { width:230px; background:white; border-radius:20px; padding:25px; box-shadow:0 12px 30px rgba(0,0,0,0.08); }
.sidebar h2 { color:#6c4dff; margin-bottom:30px; }
.sidebar ul { list-style:none; }
.sidebar li { padding:12px; margin-bottom:10px; border-radius:12px; cursor:pointer; color:#555; transition:0.3s; }
.sidebar li.active,.sidebar li:hover { background:#ede7ff; color:#6c4dff; font-weight:600; }
.main { flex:1; padding:25px; }
.section { display:none; }
.section.active { display:block; }
.header { background:white; color:#6c4dff; padding:18px; border-radius:18px; margin-bottom:25px; font-size:18px; font-weight:600; box-shadow:0 10px 25px rgba(0,0,0,0.08);}
input { padding:12px; width:260px; border-radius:14px; border:1px solid #ddd; outline:none; margin-right:10px;}
button { padding:12px 22px; border:none; border-radius:14px; background:#9f8cff; color:white; font-weight:600; cursor:pointer; transition:0.3s; }
button:hover { background:#7f6bff; }
table { width:100%; margin-top:25px; border-collapse:collapse; background:white; border-radius:18px; overflow:hidden; box-shadow:0 12px 30px rgba(0,0,0,0.08);}
th,td { padding:14px; border-bottom:1px solid #eee; text-align:center;}
th { background:#9f8cff; color:white; }
.cards { display:grid; grid-template-columns:repeat(2,1fr); gap:20px; }
.card { background:white; padding:25px; border-radius:20px; box-shadow:0 12px 30px rgba(0,0,0,0.08); text-align:center; }
.card h1 { color:#6c4dff; }
.logout { background:#ff7676; }
.logout:hover { background:#e35d5d; }
.error-msg { color:red; margin-bottom:10px; font-weight:600; }
.success-msg { color:green; margin-bottom:10px; font-weight:600; }
</style>
</head>
<body>

<div class="container">

<div class="sidebar">
<h2>Teacher Panel</h2>
<ul>
<li class="active" onclick="showSection('dashboard', this)">Dashboard</li>
<li onclick="showSection('students', this)">Students</li>
<li onclick="showSection('reports', this)">Reports</li>
<li onclick="showSection('settings', this)">Settings</li>
</ul>
</div>

<div class="main">

<div id="dashboard" class="section active">
<div class="header">Dashboard Overview</div>
<div class="cards">
  <div class="card">
    <h1 id="totalStudents"><?php echo $students->num_rows; ?></h1>
    <p>Total Students</p>
  </div>
  <div class="card">
    <h1 id="activeDisplay"><?php 
        $activeCount = $conn->query("SELECT * FROM users WHERE role='student' AND status='active'")->num_rows; 
        echo $activeCount; 
    ?></h1>
    <p>Active Students</p>
  </div>
</div>
<canvas id="chart" style="margin-top:35px;"></canvas>
</div>

<div id="students" class="section">
<div class="header">Student Management</div>

<?php if($error) echo "<div class='error-msg'>$error</div>"; ?>
<?php if($success) echo "<div class='success-msg'>$success</div>"; ?>

<form method="POST">
<input type="text" name="lrn" placeholder="Enter Student LRN" required>
<button type="submit" name="add_student">Add Student</button>
</form>

<table>
<thead>
<tr><th>#</th><th>LRN</th><th>Status</th></tr>
</thead>
<tbody>
<?php 
$students = $conn->query("SELECT * FROM users WHERE role='student' ORDER BY id ASC");
while($student = $students->fetch_assoc()):
?>
<tr>
<td><?php echo $student['id']; ?></td>
<td><?php echo $student['username']; ?></td>
<td><?php echo ucfirst($student['status']); ?></td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</div>

<div id="reports" class="section">
<div class="header">Reports</div>
<p>📊 Student summary report</p>
</div>

<div id="settings" class="section">
<div class="header">Settings</div>
<button class="logout" onclick="location.href='index.html'">Log Out</button>
</div>

</div>
</div>

<script>
function showSection(id, el){
document.querySelectorAll(".section").forEach(s => s.classList.remove("active"));
document.getElementById(id).classList.add("active");
document.querySelectorAll(".sidebar li").forEach(li => li.classList.remove("active"));
el.classList.add("active");
}

// Chart
const ctx = document.getElementById("chart");
const chart = new Chart(ctx, {
type:"bar",
data:{
labels:["Active","Inactive"],
datasets:[{
label:"Student Status",
data:[
<?php echo $activeCount; ?>,
<?php echo $students->num_rows - $activeCount; ?>
],
backgroundColor:["#6c4dff","#ff7676"]
}]
},
options:{responsive:true,plugins:{legend:{display:false}}}
});
</script>

</body>
</html>
