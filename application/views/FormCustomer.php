<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
	<meta charset="UTF-8" />
	<title>BCORE Admin Dashboard Template | Form Validations</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
	<!-- GLOBAL STYLES -->
	<!-- GLOBAL STYLES -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/MoneAdmin.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/Font-Awesome/css/font-awesome.css')?>" />
	<!--END GLOBAL STYLES -->

	<!-- PAGE LEVEL STYLES -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/validationengine/css/validationEngine.jquery.css')?>" />
	<!-- END PAGE LEVEL  STYLES -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<!-- MAIN WRAPPER -->
<div id="wrap">

	<!--PAGE CONTENT -->

	<div class="inner">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1>แบบฟอร์มกรอกข้อมูลลูกค้า </h1>
			</div>
		</div>
		<hr />

		<div class="row">
			</header>
			<div id="collapseOne" class="accordion-body collapse in body">
				<form action="<?php echo base_url('index.php/FormCustomer_controller/addcustomer')?>" class="form-horizontal" id="block-validate" method="post">

					<div class="form-group">
						<label class="control-label col-lg-4">รหัสบัตรประชาชน :</label>
						<div class="col-lg-3">
							<input type="text" id="id" name="id" class="form-control" maxlength="13"   />
						</div>
					
					</div>

					<div class="form-group">
						<label class="control-label col-lg-4">ชื่อ :</label>
						<div class="col-lg-2">
							<input type="text" id="Fname" name="fname" class="form-control" />
						</div>

						<label class="control-label col-lg-1">นามสกุล :</label>
						<div class="col-lg-2">
							<input type="text" id="required2" name="lname" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-lg-4">เบอร์โทร :</label>
						<div class="col-lg-2">
							<input type="text" id="required2" name="tel" class="form-control" maxlength="10" />
						</div>

						<label class="control-label col-lg-1">อีเมล :</label>
						<div class="col-lg-2">
							<input type="text" id="required2" name="email" class="form-control"  />
						</div>
					</div>

					<div class="form-actions no-margin-bottom" style="text-align:center;">
						<input  href="<?php echo base_url('index.php/FormCustomer_controller/addcustomer')?>" id="comment_submit" type="submit" value="ถัดไป" class="btn btn-primary btn-lg " />
						<a href="<?php echo base_url('index.php/checkin_controller')?>"  class="btn btn-danger btn-lg" >ยกเลิก</a>						
					</div>
				</form>
			</div>
		</div>
		<!--END PAGE CONTENT -->
	</div>
	<!--END MAIN WRAPPER -->

	<!-- FOOTER -->
	<div id="footer">
		<p>&copy; binarytheme &nbsp;2014 &nbsp;</p>
	</div>
	<!--END FOOTER -->


	<!-- GLOBAL SCRIPTS -->
	<script src="<?php echo base_url('assets/plugins/jquery-2.0.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js')?>"></script>
	<!-- END GLOBAL SCRIPTS -->

	<!-- PAGE LEVEL SCRIPTS -->

	<script src="<?php echo base_url('assets/plugins/validationengine/js/jquery.validationEngine.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/validationInit.js')?>"></script>
	<script>
		$(function () {
			formValidation();
		});

	</script>
	<!--END PAGE LEVEL SCRIPTS -->

	</body>
	<!-- END BODY -->

</html>

