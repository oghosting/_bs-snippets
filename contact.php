<?php include_once("header.php"); ?>

<?php
/**
*   Please Note:
*   This file is still in beta.
*   Validation and Echo need to be put in external file.
**/
?>
<?php include("inc/validate.php"); ?>

<div class="container">
<h2>PHP Form Validation</h2>
  
  <form class="form-horizontal" role="form" method="post" action="form-success.php">
    <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Name<label>
      <div class="col-sm-10">
        <input type="text" name="name" placeholder="Enter Name">
        <span class="error">* <?php echo $nameErr;?></span>
      </div>
    </div>
    
    <div class="form-group">
      <label for="email" class="col-sm-2 control-label">E-mail<label>
      <div class="col-sm-10">
        <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
      </div>
    </div>
    
    <div class="form-group">
      <label for="website" class="col-sm-2 control-label">Website</label>
      <div class="col-sm-10">
        <input type="text" name="website">
        <span class="error"><?php echo $websiteErr;?></span>
      </div>
    </div>
    
    <div class="form-group">
      <label for="comment" class="col-sm-2 control-label">Comment </label>
      <div class="col-sm-10">
        <textarea name="comment" rows="5" cols="40"></textarea>
      </div>
    </div>
    
    <div class="form-group">
      <label for="option" class="col-sm-2 control-label">Options </label>
      <div class="col-sm-10">
        <input type="radio" name="option" value="option1">option 1
        <input type="radio" name="option" value="option2">option 2
        <span class="error">* <?php echo $genderErr;?></span>
      </div>
    </div>
  
    <p><span class="error">* required field.</span></p>
    <button type="submit" class="btn btn-default">Submit</button>
    
  </form>
</div><!-- end .container -->


<?php include_once("footer.php"); ?>
