<footer>
  <p>Copyright &#169;  2018 yanbytes </p>
</footer>
<script>
function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}
</script>
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/font-awesome.min.css" />
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/font-awesome.css" /> 
</body>
</html>