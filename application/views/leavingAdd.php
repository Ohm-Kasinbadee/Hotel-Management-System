<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
	<meta charset="UTF-8" />
	<title>BCORE Admin Dashboard Template | Data Tables</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
	<!-- GLOBAL STYLES -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/MoneAdmin.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/Font-Awesome/css/font-awesome.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/form-elements.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">

	
	<!--END GLOBAL STYLES -->

	<!-- PAGE LEVEL STYLES -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/validationengine/css/validationEngine.jquery.css')?>" />
	<link href="<?php echo base_url('assets/plugins/dataTables/dataTables.bootstrap.css')?>" rel="stylesheet" />
	<!-- END PAGE LEVEL  STYLES -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body >

	<!-- MAIN WRAPPER -->
	<div id="wrap" >

		<!--PAGE CONTENT -->
		<div>

			<div class="inner">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2> ฟอร์มการลา </h2>
					</div>
				</div>
				<hr />

				<!-- ************************************ เขียนโปรแกรม ************************************ -->
				<div class="row">
					</header>
					<div id="collapseOne" class="accordion-body collapse in body">
						<form action="<?php echo base_url('index.php/leavingAdd_controller/getdataemp')?>" class="form-horizontal" id="block-validate"
						method="post">

							<div class="form-group">
								<label class="control-label col-lg-4">ID พนักงาน :</label>
								<div class="col-lg-5">
									<select class="form-control" name="EMP_ID">
										<?php if($idemployee != null) 
                  				foreach($idemployee as $key => $row) :?>
										<option value="<?php echo $row['EMP_ID'] ?>">
											<?php echo $row['EMP_ID'] ?> </option>
										<?php endforeach ?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">ประเภทการลา :</label>
								<div class="col-lg-5">
									<select class="form-control" id="TYL_NAME" name="TYL_NAME" required>
										<option value="ลาป่วย">ลาป่วย</option>
										<option value="ลากิจ">ลากิจ</option>
										<option value="ลาพักร้อน">ลาพักร้อน</option>
										<option value="ลาคลอด">ลาคลอด</option>
									</select>
								</div>
								</label>
							</div>

                            <div class="form-group">
								<label class="control-label col-lg-4">ตั้งแต่วันที่ :</label>
								<div class="col-lg-5">
									<input type="date" id="LEA_DATESTART" name="LEA_DATESTART" class="form-control" required />
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-4">ถึงวันที่ :</label>
								<div class="col-lg-5">
									<input type="date" id="LEA_DATEEND" name="LEA_DATEEND" class="form-control" required />
								</div>
							</div>

                            <div class="form-group ">
								<label class="control-label col-lg-4">หมายเหตุ :</label>
								<div class="col-lg-5">
									<textarea class="form-control" rows="6" name="LEA_ETC" id="LEA_ETC"  required></textarea>
								</div>
							</div>


					<div class="form-actions no-margin-bottom" style="text-align:center;">	
                        <input type="submit" value="ยืนยัน" class="btn btn-primary btn-lg" />
						<a href="<?php echo base_url('index.php/leaving_controller')?>" class="btn btn-danger btn-lg" >ยกเลิก</a>
		

					</div>
					</form>
				</div>
			</div>

			<!-- ************************************ เขียนโปรแกรม ************************************ -->
		</div>
	</div>
	</div>
	<!--END PAGE CONTENT -->

	</div>

	<!--END MAIN WRAPPER -->

	<!-- Modal -->
	<script>
		$('#modal-submit').click(function () {
			$('#block-validate').submit();
		});

		</script>


	<!-- End Modal  -->

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
        $(function () { formValidation(); });
        </script>
	<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->

</html>
