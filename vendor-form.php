<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Global Fashions, LLC</title>
    <meta name="author" content="YuviSingh1"/>
    <meta name="description" content="Global Fashions, LLC."/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        h1 { color: #585858; font-size: 18pt; text-align: right; }
        h2 { color: black; font-size: 14pt; text-align: center; }
        .s1 { color: #FFF; font-weight: bold; font-size: 12pt; }
        .s2 { color: black; font-size: 10pt; }
        .s3 { color: black; font-size: 10pt; text-decoration: underline; }
        .textbox {
            background: #404040;
            border: 0.5pt solid #000000;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            border: 1px solid #000; /* 1px border */
        }
    </style>
</head>
<body style="background:#354076;">
    <div class="container" style="background:white;">
        <div>
            <h1 class="text-center" style="padding:30px;"><b>Global Fashions, LLC. </b></h1>
            <h2><b>International Gifts &amp; Crafts Show Referral Form: 2024</b></h2>

            <div class="textbox">
                <p class="s1" style="margin-top:10px;">Referral Policy</p>
            </div>
            <p class="text-center">Spread the word, bring other vendors to participate in our Crafts Show. For every new paid vendor participating for the first time, Global Fashions is offering as Referral Incentive for both the New &amp; Old Vendor from the space rental fee.</p>
            <p class="text-center">For Example:</p>
            <p class="text-center">For 1 Vendor: $30 off | For 2 Vendors: $60 off | For 3 Vendors: $90 off | For 4 Vendors: $120 off</p>

            <div class="textbox">
                <p class="s1" style="margin-top:10px;">Vendor Information</p>
            </div>

            <form  id="demo-form" data-parsley-validate="">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="s2">Vendor Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Vendor Name"  name="name" id="name"   data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-error-message="Please Enter Name"  required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="s2">Show Date:</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="s2">Business Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Business Name"  name="bname" id="bname" >
                    </div>
                    <div class="form-group col-md-6">
                        <label class="s2">Phone #:</label>
                        <input type="tel" class="form-control" placeholder="Enter Phone Number" name="phone" id="phone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="s2">Address:</label>
                        <input type="text" class="form-control" placeholder="Enter Address"  name="address" id="address">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="s2">State:</label>
                        <input type="text" class="form-control" placeholder="Enter State" name="state" id="state" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="s2">Zip:</label>
                        <input type="text" class="form-control" placeholder="Enter Zip"  name="zip" id="zip">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="s2">Candidate Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Candidate Name" name="cname" id="cname">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="s2">Phone #:</label>
                        <input type="tel" class="form-control" placeholder="Enter Phone Number"  name="phoneb" id="phoneb">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="s2">Referred By:</label>
                        <input type="text" class="form-control" placeholder="Enter Referrer Name" name="referred" id="referred" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="s2">Date:</label>
                        <input type="date" class="form-control" name="dateb" id="dateb" >
                    </div>
                    <div class="form-group col-md-6">
                        <label class="s2" >Accepted By:</label>
                        <input type="text" class="form-control" placeholder="Enter Accepted By Name" name="accepted" id="accepted" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" style="width:200px;" name="submit" id="submit" type="submit" >Submit</button>
                    </div>
                </div>
            </form>
            <div class="col-lg-12 alert-notification" style="margin-top:20px;">
                <div id="message" class="msgs"></div>
            </div>
        </div>
    </div>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    <script src="js/parsley.min.js"></script>
   
   <script type="text/javascript">
$(function () {
  $('#demo-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
      var name = $('#name').val();
      var date = $('#date').val();
      var bname = $('#bname').val();
      var phone = $('#phone').val();
      var address = $('#address').val();
      var state = $('#state').val();
      var zip = $('#zip').val();
      var cname = $('#cname').val();
       var phoneb = $('#phoneb').val(); 
        var referred = $('#referred').val(); 
         var dateb = $('#dateb').val(); 
          var accepted = $('#accepted').val(); 
      
     $.ajax({
        url: 'includes/vendor.php',
        method: 'post',
        data: {name:name,date:date,bname:bname,phone:phone,address:address,state:state, zip:zip,cname:cname,phoneb:phoneb,referred:referred, dateb: dateb,accepted:accepted},
        success: function(data){
        $("form").trigger("reset");
          $('.msgs').html('<div class="alert alert-success"><strong>Success!</strong> Booking Successful Submitted </div>');
        }   
    });
    return false; // Don't submit form for this demo
  });
});
</script>


</html>
