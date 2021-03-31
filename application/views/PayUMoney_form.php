<?php $this->load->view('header'); ?>

<?php

$MERCHANT_KEY = "aDEUwrkM";
$SALT = "HPPPwP8IKa";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$success = 'http://localhost/school_managment/welcome/payment_success';
$failer = 'http://localhost/school_managment/welcome/payment_failure';



$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';


// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
    
    $hash_string .= $SALT;
    

    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>

<head>
    <script>
    var hash = '<?php echo $hash ?>';

    function submitPayuForm() {
        if (hash == '') {
            return;
        }
        var payuForm = document.forms.payuForm;
        payuForm.submit();
    }
    </script>
</head>


<body onload="submitPayuForm()">
    <!-- <h2> Payment : <?php echo $this->cart->format_number($this->cart->total()); ?></h2> -->
    <br />
    <?php if($formError) { ?>

    <span style="color:red">Please fill all mandatory fields.</span>
    <br />
    <br />
    <?php } ?>

    <form action="<?php echo $action; ?>" method="post" name="payuForm">
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Checkout</h2>
            </div>

            <div class="row content">
                <div class="col-lg-7">
                    <?php foreach ($this->cart->contents() as $items) { ?><?php } ?>
                    
                        <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
                        <input type="hidden" name="hash" value="<?php echo $hash ?>" />
                        <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                        <input type="hidden" name="amount"
                            value="<?php echo $this->cart->format_number($this->cart->total()); ?>" />
                        <input type="hidden" name="surl" value="<?php echo $success ?>" size="64" />
                        <input type="hidden" name="furl" value="<?php echo $failer ?>" size="64" />
                        <input type="hidden" name="service_provider" value="payu_paisa" size="64" />

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input name="firstname" id="firstname" class="form-control"
                                    value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Address</label>
                                <input name="productinfo" class="form-control"
                                    value="<?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" id="email" class="form-control"
                                value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" />
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input name="phone" class="form-control"
                                value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" />
                        </div>
                        <?php if(!$hash) { ?>
                        <input type="submit" class="btn btn-primary" value="Submit" style="margin-bottom: 20px;"/></td>
                        <?php } ?>

                </div>
                <div class="col-lg-5 pt-4 pt-lg-0">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Event Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Event Name</th>
                                <td><?php echo $items['name']; ?></td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>Rs. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </section>
    </form>
</body>
</html>
<?php $this->load->view('footer'); ?>