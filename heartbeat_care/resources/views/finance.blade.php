<!DOCTYPE html>
<html lang="en">

<head>
  <title>Patient Finance Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 450px
    }

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }

      .row.content {
        height: auto;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">HeartBeat Care</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        
        <ul class="nav navbar-nav navbar-right">
          <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <ul class="nav nav-pills nav-stacked">
        <li><a href="/newpatient">New Patient</a></li>
          <li><a href="/viewpatient">View Patient</a></li>
          <li class="active"><a href="/visitors">Daily Visitors</a></li>
          <ul>
          <li><a href="/newvisitor">Add New Visitor</a></li>
          <li><a href="/visitors">View All Visitors</a></li>
          </ul>
          
        </ul><br>
      </div>
      <div class="col-sm-8 text-left">
      <h2>Hospital Visitors History</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Full Name</th>
              <th>Reason</th>
              
            </tr>
          </thead>
          @foreach($visitors as $visitor)
          <tbody>
            <tr>
              <td>{{ $visitor->v_name }}</td>
              <td>{{ $visitor->reason }}</td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
      <div class="col-sm-2 sidenav">
        <div class="well">
        
        </div>
        <div class="well">
        
        </div>
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">
    <p>HeartBeat Care RMS Prototype</p>
  </footer>

</body>

</html>