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
   legend {
   background: grey;
    
   font-weight: bold; 
   }
   form {
    border: 1px solid;

   } 

   label {

    font-weight: bold;
   } 

   .h5 {

    font-weight: 100;

   }

 .onoffswitch4 {
    position: relative; width: 90px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}

.onoffswitch4-checkbox {
    display: none;
}

.onoffswitch4-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #27A1CA; border-radius: 0px;
}

.onoffswitch4-inner {
    display: block; width: 200%; margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}

.onoffswitch4-inner:before, .onoffswitch4-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 26px;
    font-size: 24px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
    border: 2px solid transparent;
    background-clip: padding-box;
}

.onoffswitch4-inner:before {
    content: "ACTIVE";
    padding-left: 100px;
    background-color: #FFFFFF; color: #27A1CA;
}

.onoffswitch4-inner:after {
    content: "NOT ACTIVE";
    padding-right: 100px;
    background-color: #FFFFFF; color: red;
    text-align: right;
}

.onoffswitch4-switch {
    display: block; width: 38px; margin-top: 24px; height: 43px;
    background: #27A1CA;
    position: absolute; top: 0; bottom: 0; right: 89%;
    -moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s; 
}

.onoffswitch4-checkbox:checked + .onoffswitch4-label .onoffswitch4-inner {
    margin-left: 0;
}

.onoffswitch4-checkbox:checked + .onoffswitch4-label .onoffswitch4-switch {
    right: 0px; 
}

 .onoffswitch5 {
    position: relative; width: 90px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}

.onoffswitch5-checkbox {
    display: none;
}

.onoffswitch5-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #27A1CA; border-radius: 0px;
}

.onoffswitch5-inner {
    display: block; width: 200%; margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}

.onoffswitch5-inner:before, .onoffswitch5-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 26px;
    font-size: 24px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
    border: 2px solid transparent;
    background-clip: padding-box;
}

.onoffswitch5-inner:before {
    content: "VERIFIED";
    padding-left: 100px;
    background-color: #FFFFFF; color: #27A1CA;
}

.onoffswitch5-inner:after {
    content: "NOT VERIFIED";
    padding-right: 100px;
    background-color: #FFFFFF; color: red;
    text-align: right;
}

.onoffswitch5-switch {
    display: block; width: 38px; margin-top: 24px; height: 43px;
    background: #27A1CA;
    position: absolute; top: 0; bottom: 0; right: 89%;
    -moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s; 
}

.onoffswitch5-checkbox:checked + .onoffswitch5-label .onoffswitch5-inner {
    margin-left: 0;
}

.onoffswitch5-checkbox:checked + .onoffswitch5-label .onoffswitch5-switch {
    right: 0px; 
}

 	</style>

 </head>
 </html>

<body> 
	 
     <div class="container">
	<h2 style="margin-top: 25px;"> All BLOCKED USER </h2>

  <br>





<table class="table table-bordered table-hover table-striped table-sm">
  
  <thead thead-light>
    <tr>
      <th scope="col"> ID# </th>
      <th scope="col"> Register At  <i class="fas fa-calendar-alt "> </i> </th>
      <th scope="col">Name <i class="fas fa-user"></i></th>
      <th scope="col">Email <i class="fas fa-envelope"></i></th>
      <th scope="col">Phone <i class="fas fa-phone"></i></th>
      <th scope="col">Balance <i class="fas fa-balance-scale"></th> 
      <th scope="col"> Action <i class="fas fa-toggle-on"></i></th> 
    </tr>
  </thead>
  <tbody>  
    <tr>
      <th scope="row" id="1">1</th>
      <td>25-Febrauary-2018  07:42 PM </td> 
      <td>adaam</td>
       <td> adam9034@gmail.com </td>
       <td> 021-8587364e7 </td>                              
        <td> 0-USD </td>
       <td> <button class="btn btn-sm btn-success"  role="button" aria-pressed="true"> <i class="fas fa-unlock-alt"></i> Unblock User  </button> 
        <button class="btn btn-sm btn-info  "  role="button" aria-pressed="true" data-toggle="modal" data-target="#myModal"> <i class="fas fa-eye"></i> View Details </button>

    </tr>
    <tr>
      <th scope="row" id="2">2</th>
      <td>25-Febrauary-2018  07:42 PM </td>
      <td>adaam</td>
       <td> adam9034@gmail.com </td>
       <td> 021-8587364e7 </td>
       <td> 0-USD </td>
       <td> <button class="btn btn-sm btn-success"  role="button" aria-pressed="true"> <i class="fas fa-unlock-alt"></i>
Unblock User </button> 
        <button class="btn btn-sm btn-info   "  role="button" aria-pressed="true"> <i class="fas fa-eye"></i> View Details</button>


    </tr>
    <tr>
    	 <th scope="row" id="3">3</th>
      <td>25-Febrauary-2018  07:42 PM </td>
      <td>adaam</td>
       <td> adam9034@gmail.com </td>
       <td> 021-8587364e7 </td>
       <td> 0-USD </td>
       <td> <button class="btn btn-sm btn-success"  role="button" aria-pressed="true"> <i class="fas fa-unlock-alt"></i> Unblock User  </button> 
        <button class="btn btn-sm btn-info   "  role="button" aria-pressed="true"> <i class="fas fa-eye"></i> View Details </button>

 </tr>

        <tr> 
        	<th scope="row" id="4">4</th>
      <td>25-Febrauary-2018  07:42 PM </td>
      <td>adaam</td>
       <td> adam9034@gmail.com </td>
       <td> 021-8587364e7 </td>
       <td> 0-USD </td>
       <td> <button class="btn btn-sm btn-success"  role="button" aria-pressed="true"> <i class="fas fa-unlock-alt"></i> Unblock User  </button> 
        <button class="btn btn-sm btn-info   "  role="button" aria-pressed="true"> <i class="fas fa-eye"></i> View Details </button>


   </tr>  

     <tr> 
        	<th scope="row" id="5">5</th>
      <td>25-Febrauary-2018  07:42 PM </td>
      <td>adaam</td>
       <td> adam9034@gmail.com </td>
       <td> 021-8587364e7 </td>
       <td> 0-USD </td>
       <td> <button class="btn btn-sm btn-success"  role="button" aria-pressed="true"> <i class="fas fa-unlock-alt"></i> Unblock User  </button> 
        <button class="btn btn-sm btn-info   "  role="button" aria-pressed="true"> <i class="fas fa-eye"></i> View Details </button>


   </tr>
      
  </tbody>
</table>   
 
        <br> <br>

  <form>            
    <fieldset> 
      <legend> <i class="fas fa-cog " style="margin-left: 10px;" ></i> UPDATE PROFILE </legend> </fieldset>

  <div class="form-row " style="margin-top: 20px;  margin-left: 10px; margin-right: 10px;">
    <div class="form-group col-sm-4 ">
      <label for="inputEmail4">Name</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" >
    </div>
    <div class="form-group col-sm-4">
      <label for="inputPassword4">Email</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-sm-4 ">
      <label for="inputPassword4">Phone</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Phone">
    </div>
  </div>


 

 
  <div class="form-row" style="margin-left: 10px; margin-right: 10px; margin-top: 20px;">
    <div class="form-group col-sm-4">
      <label for="inputEmail4">Status</label>
         <input type="checkbox" name="onoffswitch4" class="onoffswitch4-checkbox" id="myonoffswitch4" checked>

     <label class="onoffswitch4-label" for="myonoffswitch4">
        <span class="onoffswitch4-inner"></span>
        <span class="onoffswitch4-switch"></span>
    </label>
    </div>

    <div class="form-group col-sm-4">
      <label for="inputPassword4">Email Verification</label>
      <input type="checkbox" name="onoffswitch5" class="onoffswitch5-checkbox" id="myonoffswitch5" checked>

     <label class="onoffswitch5-label" for="myonoffswitch5">
        <span class="onoffswitch5-inner"></span>
        <span class="onoffswitch5-switch"></span>
    </label>

    </div>
    <div class="form-group col-sm-4">
      <label for="inputPassword6">Phone Verification</label>
       <input type="checkbox" name="onoffswitch5" class="onoffswitch5-checkbox" id="myonoffswitch6" checked>

     <label class="onoffswitch5-label" for="myonoffswitch6">
        <span class="onoffswitch5-inner"></span>
        <span class="onoffswitch5-switch"></span>
    </label>

    </div>
  </div>
    
    <button type="button" class="btn btn-primary btn-lg btn-block" style=" margin-top: 20px; margin-bottom: 10px;"> UPDATE  </button>
</form>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title" id="myModalLabel"> <i class="text-muted fas fa-eye"></i> <strong>02051</strong> Name </h4>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="text-danger fas fa-times"></i></button>
                    
                  </div>
                  <div class="modal-body">
                  
                    <table class="pull-left col-md-8 ">
                         <tbody>
                             <tr>
                                 <td class="h5"><strong>ID#</strong></td>
                                 <td> </td> <td> </td>
                                 <td class="h6">02051</td>
                             </tr>
                             
                             <tr>
                                 <td class="h5"><strong>Name</strong></td>
                                 <td> </td>  

                                 <td> </td> 
                                 <td class="h6">Adaam</td>
                             </tr>
                             
                             <tr>
                                 <td class="h5"><strong>Email</strong></td>
                                 <td> </td> <td> </td> 
                                 <td class="h6">adam9034@gmail.com  </td>
                             </tr>
                             
                             <tr>
                                 <td class="h5"><strong>Phone</strong></td>
                                 <td> </td> <td> </td> 
                                 <td class="h6">021-8587364e7</td>
                             </tr>
                             
                             <tr>
                                 <td class="h5"><strong>Balance</strong></td>
                                 <td> </td> <td> </td> 
                                 <td class="h6">0-USD</td>
                             </tr>
                             
                             <tr>
                                 <td class="h5"><strong>Status</strong></td>
                                 <td> </td> <td> </td> 
                                 <td class="h6">Blocked</td>
                             </tr>  

                                                         

                              
                            


                         </tbody>
                    </table>
                             <br>
                           <div> 

                           <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-controls="collapseOne"> 
          More Info 
        </button>  
          <div id="collapseOne" class="collapse " aria-labelledby="headingOne">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad 
           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad </div>




              </div>
            </div>
            </div>

</div>  

<script type="text/javascript"> 
   
    function() {
   $('tbody > tr').on('click', function(event) {
        event.preventDefault();
        $('#myModal').modal('show');
    })
    
    $('.btn-mais-info').on('click', function(event) {
        $( '.open_info' ).toggleClass( "hide" );
    }) 

  });
</script>
 

</body>


  </html>
