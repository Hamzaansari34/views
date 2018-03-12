<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Bootstrap 4 Register Form</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
     <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
</head>
<body>
<div class="container " style="margin-top: 25px;">
    <form class="form-horizontal" role="form" method="POST" action="/register">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <h2><i class="fa fa-plus"></i>  Add New Social</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 field-label-responsive">
                <label for="name">ID</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fas fa-user"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="John Doe" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 field-label-responsive">
                <label for="email">E-Mail Address</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                                
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 field-label-responsive">
                <label for="password">ICON</label>
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fas fa-repeat"></i></div>
                        <input type="icon" name="" class="form-control" id="icon-form"
                               placeholder="" required>
                    </div>
                </div>
            </div>
                  </div>
        <div class="row">
            <div class="col-md-2 field-label-responsive">
                <label for="password">LINK</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                             <i class="fas fa-link"></i>
                        </div>
                        <input type="text" name="" class="form-control"
                               id="link-confirm" placeholder="abc@yahoo.com" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 "></div>
            <div class="col-md-6 d-flex justify-content-end ">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Register</button>
            </div>
        </div>
    </form>
</div>
</body>