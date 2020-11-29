<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My MarkSheet Generator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
</head>
<body>

<div class="container-fluid p-0">
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Welcome to Marksheet Calculator</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </nav>
</div>
    <br>
    <div class="container">
    <h3 class="text-center"> 
        You can calculate your Marks and get marksheet table
    </h3>
    <div class="text-center">
        <small>Please Enter your respective marks</small>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 m-auto p-2" style=" background-color:#d4d4d4;">
            <form action="" method="get">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">English</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name = "txteng" placeholder="English">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Math</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name = "txtmath" placeholder="Math">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Science</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name = "txtscience" placeholder="Science">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nepali</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name = "txtnepali" placeholder="Nepali">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Computer</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name = "txtcomputer" placeholder="Computer">
                </div>
            </div>
            <input type="submit" name="submit" value="Calculate" class="btn btn-primary btn-block" >
        
            </form>
        </div>
    </div>

    </div>
  

  <?php
  
  if(isset($_GET['submit'])){
      $eng = $_GET['txteng'];
      $math = $_GET['txtmath'];
      $science = $_GET['txtscience'];
      $nepali = $_GET['txtnepali'];
      $computer = $_GET['txtcomputer'];

      $obtmarks = $eng+$math+$science+$nepali+$computer;
    
      $totalmarks = 500;
      $grade = $obtmarks/$totalmarks*100;

    if($grade >= 80){
        $div = "Distinction";
    }
    elseif($grade >= 60 and $grade <= 79){
        $div = "First Division";
    }
    elseif($grade >= 50 and $grade <= 59){
        $div = "Second Division";
    }
    elseif($grade >= 32 and $grade <= 49){
        $div = "Third Division";
    }
    else{
        $div = "Very Low";
    }
    if ($eng < 32 or $math < 32 or $science < 32 or $nepali <32 or $computer <32){
        $sum = "Fail";

    }
    else{
        $sum = "Pass";
    }
    echo '
    <div class="container showresult">
      <h3 class="text-center">
            Here is your Mark Sheet
      </h3>
    <div class="row">
    <div class="col-md-6 col-sm-12 m-auto">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Total Marks</th>
      <th scope="col">Pass Marks</th>
      <th scope="col">Obtained Marks</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>English</td>
      <td>100</td>
      <td>32</td>
      <td>'.$eng.'</td>
 
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Math</td>
      <td>100</td>
      <td>32</td>
      <td>'.$math.'</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Nepali</td>
      <td>100</td>
      <td>32</td>
      <td>'.$nepali.'</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Science</td>
      <td>100</td>
      <td>32</td>
      <td>'.$science.'</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Computer</td>
      <td>100</td>
      <td>32</td>
      <td> '.$computer.'</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td colspan="3">Total Marks</td>
      <td><b>'.$obtmarks.'</b></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td colspan="3">Divison</td>
      <td><b>'.$div.'</b></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td colspan="3">Condition</td>
      <td><b>'.$sum.'</b></td>
    </tr>
  </tbody>
</table>
<br>

</div>

</div>

</div>';

  }
  
  ?>
<br>
<div class="container-fluid p-0">
<div class="card text-center">
  <div class="card-footer">
    Design and Developed by Monika Shahi Thakuri
  </div>
</div>
</div>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
</body>
</html>