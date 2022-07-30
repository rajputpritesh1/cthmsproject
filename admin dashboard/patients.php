<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../stylesheet/patient-dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <title>Admin Dashboard | Patient </title>
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
          <a href="./../admin dashboard/employees.php">
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
          <a href="./../admin dashboard/patients.php" class="active">
            <i class="fa-solid fa-bed-pulse"></i>
            <div class="title">Patient</div>
          </a>
        </li>
        <li>
          <a href="./../admin dashboard/appointment.php">
            <i class="fa-solid fa-calendar-check"></i>
            <div class="title">Appointments</div>
          </a>
        </li>
        <li>
          <a href="./../admin dashboard/reports.php">
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
          <a href="./../index.php">
            <i class="fa-solid fa-right-from-bracket"></i>
            <div class="title">Logout</div>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="top-bar">
        <div class="search">
          <span class="position">Admin Dashboard <i class="fa-solid fa-caret-right"></i> Patient</span>
        </div> 
        <i class="fas fa-bell"></i>
        <div class="user">
          <a href="./../admin dashboard/profile.php"><img src="./../Images/user.png" alt="profile-image"></a>
        </div>
      </div>
      <div class="add-btn">
        <h1>Patients List</h1>
        <a href="./../forms/add-patient.php"><i class="fa-solid fa-circle-plus"></i> Add Patient</a>
    </div> 
      <div class="tables">
        <div class="upcoming-appointments">
          <table class="appointments">
            <thead>
              <td>Sr.No.</td>
              <td>Name</td>
              <td>Age</td>
              <td>Email</td>
              <td>Mobile</td>
              <td>Action</td>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Pritesh Bhardwaj</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>02</td>
                <td>Minarul Hoque</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Arpan Mondal</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>04</td>
                <td>Pritesh Bhardwaj</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>05</td>
                <td>Pritesh Bhardwaj</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>06</td>
                <td>Minarul Hoque</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>07</td>
                <td>Arpan Mondal</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>08</td>
                <td>Pritesh Bhardwaj</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>09</td>
                <td>Pritesh Bhardwaj</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>Minarul Hoque</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>11</td>
                <td>Arpan Mondal</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>12</td>
                <td>Pritesh Bhardwaj</td>
                <td>18</td>
                <td>demo@gmail.com</td>
                <td>8544685939</td>
                <td>
                  <i class="fas fa-edit" title="Edit"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</body>

</html>