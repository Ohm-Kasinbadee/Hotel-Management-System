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
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
						<h2> แก้ไขฟอร์มเวลเข้าทำงาน </h2>
					</div>
				</div>
				<hr />

				<!-- ************************************ เขียนโปรแกรม ************************************ -->
				<div class="row">
					</header>
					<div id="collapseOne" class="accordion-body collapse in body">
						<form action="<?php echo base_url('index.php/TimeTableUpdate_controller/updateemp')?>" class="form-horizontal" id="block-validate"
						method="post">
							<div class="form-group">
						<label class="control-label col-lg-4">ID :</label>
						<div class="col-lg-5">
							<label class="control-label col-lg-1"><?php echo $working[0]['EMP_ID'] ?></label>
						</div>
					</div>

							<div class="form-group">
								<label class="control-label col-lg-4">วันที่ :</label>
								<div class="col-lg-5">
									<input type="date" id="WORDATEWORK" name="WORDATEWORK" class="form-control"value="<?php echo $employee[0]['WOR_DATEWORK']?>" required />
                                    <input type="hidden" id="EMPID" name="EMPID" class="form-control"   value="<?php echo $employee[0]['EMP_ID'] ?>" required />
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-lg-4">เวลาเข้าทำงาน :</label>
								<div class="col-lg-5">
									<select class="form-control" id="WORTIMEWORK" name="WORTIMEWORK" required>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '00:00:00'){echo("selected");}?>>00.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '01:00:00'){echo("selected");}?>>01.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '02:00:00'){echo("selected");}?>>02.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '03:00:00'){echo("selected");}?>>03.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '04:00:00'){echo("selected");}?>>04.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '05:00:00'){echo("selected");}?>>05.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '06:00:00'){echo("selected");}?>>06.00 น.</option>
                                    <option <?php if($working[0]['WOR_TIMEWORK'] == '07:00:00'){echo("selected");}?>>07.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '08:00:00'){echo("selected");}?>>08.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '09:00:00'){echo("selected");}?>>09.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '10:00:00'){echo("selected");}?>>10.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '11:00:00'){echo("selected");}?>>11.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '12:00:00'){echo("selected");}?>>12.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '13:00:00'){echo("selected");}?>>13.00 น.</option>
                                    <option <?php if($working[0]['WOR_TIMEWORK'] == '14:00:00'){echo("selected");}?>>14.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '15:00:00'){echo("selected");}?>>15.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '16:00:00'){echo("selected");}?>>16.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '17:00:00'){echo("selected");}?>>17.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '18:00:00'){echo("selected");}?>>18.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '19:00:00'){echo("selected");}?>>19.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '20:00:00'){echo("selected");}?>>20.00 น.</option>
                                    <option <?php if($working[0]['WOR_TIMEWORK'] == '21:00:00'){echo("selected");}?>>21.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '22:00:00'){echo("selected");}?>>22.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '23:00:00'){echo("selected");}?>>23.00 น.</option>
									<option <?php if($working[0]['WOR_TIMEWORK'] == '24:00:00'){echo("selected");}?>>24.00 น.</option>
									</select>
								</div>
								</label>
							</div>

                            <div class="form-group">
								<label class="control-label col-lg-4">เวลาออกทำงาน :</label>
								<div class="col-lg-5">
									<select class="form-control" id="WORTIMEOUT" name="WORTIMEOUT" required>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '00:00:00'){echo("selected");}?>>00.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '01:00:00'){echo("selected");}?>>01.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '02:00:00'){echo("selected");}?>>02.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '03:00:00'){echo("selected");}?>>03.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '04:00:00'){echo("selected");}?>>04.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '05:00:00'){echo("selected");}?>>05.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '06:00:00'){echo("selected");}?>>06.00 น.</option>
                                    <option <?php if($employee[0]['WOR_TIMEOUT'] == '07:00:00'){echo("selected");}?>>07.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '08:00:00'){echo("selected");}?>>08.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '09:00:00'){echo("selected");}?>>09.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '10:00:00'){echo("selected");}?>>10.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '11:00:00'){echo("selected");}?>>11.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '12:00:00'){echo("selected");}?>>12.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '13:00:00'){echo("selected");}?>>13.00 น.</option>
                                    <option <?php if($employee[0]['WOR_TIMEOUT'] == '14:00:00'){echo("selected");}?>>14.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '15:00:00'){echo("selected");}?>>15.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '16:00:00'){echo("selected");}?>>16.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '17:00:00'){echo("selected");}?>>17.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '18:00:00'){echo("selected");}?>>18.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '19:00:00'){echo("selected");}?>>19.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '20:00:00'){echo("selected");}?>>20.00 น.</option>
                                    <option <?php if($employee[0]['WOR_TIMEOUT'] == '21:00:00'){echo("selected");}?>>21.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '22:00:00'){echo("selected");}?>>22.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '23:00:00'){echo("selected");}?>>23.00 น.</option>
									<option <?php if($employee[0]['WOR_TIMEOUT'] == '24:00:00'){echo("selected");}?>>24.00 น.</option>
									</select>
								</div>
								</label>
							</div>

                            <div class="form-group">
								<label class="control-label col-lg-4">จำนวนชั่วโมง :</label>
								<div class="col-lg-5">
									<select class="form-control" id="WORHOUR" name="WORHOUR" required>
									<option <?php if($employee[0]['WOR_HOUR'] == '1'){echo("selected");}?>>1 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '2'){echo("selected");}?>>2 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '3'){echo("selected");}?>>3 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '4'){echo("selected");}?>>4 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '5'){echo("selected");}?>>5 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '6'){echo("selected");}?>>6 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '7'){echo("selected");}?>>7 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '8'){echo("selected");}?>>8 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '9'){echo("selected");}?>>9 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '10'){echo("selected");}?>>10 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '11'){echo("selected");}?>>11 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '12'){echo("selected");}?>>12 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '13'){echo("selected");}?>>13 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '14'){echo("selected");}?>>14 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '15'){echo("selected");}?>>15 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '16'){echo("selected");}?>>16 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '17'){echo("selected");}?>>17 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '18'){echo("selected");}?>>18 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '19'){echo("selected");}?>>19 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '20'){echo("selected");}?>>20 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '21'){echo("selected");}?>>21 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '22'){echo("selected");}?>>22 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '23'){echo("selected");}?>>23 ชั่วโมง</option>
                                    <option <?php if($employee[0]['WOR_HOUR'] == '24'){echo("selected");}?>>24 ชั่วโมง</option>
									</select>
								</div>
								</label>
							</div>


					</div>

					<div class="form-actions no-margin-bottom" style="text-align:center;">
						<input type="submit" value="ยืนยัน" class="btn btn-primary btn-lg" />
						<a href="<?php echo base_url('index.php/TimeTable_controller')?>" class="btn btn-danger btn-lg" >ยกเลิก</a>
		

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
