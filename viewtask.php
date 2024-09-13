<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
         #home{
            font-size: 20px;
            width: 100%;
        }
        #home:hover{
            background-color: orange;
        }
        #total{
            font-size: 20px;
            width: 100%;
        }
        #total:hover{
            background-color: orange;
        }
        #Pending{
            font-size: 20px;
            width: 100%;
        }
        #Pending:hover{
            background-color: yellow;
        }
        #Completed{
            font-size: 20px;
            width: 100%;
        }
        #Completed:hover{
            background-color: green; 
        }
        #Overdue{
            font-size: 20px;
            width: 100%;
        }
        #Overdue:hover{
            background-color: red;
        }
        .card-title{
            text-align: center;
        }
        .card{
            height:200px;
            width: auto;
            box-shadow: 4px 4px 0px 4px;
            transition: ease 1s;
        }

        .card:hover{
            transform: scale(1.1);
            z-index: 1;
            transition: ease 1s;
        }
        .nav-link{
            text-align: center;
        }
        .nav-link:hover{
            color: white;
            background-color: grey;
            border-radius: 10px;
            transition: ease 1s;
            
        }
    </style>
</head>
<body>
    <div class="row">
    <div class="col-10"><h1>Dashboard</h1></div>
    <div class="col-1"><a class="nav-link" href="admin.php"><img width="50" height="50" src="https://img.icons8.com/glyph-neue/64/user-settings.png" alt="user-settings"/></a></div>
    </div>
    
   
<button class="btn btn-info" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  Open Menu
</button>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">MENU</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <a class="btn" id="home" href="index.html">Home</a> <br>
    <a class="btn" id="Pending" href="pending.php">Pending</a> <br>
    <a class="btn mt-2" id="Completed" href="completed.php">Completed</a> <br>
    <a class="btn mt-2" id="Overdue" href="overdue.php">Overdue/Missing/Not completed</a>  
     
  </div>
</div>
<div class="row">
    <div class="col-lg-3">
    <div class="card mt-3" id="total">
    <div class="card-title">Total task</div>
        <div class="card-body">

        </div>
</div>
    </div>
    <div class="col-lg-3">
    <div class="card mt-3" id="Completed">
    <div class="card-title">Total Completed task</div>
        <div class="card-body">

        </div>
</div>
    </div>
    <div class="col-lg-3">
    <div class="card mt-3" id="Pending">
    <div class="card-title">Total Pending task</div>
        <div class="card-body">

        </div>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="card mt-3" id="Overdue">
    <div class="card-title">Total Overdue task</div>
        <div class="card-body">

        </div>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
    <div class="card mt-3" id="total">
    <div class="card-title">Today task</div>
        <div class="card-body">

        </div>
</div>
    </div>
    <div class="col-lg-3">
    <div class="card mt-3" id="Completed">
    <div class="card-title">Today Completed task</div>
        <div class="card-body">

        </div>
</div>
    </div>
    <div class="col-lg-3">
    <div class="card mt-3" id="Pending">
    <div class="card-title">Today Pending task</div>
        <div class="card-body">

        </div>
    </div>
    </div>
  
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>