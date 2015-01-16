<?php include("header.php"); ?>
<?php 
  if(isset($_POST['submit'])){
    $columns  = $_POST['columns'];
    $rows     = $_POST['rows']; 
?>
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
            <form class="form-horizontal" method="POST" action="savetable.php">
           <?php for($i=0; $i < $columns; $i++){ ?>
             <div class="form-group">
              <label class="col-lg-2 control-label">colname <?php echo $i+1;?></label>
              <div class="col-lg-7">
                <input type="text" class="form-control" name="col_<?php echo $i+1;?>" placeholder="column name">
              </div>
            </div>
            <?php } ?>
            <hr/>
            <?php for($i=0; $i < $rows; $i++){ ?>
             <div class="form-group">
              <label class="col-lg-2 control-label">rowname <?php echo $i+1;?></label>
              <div class="col-lg-7">
                <input type="text" class="form-control" name="row_<?php echo $i+1;?>" placeholder="row name">
              </div>
            </div>
            <?php } ?>
            <div class="form-group">
              <div class="col-lg-4 col-lg-offset-9">
                <input type="hidden" name="rows" value="<?php echo $rows;?>">
                <input type="hidden" name="cols" value="<?php echo $columns;?>">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" name="createTable" class="btn btn-primary">Create Table</button>
              </div>
            </div>
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
<?php }else{ header('location: index.php');} ?>