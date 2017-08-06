<?php
include_once("php_includes/check_login_status.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="css/event_register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="mechanism.php">
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Event Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="event_name" id="event_name"  placeholder="Enter your Event Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Event Date</label>
							<div class="cols-sm-10">
								<div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user " aria-hidden="true"></i></span>
                  <input type="date" name="event_date" id="event_date" >
                </div>
              </div>
						</div>
            <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Event Start Time</label>
							<div class="cols-sm-10">
								<div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user " aria-hidden="true"></i></span>

                  <input type="time" name="event_time"  id="event_time" >
                </div>
              </div>
						</div>

						<div class="form-group">
							<label for="fund_gen" class="cols-sm-2 control-label">Initial Fund Generated</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-inr fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="fund_gen" id="fund_gen"  placeholder="Enter Fund "/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="vol_req" class="cols-sm-2 control-label">Total Volunteer Required</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="vol_req" id="vol_req"  placeholder="Volunteers Required"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Min Profile Score Range (20 - 100)</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="min_score" id="min_score"  placeholder="Expected min profile score of volunteers"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register Event</button>
						</div>

					</form>
				</div>
			</div>
		</div>

	</body>
</html>
