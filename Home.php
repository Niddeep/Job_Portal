<?php include('Config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .jobs{
            padding: 58px;
            box-shadow: 10px 10px 8px 10px #888888;
           
        }
        .main{
            background-image:url("./2.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height : 70vh;
          
        }
        .main .container{
            padding:90px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Career</title>
</head>
<body>
<div>
    <div class="main">
    <div class="container">
                    <h1 ><b>Job Portal</b></h1>
                    <p ><b>Best Jobs Available Matching Your Skills</b></p>
                </div>
    </div>
        <div class="col-12">
        <!--  <div class="item_img">
                    <img src="2.jpg">
                </div>-->
             <!--   <div class="container">
                    <h1 class="display-4"><b>Job Portal</b></h1>
                    <p class="lead"><b>Best Jobs Available Matching Your Skills</b></p>
                </div>-->
            <div>
        </div>
    </div>
    <div class="row">
        <?php
            $sql="SELECT * FROM jobs";
            $result=mysqli_query($conn,$sql);
            if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
                    echo'
                    <div class="col-md-4">
                        <div class="jobs">
                            <h3 >'.$rows['cname'].'</h3>
                            <h4  ><b>Positon: </b>'.$rows['position'].'</h4>
                            <p style="color: black; "><b>Job Description: </b>'.$rows['jdesc'].'</p>
                            <p style="color: black; "><b>Skills Required: </b>'.$rows['skills'].'</p>
                            <p style="color: black; "><b>CTC: </b>'.$rows['CTC'].'</p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
                            Apply Now
                            </button>
                        </div>
                    </div>';
                }
            }
        ?>
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apply For Jobs</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year">
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Apply</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>