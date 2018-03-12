<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testing</title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
 <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
 <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


 <style type="text/css">
   
  .fa-facebook {
    color: #3b5998
}

.fa-twitter {
    color: #00aced
}
.fa-google-plus-g {
    color: #dd4b39
}

.fa-linkedin-in {
    color: #007bb6
}

 
 

 </style>
</head>

<body>  <br> 

<div class="container">

<h3 style="margin-left: -12px;"> MANAGE SOCIAL </h3> 
<div class="row justify-content-md-center""> 
<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr> <td colspan="5">
        <button type="button" class="btn btn-outline-primary"> <i class="fas fa-plus"></i>  Add New Social </button>  </td>

    </tr>
    

  </thead>
  <thead thead-light>
    <tr>
      <th scope="col"> ID </th>
      <th scope="col">Name</th>
      <th scope="col">Icon</th>
      <th scope="col">Link</th> 
      <th scope="col">Actions </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td> <a href="#" class="facebook"> <i class="fab fa-facebook " > </i>  </td>
      <td>@mdo</td>
            <td> <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalRegisterForm"> <i class="far fa-edit "></i>EDIT </a> 
              <button class="btn btn-danger"> <i class="far fa-trash-alt"></i> </i> Delete </button> </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td> <a href="#">  <i class="fab fa-twitter"> </i> </a> 
      <td>@fat</td>
            <td> <button class="btn btn-primary"  data-toggle="modal" data-target="#modalRegisterForm"> <i class="far fa-edit"></i>EDIT </button> 
              <button class="btn btn-danger"> <i class="far fa-trash-alt"></i> </i> Delete </button> </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>   <a href="# class="linkedin">    <i class="fab fa-linkedin-in"> </i> </td> </a>
            <td>@mdo</td>
            <td> <button class="btn btn-primary"  data-toggle="modal" data-target="#modalRegisterForm"> <i class="far fa-edit"></i>EDIT </button> 
              <button class="btn btn-danger"> <i class="far fa-trash-alt"></i> </i> Delete </button> </td>
    </tr>

        <tr>
      <th scope="row">4</th>
      <td>Larry the Bird</td>
      <td>   <a href="# class="linkedin">  <i class="fab fa-google-plus-g"></i> </td> </a>
            <td>@mdo</td>
            <td> <button class="btn btn-primary"  data-toggle="modal" data-target="#modalRegisterForm"> <i class="far fa-edit"></i>EDIT </button> 
              <button class="btn btn-danger"> <i class="far fa-trash-alt"></i> </i> Delete </button> </td>
    </tr>
  </tbody>
</table>


<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Edit Social <i class="far fa-edit "></i></h4> 
                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-3">
                       <label data-error="wrong" data-success="right" for="orangeForm-name">ID</label>
                    <i class="fas fa-user prefix grey-text " ></i>
                     
                    <input type="text" id="orangeForm-id" class="form-control validate">
                   
                </div>
                <div class="md-form mb-3">
                  <label data-error="wrong" data-success="right" for="orangeForm-email">Name</label>
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="text" id="orangeForm-name" class="form-control validate">
                    
                </div> 


                                <div class="md-form mb-3">
                  <label data-error="wrong" data-success="right" for="orangeForm-email">Icon</label>
                     <i class="fas fa-redo-alt"></i>
                    <input type="text" id="orangeForm-icon" class="form-control validate">
                    
                </div>

                <div class="md-form mb-3">
                  <label data-error="wrong" data-success="right" for="orangeForm-pass">Link</label>
                    <i class="fas fa-link"></i>

                    <input type="text" id="orangeForm-link" class="form-control validate">
                    
                </div> 



            </div>
            <div class="modal-footer d-flex justify-content-center" data-dismiss="modal">
                <button class="btn btn-primary">Done</button>
            </div>
        </div>
    </div>
</div>

</div>
</div> 



</body>
</html>
