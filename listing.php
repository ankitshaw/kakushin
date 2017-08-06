<?php
/*
include_once("php_includes/check_login_status.php");

if($user_ok){

}
*/
?>

        <!DOCTYPE html >
        <html lang="en">

        <head>
          <title>Search NGO</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="utf-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="./css/bootstrap-social.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">




            <script>
                function changed(){
                    var state     = $("#state").val();
                    var district  = $("#district").val();
                    var sector    = $("#sector").val();
                    var name      = $("#name").val();
                    var unique_id = $("#unique_id").val();


                    /*
	                     $('.item_type:checked').each(function() {
                         item_t.push($(this).val());
                       });*/

                      console.log(state+district+sector+name+unique_id);
                       jQuery.ajax({
                          url: "ngo_provider.php",
                          type:"POST",
                          data : { state : state, district : district, sector : sector, name : name, unique_id : unique_id},
                          success: function(response){
                            jQuery('.latest-ads-grid-holder').html(response);
                          }
                       });
              }



            </script>

            <style>
              body{
                width: 100%;
              }
              .filele h3 small {
                  font-weight: 500;
                  color: #969696;
                }
              .quick_modal {
                  width:900px;
                }
              .lang label {
                    margin-right: 5px;
                }
              .lang label input {
                    margin-right: 5px;
              }
              .navbar,
              .navbar-default,
              .n1 {
                  margin-bottom: 0px !important;
              }
              @media screen and (max-width:600px){
                html,body {
          					width: 100%;
          					overflow-x: hidden;
          			}
              #filters{
              display: hidden;
              }
              .ad-box{
                align:center;
                margin-left: 14%;
              }
            }
            </style>
        </head>

        <body>


            <br id="br_filter">
            <button type="button" data-toggle="collapse" data-target="#filters" class="visible-xs visible-sm  collapsed btn btn-warning " style="margin-left:10px">
              <span class="glyphicon glyphicon-filter">&nbsp;Filters</span>
            </button>


      <div class="row" style="width:100%">
          <div style="width:97%; margin:0 1% 0 2%">
              <!-- filters -->
              <form id="list_form" method="POST" action="listing.php"  accept-charset="UTF-8">
                  <div class="col-sm-3 " style="background:linear-gradient(#f2f2f2, #d9d9d9)"  id="filters">
                      <div  style="margin:10px 10px 0px 0px">
                          <label >Sort NGO by State :</label>
                          <hr style="margin:0px;">
                          <select class="form-control" id="state" name="state"   onchange="changed();">
                              <?php include("php_includes/state_list.php");?>
                          </select>
                      </div>
                      <div style="margin:10px 10px 10px 0px;">
                          <label >District:</label>
                          <br>
                          <hr style="margin:0px;">
                          <select id="district" name="district" class="form-control" onchange="" onclick="changed(); emptyElement('status')">
                                <?php include("php_includes/district_list.php");?>
                          </select>
                      </div>
                      <div style="margin:10px 10px 0px 0px">
                          <label for="sel1" >Sector:</label>
                          <hr style="margin:0px;">
                          <select class="form-control" id="sector" name="sector"   onchange="changed();">
                              <?php include("php_includes/sector.php");?>
                          </select>
                      </div>
                      <div  class="subject" style="margin:10px 10px 10px 0px;">
                          <label for="sub">NGO Name:</label>
                          <br>
                          <hr style="margin:0px;">
                          <input id="name" name="name" class="form-control" onchange="" onblur="changed(); emptyElement('status')">

                      </div>
                      <div id="unique_id" class="subject" style="margin:10px 10px 10px 0px;">
                          <label for="sub">Unique ID:</label>
                          <br>
                          <hr style="margin:0px;">
                          <input id="unique_id" name="unique_id" class="form-control" onchange="" onblur="changed(); emptyElement('status')">

                      </div>

                      <!--
                      <div class="row filele" style="margin:10px 0px 0px 0px;">
                          <label style="margin:10px 0px 0px 0px;">NGO Type :</label>
                      </div>
                      <div class=" row" style="margin:0px 10px 0px 0px">
                              <div class="col-sm-3">
                              <div class="checkbox checkbox-danger ">
                                  <input type="checkbox" class="category" name="category[sell]" onclick="changed();" value="1">
                                  <label>Society</label>
                              </div>
                              </div>
                              <div class="col-sm-3">
                              <div class="checkbox checkbox-danger">
                                  <input type="checkbox" class="category" name="category[rent]" onclick="changed();" value="2">
                                  <label>Trust</label>
                              </div>
                              </div>
                      </div> -->







                    </form>
                    <br>

              </div>

              <div class="col-sm-9 " style="background:#f2f2f2;">
                  <br>
                  <!-- grid start -->
                  <div class="latest-ads-grid-holder " style="">


                      <!-- grid area which is retirved via AJAX -->


                  </div>
              </div>
                    </div>
                </div>
                <?php //include_once("quick_actions.php");?>
                <?php //include_once("footer.php");?>


                    <div id="login_signup" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content login/signup-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Login or Signup</h4> </div>
                                <div class="modal-body">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
                                        <li><a data-toggle="tab" href="#signup">Signup</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="login" class="tab-pane fade in active">
                                            <?php include_once("login.php");?>
                                        </div>
                                        <div id="signup" class="tab-pane fade">
                                            <?php include_once("signup.php");?>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

        </body>
