<?php include("header.php"); ?>
<?php 
  if(isset($_POST['submit'])){
    $columns = $_POST['columns'];
    $rows    = $_POST['rows'];
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
            <form class="form-horizontal" method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
             <table class="table table-striped table-hover ">
              <thead>
                <tr>
                 <th>#</th>
                 <?php for($i=0; $i < $columns; $i++){ ?>
                  <th>Column heading</th>
                  <?php }?>
                </tr>
                
              </thead>
              <tbody>
              <?php for($i=0; $i < $rows; $i++){ ?>
                <tr>
                  <th>Row heading</th>
                   <?php for($j=0; $j < $columns; $j++){ ?>
                     <td>Column content</td>
                   <?php }?>
                </tr>
              <?php }?>
              </tbody>
            </table> 
            <div class="form-group">
              <div class="col-lg-4 col-lg-offset-9">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
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