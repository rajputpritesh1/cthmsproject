<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../stylesheet/dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <title>Admin Dashboard</title>
</head>

<body>
  <div class="container" id="content">
    <div class="sidebar">
      <ul>
        <li>
          <a href="admin dashboard\admin_dashboard.php">
            <i class="fas fa-clinic-medical"></i>
            <div class="title">CT Hospital</div>
          </a>
        </li>
        <li>
          <a href="./../admin dashboard/admin_dashboard.php" class="active">
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
          <a href="./../admin dashboard/doctors.php">
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
          <span class="position"><i class="fa-solid fa-caret-right"></i> Admin Dashboard</span>
        </div>
        <i class="fas fa-bell"></i>
        <div class="user">
          <a href="./../admin dashboard/profile.php"><img src="./../Images/user.png" alt="profile-image"></a>
        </div>
      </div>
      <div class="cards"> 
        <div class="card">
          <div class="card-content">
            <div class="number">3</div>
            <div class="card-name"><a href="./../admin dashboard/doctors.php">Doctors</a></div>
          </div>
          <div class="icon-box">
            <i class="fa-solid fa-user-doctor"></i>
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <div class="number">3000</div>
            <div class="card-name">Followers</div>
          </div>
          <div class="icon-box">
            <i class="fa-solid fa-user-group"></i>
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <div class="number">5</div>
            <div class="card-name">Posts</div>
          </div>
          <div class="icon-box">
            <i class="fa-solid fa-pager"></i>
          </div>
        </div>
        <div class="card">
          <div class="card-content">
            <div class="number">4500</div>
            <div class="card-name">Shares</div>
          </div>
          <div class="icon-box">
            <i class="fa-solid fa-paper-plane"></i>
          </div>
        </div>
      </div>
      <div class="tables">
        <div class="upcoming-appointments">
          <div class="heading">
            <h2>Upcoming Appointments</h2>
            <a href="./../admin dashboard/appointment.php" class="btn">View All</a>
          </div>
          <table class="appointments">
            <thead>
              <td>Name</td>
              <td>Appointment With</td>
              <td>Condition</td>
              <td>Actions</td>
            </thead>
            <tbody>
              <tr>
                <td>Liam Smith Doe</td>
                <td>Dr. Benjamin</td>
                <td>fracture</td>
                <td>
                  <i class="fa-solid fa-handshake" title="Take Up"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>Emma</td>
                <td>Dr. Noah</td>
                <td>depression</td>
                <td>
                  <i class="fa-solid fa-handshake" title="Take Up"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>Olivia Smith </td>
                <td>Dr. Liam</td>
                <td>arthritis</td>
                <td>
                  <i class="fa-solid fa-handshake" title="Take Up"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>Isabella Doe</td>
                <td>Dr. Noah</td>
                <td>flu</td>
                <td>
                  <i class="fa-solid fa-handshake" title="Take Up"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>Sophia Smith </td>
                <td>Dr. Olivia</td>
                <td>fracture</td>
                <td>
                  <i class="fa-solid fa-handshake" title="Take Up"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
              <tr>
                <td>Liam Smith Doe</td>
                <td>Dr. Benjamin</td>
                <td>fracture</td>
                <td>
                  <i class="fa-solid fa-handshake" title="Take Up"></i>
                  <i class="far fa-trash-alt" title="Delete"></i>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="doctor-visiting">
          <div class="heading">
            <h2>Doctors</h2>
            <a href="./../admin dashboard/doctors.php" class="btn">View All</a>
          </div>
          <table class="visiting">
            <thead>
              <td>Photo</td>
              <td>Name</td>
              <td>Dept.</td>
              <td>Detail</td>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="img-box-small">
                    <img src="./../Images/doctor.png" alt="">
                  </div>
                </td>
                <td>Benjamin</td>
                <td>Dept001</td>
                <td><i class="far fa-eye"></i></td>
              </tr>
              <tr>
                <td>
                  <div class="img-box-small">
                    <img src="./../Images/doctor.png" alt="">
                  </div>
                </td>
                <td>Liam</td>
                <td>Dept002</td>
                <td><i class="far fa-eye"></i></td>
              </tr>
              <tr>
                <td>
                  <div class="img-box-small">
                    <img src="./../Images/doctor.png" alt="">
                  </div>
                </td>
                <td>Noah</td>
                <td>Dept003</td>
                <td><i class="far fa-eye"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</body>

</html>