<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Voting Admin Panel</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif;}
body{display:flex;background:linear-gradient(to right,#dcd6f7,#c3bef0);min-height:100vh;}
.sidebar{width:240px;background:#ede7f6;padding:20px;border-radius:20px;margin:15px;}
.sidebar h2{margin-bottom:30px;text-align:center;color:#6c63ff;}
.sidebar ul{list-style:none;}
.sidebar li{padding:12px;margin-bottom:10px;cursor:pointer;border-radius:12px;transition:0.3s;color:#555;}
.sidebar li:hover,.sidebar li.active{background:#c3bef0;color:#6c63ff;}
.main{flex:1;padding:20px;}
.header{background:#ede7f6;padding:15px 25px;border-radius:20px;margin-bottom:20px;color:#6c63ff;font-weight:bold;}
.card-container{display:grid;grid-template-columns:repeat(2,1fr);gap:20px;margin-bottom:20px;}
.card{background:#ede7f6;padding:30px;border-radius:20px;text-align:center;}
.card h3{font-size:32px;color:#6c63ff;}
.card p{color:#444;}
.section{display:none;}
.section.active{display:block;}
.box{background:#ede7f6;padding:20px;border-radius:20px;margin-top:20px;}
button{padding:8px 15px;border:none;border-radius:10px;cursor:pointer;background:#6c63ff;color:white;}
button.danger{background:#ff6b6b;}
button:hover{opacity:0.9;}
table{width:100%;border-collapse:collapse;margin-top:15px;}
th,td{padding:10px;text-align:center;}
th{background:#c3bef0;color:#333;border-radius:10px;}
tr{background:white;}
input{padding:8px;border-radius:10px;border:1px solid #ccc;}
</style>
</head>
<body>

<div class="sidebar">
  <h2>Admin Panel</h2>
  <ul>
    <li class="active" onclick="showSection('dashboard',this)">Dashboard</li>
    <li onclick="showSection('candidates',this)">Candidates</li>
    <li onclick="showSection('voting',this)">Voting Control</li>
    <li onclick="showSection('reports',this)">Reports</li>
    <li onclick="showSection('manage',this)">Manage System</li>
    <li onclick="logout()">Logout</li>
  </ul>
</div>

<div class="main">

  <!-- DASHBOARD -->
  <div id="dashboard" class="section active">
    <div class="header"><h2>Dashboard Overview</h2></div>
    <div class="card-container">
      <div class="card blue"><h3 id="totalCandidates">0</h3><p>Total Candidates</p></div>
      <div class="card green"><h3 id="totalVotes">0</h3><p>Total Votes</p></div>
      <div class="card orange"><h3 id="votingStatus">Closed</h3><p>Voting Status</p></div>
      <div class="card red"><h3>Admin</h3><p>Full Access</p></div>
    </div>
    <div class="box"><canvas id="voteChart"></canvas></div>
  </div>

  <!-- CANDIDATES -->
  <div id="candidates" class="section">
    <div class="box">
      <h3>Manage Candidates</h3>
      <input type="text" id="candidateName" placeholder="Enter Candidate Name">
      <button onclick="addCandidate()">Add</button>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Votes</th>
            <th>Vote</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="candidateTable"></tbody>
      </table>
    </div>
  </div>

  <!-- VOTING CONTROL -->
  <div id="voting" class="section">
    <div class="box">
      <h3>Voting Control</h3>
      <button onclick="openVoting()">Open Voting</button>
      <button class="danger" onclick="closeVoting()">Close Voting</button>
    </div>
  </div>

  <!-- REPORTS -->
  <div id="reports" class="section">
    <div class="box"><h3>Voting Reports</h3><p>Total votes and candidate performance shown in graph.</p></div>
  </div>

  <!-- MANAGE -->
  <div id="manage" class="section">
    <div class="box"><h3>System Operations</h3><button onclick="resetSystem()">Reset All Data</button></div>
  </div>

</div>

<script>
/* ========== LOCAL STORAGE SETUP ========== */
let candidates = JSON.parse(localStorage.getItem("candidates")) || [];
let votingOpen = JSON.parse(localStorage.getItem("votingOpen")) || false;

/* ========== NAVIGATION ========== */
function showSection(id,el){
  document.querySelectorAll('.section').forEach(s=>s.classList.remove('active'));
  document.getElementById(id).classList.add('active');
  document.querySelectorAll('.sidebar li').forEach(li=>li.classList.remove('active'));
  el.classList.add('active');
}

/* ========== SAVE TO LOCAL STORAGE ========== */
function saveData(){
  localStorage.setItem("candidates", JSON.stringify(candidates));
  localStorage.setItem("votingOpen", JSON.stringify(votingOpen));
}

/* ========== CANDIDATE ACTIONS ========== */
function addCandidate(){
  const name = document.getElementById("candidateName").value.trim();
  if(!name) return alert("Enter name");
  candidates.push({name:name,votes:0});
  document.getElementById("candidateName").value="";
  saveData();
  updateTable();
  updateChart();
}

function editCandidate(index){
  let newName = prompt("Edit name:", candidates[index].name);
  if(newName && newName.trim()!=""){
    candidates[index].name = newName.trim();
    saveData();
    updateTable();
    updateChart();
  }
}

function removeCandidate(index){
  if(confirm("Delete candidate?")){
    candidates.splice(index,1);
    saveData();
    updateTable();
    updateChart();
  }
}

/* ========== VOTING ACTION ========== */
function voteCandidate(index){
  if(!votingOpen) return alert("Voting is closed!");
  candidates[index].votes++;
  saveData();
  updateTable();
  updateChart();
}

function openVoting(){
  votingOpen = true;
  document.getElementById("votingStatus").innerText="Open";
  saveData();
}

function closeVoting(){
  votingOpen = false;
  document.getElementById("votingStatus").innerText="Closed";
  saveData();
}

/* ========== RESET / LOGOUT ========== */
function resetSystem(){
  if(confirm("Reset all data?")){
    candidates = [];
    votingOpen = false;
    saveData();
    updateTable();
    updateChart();
    document.getElementById("votingStatus").innerText="Closed";
  }
}

function logout(){
  if(confirm("Are you sure you want to logout?")){
    window.location.href="index.html";
  }
}

/* ========== TABLE & CHART ========== */
function updateTable(){
  const table = document.getElementById("candidateTable");
  table.innerHTML="";
  let total=0;
  candidates.forEach((c,i)=>{
    total+=c.votes;
    table.innerHTML+=`
      <tr>
        <td>${i+1}</td>
        <td>${c.name}</td>
        <td>${c.votes}</td>
        <td><button onclick="voteCandidate(${i})">Vote</button></td>
        <td>
          <button onclick="editCandidate(${i})">Edit</button>
          <button class="danger" onclick="removeCandidate(${i})">Delete</button>
        </td>
      </tr>
    `;
  });
  document.getElementById("totalCandidates").innerText=candidates.length;
  document.getElementById("totalVotes").innerText=total;
}

/* ========== CHART.JS ========== */
const ctx = document.getElementById("voteChart");
const voteChart = new Chart(ctx,{
  type:"bar",
  data:{
    labels:[],
    datasets:[{
      label:"Votes",
      data:[],
      backgroundColor:"#6c63ff"
    }]
  }
});

function updateChart(){
  voteChart.data.labels = candidates.map(c=>c.name);
  voteChart.data.datasets[0].data = candidates.map(c=>c.votes);
  voteChart.update();
}

/* ========== INITIAL LOAD ========== */
updateTable();
updateChart();
document.getElementById("votingStatus").innerText = votingOpen?"Open":"Closed";
</script>

</body>
</html>
