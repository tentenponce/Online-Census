<?php //FRONT END
  //centralized nav, dito rin ung search para kahit san pde mag search agad ng census form
  $thisPage;
?>
<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Census</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php if($thisPage=='Home'){echo 'active'; }?>"><a href="index.php">Home</a></li>
      <li class="<?php if($thisPage=='ApplicationForm'){echo 'active'; }?>"><a href="census.php">Application Form</a></li>
      <li><a href="#"></a></li>
    </ul>
    <form class="navbar-form navbar-right">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>
