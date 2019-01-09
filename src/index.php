<!DOCTYPE html>
<html>
  <head>
    <title>APAN Simple Attribute Reflector</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="./css/bootstrap.css" type="text/css" rel="stylesheet" media="screen, projection" />
    <link href="./css/base_application.css" type="text/css" rel="stylesheet" media="screen, projection"/>

    <script src="./js/jquery-1.7.2.min.js" type="text/javascript" ></script>
    <script src="./js/modernizr-2.6.2.js" type="text/javascript" ></script>
  </head>

  <body>
    
    <header>      
      <div class="container">  
        <div class="row">
          <div class="span12">
            <img src="./logo.jpg" alt="APAN" width="102" height="50" />
            <h1>Simple Attribute Reflector</h1>             
          </div
        </div>
      </div>
    </header>

    <nav>
      <div class="container">
        <div class="navbar">
          <div class="navbar-inner">
            <ul class="nav">
              <li>
                <a href="https://apan.net">APAN Web site</a>
              </li>
              <li><a href="https://github.com/APAN-TF-IAM/Shibboleth-SP" target="_blank">Git Repository</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <section>
      <div class="container">        
        <div class="row">
          <div class="span12">

            <h4>Attributes sent from your IdP</h4>

<br>

<?php 

echo "<table>\n";

foreach ($_SERVER as $key => $value) {
        $pos = strpos($key, 'APAN');
        if ($pos !== false) {
            $pos = strpos($key, 'APAN-Shib');
            if ($pos === false) {
		echo "<tr>\n";
                $newkey=substr($key, 4);
		echo "<td valign='top'><b>$newkey</b></td><td> </td><td>";
                $vals = explode (';', $value);
                foreach ($vals as $kval => $val) {
		   if ($kval > 0)
		      echo "</br>";
                   echo "$val";
                }
		echo "</td>\n";
		echo "</tr>\n";
	    }
  	}
} // End foreach

echo "</table>\n";

?>

          </div>
        </div>
      </div>
    </section>
  
    <footer>
      <div class="container"> 
        <div class="row">
          <div class="span12">
            <p>
              <a href="https://apan.net">APAN - Asia Pacific Advanced Network</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
  </body>

</html>
