<h1> Contact information</h1>
<form name="add new information" method ="post" action="<?php echo base_url();?>new_controller/save_new_info.html">
    <input type="text" name="first_name" placeholder ="enter your first name" required="">
    <input type="text" name="last_name" placeholder ="enter your last name" required="">
    <input type="text" name="email" placeholder ="enter your email" required="">
    <button> Submit </button>
</form