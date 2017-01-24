<?php //FRONT END
  //centralized nav, dito rin ung search para kahit san pde mag search agad ng census form

  /*<li class="<?php if($thisPage=='ApplicationForm'){echo 'active'; }?>"><a href="census.php">Application Form</a></li>*/
?>
<nav class="navbar navbar-default navbar-fixed-top " >
  <div class="container-fluid">
    <div class="navbar-header">
      <p class="navbar-text" style="font-weight:bold;">Online Census</p>
    </div>
    <ul class="nav navbar-nav" id="myNavbar">
      <li class="<?php if($thisPage=='Home'){echo 'active'; }?>"><a href="<?php if($thisPage=='Home'){echo '#section1';} elseif($thisPage=='ApplicationForm'){echo 'index.php';}?>">Home</a></li>
      <li <?php if($thisPage=='ApplicationForm'){echo 'style="display:none;"';}?>><a href="#section2">Contacts</a></li>
      <li <?php if($thisPage=='ApplicationForm'){echo 'style="display:none;"';}?>><a href="#section3">Other Information</a></li>
      <li <?php if($thisPage=='ApplicationForm'){echo 'style="display:none;"';}?>><a href="#section41">E-Census</a></li>
      <li <?php if($thisPage=='ApplicationForm'){echo 'style="display:none;"';}?>><a href="#section42">Footer</a></li>
      <li class="<?php if($thisPage=='ApplicationForm'){echo 'active'; }?>" <?php if($thisPage=='Home'){echo 'style="display:none;"';}?>><a href="census.php">Application Form</a></li>

      <li><a href="#"></a></li>
    </ul>
    <form class="navbar-form navbar-right">
      <div class="input-group">
         <input type="text" class="form-control" placeholder="Search">
         <div class="input-group-btn">
           <button class="btn btn-default" type="submit">
             <i class="glyphicon glyphicon-search"></i>
           </button>
         </div>
       </div>
    </form>
  </div>
</nav>
