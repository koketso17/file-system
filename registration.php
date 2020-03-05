<!DOCTYPE html>
<html>
	<head>
		<?php include 'header.php';?>

	</head>
	<body>

		<div class="container-fluid bg-color">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					<section>
						<div class="outer-box">
							<div class="header-login">
								<div class="row no-margin">
								</div>
							</div>
							<div class="bottom-login">
								<div class="student-login login-bottom-box">
									<center><h2>Registration</h2></center>
									<form>
										<p>
											First Name(s)
										</p>
										<input type="text" class="form-control login-textbox" name="student-usn-forgot" id="student-id-forgot" />
                                        <p>
											Last Name
										</p>
										<input type="text" class="form-control login-textbox" name="student-usn-forgot" id="student-id-forgot" />
                                        <p>
											Staff Number
										</p>
										<input type="text" class="form-control login-textbox" name="student-usn-forgot" id="student-id-forgot" />
                                        <p>
											Faculty
										</p>
                                        <div class="input-group" name="student-usn-forgot" id="student-id-forgot">

                                            <select name="class">
                                                <option disabled="disabled" selected="selected">Faculty</option>
                                                <option>Class 1</option>
                                                <option>Class 2</option>
                                                <option>Class 3</option>
                                            </select>
                                    </div>
                                        <p>
											Gender
										</p>
                                        <div class="input-group" name="student-usn-forgot" id="student-id-forgot">

                                            <select name="class">
                                                <option disabled="disabled" selected="selected">Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                    </div>
                                        <p>
											USN
										</p>
                                        <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
										<p>
											Date of birth
										</p>
										<input type="text" class="form-control login-textbox" name="student-date-forgot" id="student-dob"/>
										<input type="submit" class=" btn btn-color" id="student-forgot-submit"/>
									</form>
									<div class="spacer">
									</div>
								</div>
								
								
								</div>
							</div>
						</div>
			</div>

				</section>
			</div>

		</div>

	</body>
	<script src="js/bootstrap.min.js"></script>

</html>
