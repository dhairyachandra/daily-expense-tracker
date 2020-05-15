<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Expense Tracker || Currency Converter</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">


    <!-- <title></title> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="style.css">
    <script src="my.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  </head>
  <body>


    <?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="row">
        <ol class="breadcrumb">
          <li><a href="#">
            <em class="fa fa-home"></em>
          </a></li>
          <li class="active">Currency Converter</li>
        </ol>
      </div><!--/.row-->


      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">Currency Converter</div>
            <div class="panel-body">

              <div class="col-md-12">
                <!-- <p style="font-size:16px; color:red" align="center">  </p> -->




                <!-- <div class="container"> -->
                  <!-- <div class="jumbotron"> -->
                    <form role="form"  method="post" action="" id="currency-form">
                      <div class="form-group">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text" name="amount" Class="form-control" id="amount" >
                      </div>
                        <label>From</label>
                       
                        <select class="money1" name="from_convert"> -->
                          <option value="AUD" class= "AUD">AUD</option><option value="BGN"class="BGN">BGN</option>
                          <option value="BRL" class="BRL">BRL</option><option value="CAD"class = "CAD">CAD</option>
                          <option value="CHF" class = "CHF">CHF</option><option value="CNY"class = "CNY">CNY</option>
                          <option value="CZK" class = "CZK">CZK</option><option value="DKK"class = "DKK">DKK</option>
                          <option value="EUR"class = "EUR">EURO</option><option value="GBP" class = "GBP">GBP</option>
                          <option value="HKD"class = "HKD">HKD</option><option value="HRK"class = "HRK">HRK</option>
                          <option value="HUF"class = "HUF">HUF</option><option value="IDR"class = "IDR">IDR</option>
                          <option value="ILS"class = "ILS">ILS</option><option value="INR"class = "INR">INR</option>
                          <option value="ISK"class = "ISK">ISK</option><option value="JPY"class = "JPY">JPY</option>
                          <option value="KRW"class = "KRW">KRW</option><option value="MXN"class = "MXN">MXN</option>
                          <option value="MYR"class = "MYR">MYR</option><option value="NOK"class = "NOK">NOK</option>
                          <option value="NZD"class = "NZD">NZD</option><option value="PHP"class = "PHP">PHP</option>
                          <option value="PLN"class = "PLN">PLN</option><option value="RON"class = "RON">RON</option>
                          <option value="RUB"class = "RUB">RUB</option><option value="SEK"class = "SEK">SEK</option>
                          <option value="SGD"class = "SGD">SGD</option><option value="THB"class = "THB">THB</option>
                          <option value="TRY"class = "TRY">TRY</option><option value="USD"class = "USD" >USD</option>
                          <option value="ZAR"class = "ZAR">ZAR</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>To</label>
                        <select class="money1" name="to_convert"> -->
                          <option value="AUD" class= "AUD">AUD</option><option value="BGN"class="BGN">BGN</option>
                          <option value="BRL" class="BRL">BRL</option><option value="CAD"class = "CAD">CAD</option>
                          <option value="CHF" class = "CHF">CHF</option><option value="CNY"class = "CNY">CNY</option>
                          <option value="CZK" class = "CZK">CZK</option><option value="DKK"class = "DKK">DKK</option>
                          <option value="EUR"class = "EUR">EURO</option><option value="GBP" class = "GBP">GBP</option>
                          <option value="HKD"class = "HKD">HKD</option><option value="HRK"class = "HRK">HRK</option>
                          <option value="HUF"class = "HUF">HUF</option><option value="IDR"class = "IDR">IDR</option>
                          <option value="ILS"class = "ILS">ILS</option><option value="INR"class = "INR">INR</option>
                          <option value="ISK"class = "ISK">ISK</option><option value="JPY"class = "JPY">JPY</option>
                          <option value="KRW"class = "KRW">KRW</option><option value="MXN"class = "MXN">MXN</option>
                          <option value="MYR"class = "MYR">MYR</option><option value="NOK"class = "NOK">NOK</option>
                          <option value="NZD"class = "NZD">NZD</option><option value="PHP"class = "PHP">PHP</option>
                          <option value="PLN"class = "PLN">PLN</option><option value="RON"class = "RON">RON</option>
                          <option value="RUB"class = "RUB">RUB</option><option value="SEK"class = "SEK">SEK</option>
                          <option value="SGD"class = "SGD">SGD</option><option value="THB"class = "THB">THB</option>
                          <option value="TRY"class = "TRY">TRY</option><option value="USD"class = "USD" >USD</option>
                          <option value="ZAR"class = "ZAR">ZAR</option>
                        </select>
                      </div>
                    
                      <input type="submit" name="convert" id="convert" class="btn btn-primary" value="convert">
                    </form>
                    <h2>
                    <?php include_once("functions.php");
                    
                    if(isset($_POST['convert'])) {
                      $from_convert = ($_POST['from_convert']);
                      $to_convert = ($_POST['to_convert']);
                      $amount = ($_POST['amount']);
                        if($from_convert == $to_convert) {
                        $data = array('error' => '1');
                        echo json_encode( $data );
                        exit;
                      }
                      $converted_currency=currencyConvert($from_convert, $to_convert, $amount);
                      $result = json_decode($converted_currency,true);
                      $rate = $result["rates"][$to_convert];
                      echo $rate*$amount;
                    }  ?></h2>
                  </div>
                  <div>
                  </div>
                  <center><?php include_once('includes/footer.php');?></center>
                <!-- </div> -->
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
