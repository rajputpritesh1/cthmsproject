<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../stylesheet/report-form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <title>Admin Dashboard | Reports </title>
</head>

<body>
  <div class="container" id="content">
    <div class="sidebar">
      <ul>
        <li>
          <a href="./../admin dashboard/admin_dashboard.php">
            <i class="fas fa-clinic-medical"></i>
            <div class="title">CT Hospital</div>
          </a>
        </li>
        <li>
          <a href="./../admin dashboard/admin_dashboard.php">
            <i class="fa-solid fa-house-medical"></i>
            <div class="title">Dashboard</div>
          </a>
        </li>
        <li>
          <a href="./../admin dashboard/employees.php" >
            <i class="fa-solid fa-hospital-user"></i>
            <div class="title">Employee</div>
          </a>
        </li>

        <li>
          <a href="./../admin dashboard/doctors.php" >
            <i class="fa-solid fa-user-doctor"></i>
            <div class="title">Doctors</div>
          </a>
        </li>
        <li>
          <a href="./../admin dashboard/patients.php">
            <i class="fa-solid fa-bed-pulse"></i>
            <div class="title">Patient</div>
          </a>
        </li>
        <li>
          <a href="./../admin dashboard/appointment.php" >
            <i class="fa-solid fa-calendar-check"></i>
            <div class="title">Appointments</div>
          </a>
        </li>
        <li>
          <a href="./../admin dashboard/reports.php" class="active">
            <i class="fa-solid fa-notes-medical"></i>
            <div class="title">Reports</div>
          </a>
        </li>
        <li>
          <a href="./../admin dashboard/ward.php">
            <i class="fa-solid fa-bed-pulse"></i></i>
            <div class="title">Ward</div>
          </a>
        </li>
        <li>
          <a href="./../admin dashboard/profile.php">
            <i class="fa-solid fa-user"></i>
            <div class="title">Profile</div>
          </a>
        </li>
        <li>
          <a href="./../logout.php">
            <i class="fa-solid fa-right-from-bracket"></i>
            <div class="title">Logout</div>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="top-bar">
        <div class="search">
          <span class="position">Admin Dashboard <i class="fa-solid fa-caret-right"></i> Reports <i class="fa-solid fa-caret-right"></i> Add Report</span>
        </div>
        <i class="fas fa-bell"></i>
        <div class="user">
          <a href="./../admin dashboard/profile.php"><img src="./../Images/user.png" alt="profile-image"></a>
        </div>
      </div>
      <div class="form-container">
        <h2>Add Report</h2>
        <div class="form">
          <div>
            <label>Appointment ID.
              <input type="text" required>
            </label>
          </div>
          
          <div>
            <label>Upload Report
              <input type="file" required>
            </label>
          </div>
          <div class="submit-btn">
            <a href="#">Submit</a>
           </div>

        </div>
        
      </div>
    </div>
  </div>
</body>

</html>