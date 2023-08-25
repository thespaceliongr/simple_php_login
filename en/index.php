<!--
Simple php member (progress bar, rules, register, login, profile, edit, update, forgot, new password, total users,your ip,logout, sql).


 * @copyright 2007-2019 The Space Lion Gr Net
 * @see https://www.thespaceliongr.net/
 * @Author Stavros Vourliotis.

//-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<!-- head starting -->
<head>
<!--character encoding for the HTML document utf-8 -->
<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
<title>Welcome</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>
<!-- head starting -->
   <!-- body -->
<body>
        <!-- progress bar css style  -->
<style>
.progress_bar {
  height: 10px;
  background: orange;
  width: 0%;
  -moz-transition: all 4s ease;
  -moz-transition-delay: 1s;
  -webkit-transition: all 4s ease;
  -webkit-transition-delay: 1s;
  transition: all 4s ease;
  transition-delay: 1s;
}
</style>
    <!-- progress bar css style  -->
<p>&nbsp;<p>
<p>&nbsp;<p>
<p>&nbsp;<p>
<p>&nbsp;<p>
<center>        <!-- body subject matter -->

<img src="logo.gif"></a><p>       <!--logo  -->

</center>
<div id="progressBar" class="progress_bar"></div>        <!-- progress bar script-->
<script>
 // Assign your element ID to a variable.
  var progress = document.getElementById("progressBar");
  // Pause the animation for 100 so we can animate from 0 to x%
  setTimeout(
    function(){
      progress.style.width = "100%";
      // PHP Version:
      // progress.style.width = "<?php echo $progressPercentage; ?>";
      progress.style.backgroundColor = "green";
    }
  ,100
  );
            setTimeout(function(){
            window.location.href = 'main.php';
         }, 5000); 
  </script>
    <!-- progress bar script-->
    
    <!-- body subject matter -->
</body>
       <!-- body -->
</html>
