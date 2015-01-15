<?php include("header.php"); ?>
<body>
<!-- apigenerator Table Section -->
<section id="apigenerator-table">
<div class="container">
	<div class="row">
		<div class="apigenerator">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="apigenerator-table">
					<div class="apigenerator-header">
						<p class="apigenerator-title">ScheduleToApi - Generator</p>
					</div>
					<div class="apigenerator-list">
						<form class="form-horizontal" method="POST" action="edittable.php">
							<fieldset>
								<div class="form-group">
									<label for="inputCol" class="col-lg-4 control-label">No. of Columns</label>
									<div class="col-lg-5">
										<input type="text" class="form-control" name="columns" id="inputCol" placeholder="Enter the number of columns.">
									</div>
								</div>
								<div class="form-group">
									<label for="inputRow" class="col-lg-4 control-label">No. of Rows</label>
									<div class="col-lg-5">
										<input type="text" class="form-control" name="rows" id="inputRow" placeholder="Enter the number of rows.">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-5 col-lg-offset-4">
										<button class="btn btn-default">Cancel</button>
										<button type="submit" class="btn btn-primary" name="submit" value="generatetable">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- apigenerator Table Section End -->
<?php include("footer.php"); ?>