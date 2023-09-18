<!DOCTYPE html>
<html>
<head>

    <title>HYGEAS_HOTEL</title>
    <meta charset="utf-8" />
	<?php 
        session_start();
        
  	?>
    <link rel="stylesheet" href="book.css">
    <link rel="icon" type="image/x-icon" href="/home/favicon.ico">
    <link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />
	
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<?php
      if(!(isset($_SESSION['user_login']) && !empty($_SESSION['user_login']))){
          header("Location: ../loginuser/Login.php");
		  exit();
      }
    ?>
</head>
<body>
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#">HYGEAS</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
				<li><a href="../">Home</a></li>
                    <li><a href="../room/room.php">Rooms</a>
                    <li><a href="../ballroom/ballroom.php">Ballroom</a>
                    <li><a href="../seminar/seminar.php">Seminar</a>
                    <li><a href="../book/book.php">Booking</a></li>
                    <?php 
                
                      if(isset($_SESSION['user_login']) && !empty($_SESSION['user_login'])){
                          echo "<li>";
                          echo '<a href="../logout.php">';
                          echo $_SESSION['user_login'];
                          echo "</a>";
                          echo "</li>";
                      }
                      else{
                          echo "<li><a href='../loginuser/Login.php'>Login</a></li>";
                      
                      }
                  ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <div style="height: 50px">
    </div> -->
	<div id="select-book">
		<div class="bg-select"></div>
		<h1>Choose your booking</h1>
		<select class="form-controlbook" required>
			<option value="room" >Room</option>
			<option value="ballroom" >Ballroom</option>
			<option value="seminar" >Seminar</option>
		</select>
	</div>
    <div id="room" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>MAKE&nbsp;&nbsp;A BOOKING</h2>
								<p></p>
							</div>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
										<input class="form-controlday" type="date" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check Out&nbsp;&nbsp;&nbsp;</span>
										<input class="form-controlday" type="date" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Adults&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
										<select class="form-controlchild">
											<option>1</option>
											<option>2</option>
											<option>3</option>
                                            <option>4</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Children&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
										<select class="form-controlchild">
											<option>0</option>
											<option>1</option>
											<option>2</option>
                                            <option>3</option>
                                            <option>4</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Room Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
								<select class="form-controlroom" required>
									<option value="" selected hidden>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select room type</option>
									<option>Deluxe Double Room (1 to 2 People)</option>
									<option>Deluxe Twin Room (1 to 4 People)</option>
									<option>Pool Villa (1 to 2 People)</option>
								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Check availability</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="ballroom" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>MAKE&nbsp;&nbsp;A BOOKING</h2>
								<p></p>
							</div>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
										<input class="form-controlday" type="date" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check Out&nbsp;&nbsp;&nbsp;</span>
										<input class="form-controlday" type="date" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Adults&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
										<select class="form-controlchild">
											<option>1</option>
											<option>2</option>
											<option>3</option>
                                            <option>4</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Children&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
										<select class="form-controlchild">
											<option>0</option>
											<option>1</option>
											<option>2</option>
                                            <option>3</option>
                                            <option>4</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Check availability</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="seminar" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>MAKE&nbsp;&nbsp;A BOOKING</h2>
								<p></p>
							</div>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
										<input class="form-controlday" type="date" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check Out&nbsp;&nbsp;&nbsp;</span>
										<input class="form-controlday" type="date" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Adults&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
										<select class="form-controlchild">
											<option>1</option>
											<option>2</option>
											<option>3</option>
                                            <option>4</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Children&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
										<select class="form-controlchild">
											<option>0</option>
											<option>1</option>
											<option>2</option>
                                            <option>3</option>
                                            <option>4</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Check availability</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="book.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
		$(function() {
			$('.form-controlbook').change(function(){
				// $('#').hide();
				if($(this).val() == 'room'){
					$('#ballroom').hide();
					$('#seminar').hide();
					$('#' + $(this).val()).show();
				}
				else if($(this).val() == 'ballroom'){
					$('#room').hide();
					$('#seminar').hide();
					$('#' + $(this).val()).show();
				}
				else if($(this).val() == 'seminar'){
					$('#room').hide();
					$('#ballroom').hide();
					$('#' + $(this).val()).show();
				}
			});
		});
    </script>
</body>
</html>