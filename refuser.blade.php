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
 .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.show {
    display: block;
} 
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
 
 .dropdown-content a:hover {
    background-color: #ddd;
}

 	</style>

 </head>
 </html>

<body> 
	 
     <div class="container">
	<h2 style="margin-top: 25px;"> REFERENCE USER </h2>

<div class="row"> 
	<div class="col-3">
      <div class="dropdown"> Show
    <button class="dropbtn" onclick="myFunction()">10 
      <i class="fa fa-caret-down"></i>
    </button> entries
    <div class="dropdown-content" id="myDropdown">
      <a href="#"> 1</a>
      <a href="#"> 2</a>
      <a href="#"> 3</a> 
      <a href="#">4</a>
      <a href="#" > 5 </a>
      <a href="#">6</a>
    </div>
  </div>
</div>

  <div class="col-sm-4 offset-sm-5 ">
    <div class="input-group">
    	<label for="example-text-input" class="col-3 col-form-label">Search</label> <input type="text" class="form-control" placeholder="...">
    </div>
</div>
</div>
  <br>





<table class="table table-bordered table-hover table-striped table-sm">
  
  <thead thead-light>
    <tr>
      <th scope="col"> ID# </th>
      <th scope="col"> Register Date  <i class="fas fa-calendar-alt"></i> </th>
      <th scope="col">User Name <i class="fas fa-user"></i></th>
      <th scope="col">User Email <i class="fas fa-envelope"></i></th>
      <th scope="col">User Phone <i class="fas fa-phone"></i></th> 
      <th scope="col"> Status <i class="fas fa-toggle-on"></i></th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" id="1">1</th>
      <td>25-Febrauary-2018  07:42 PM </td>
      <td>adaam</td>
       <td> adam9034@gmail.com </td>
       <td> 021-8587364e7 </td>
       <td> <button class="btn btn-sm btn-success"  role="button" aria-pressed="true"> <i class="fas fa-check"></i>Active  </button> 

    </tr>
    <tr>
      <th scope="row" id="2">2</th>
      <td>25-Febrauary-2018  07:42 PM </td>
      <td>adaam</td>
       <td> adam9034@gmail.com </td>
       <td> 021-8587364e7 </td>
       <td> <button class="btn btn-sm btn-success"  role="button" aria-pressed="true"> <i class="fas fa-check"></i> Active  </button>
    </tr>
    <tr>
    	 <th scope="row" id="3">3</th>
      <td>25-Febrauary-2018  07:42 PM </td>
      <td>adaam</td>
       <td> adam9034@gmail.com </td>
       <td> 021-8587364e7 </td>
       <td> <button class="btn btn-sm btn-success"  role="button" aria-pressed="true"> <i class="fas fa-check"></i> Active  </button>
          </tr>

        <tr> 
        	<th scope="row" id="4">4</th>
      <td>25-Febrauary-2018  07:42 PM </td>
      <td>adaam</td>
       <td> adam9034@gmail.com </td>
       <td> 021-8587364e7 </td>
       <td> <button class="btn btn-sm btn-success"  role="button" aria-pressed="true"> <i class="fas fa-check"></i> Active  </button> </td>
   </tr>  

     <tr> 
        	<th scope="row" id="5">5</th>
      <td>25-Febrauary-2018  07:42 PM </td>
      <td>adaam</td>
       <td> adam9034@gmail.com </td>
       <td> 021-8587364e7 </td>
       <td> <button class="btn btn-sm btn-success"  role="button" aria-pressed="true"> <i class="fas fa-check"></i> Active  </button> </td>
   </tr>
      
  </tbody>
</table> 
 
 Showing 1 to 5 of 5 Entries
 <div class="btn-group d-flex justify-content-end" role="group" aria-label="Basic example"> 
  <button type="button" class="btn btn-secondary">Previous</button>
  <button type="button" class="btn btn-sm btn-dark">1</button>
  <button type="button" class="btn btn-secondary">Next</button>
</div>

</div> 
 
 <script type="text/javascript">
 	
 	function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
 </script>

</body>


  </html>
