<!DOCTYPE HTML>

<html>

<head>

    <meta charset="utf-8">
     <meta name="viewport" content="width=device-witdh, initial scale=1">
     <title>Registration Form</title>
     <link rel="stylesheet" type="text/css" href="mjstyle.css">
</head>

<body class="loginbg">  
 
  <form>
      <div class="reg_form">
          <div class="manbg1"> <img src="user.png" alt="logo" /></div>
          <h1>CreateAccount</h1>

          <div class="fields">

              <div class="input2">
                  <p>Username:</p>
                  <p>EnterPassword:</p>
                  <p>ConfirmPassword:</p>
                  <p>EmailAddress:</p>
                  <p>BirthDate:</p>
                  <p>PhoneNumber:</p>
                  <p>Country:</p>
                  <p>Gender: </p>
              </div>

              <div class="input3">
                  <input type="text" placeholder="                 User" >
                  <input type="password" placeholder="                *********" >
                  <input type="password" placeholder="                *********" >
                  <input type="text" placeholder="    example@gmail.com" >
                  <input type="text" placeholder="              mm/dd/yy" >
                  <input type="text" placeholder="             09** *** ****" >
                  <input type="text" placeholder="            Philippines" >
              </div>

          </div>
          <div class="gender">

              <input type="radio" name="gender" data="male" required wrap>Male&emsp;&emsp;
              <input type="radio" name="gender" data="female" required wrap>Female
          </div>


          <div class="buttons1">
              <button type="button" onclick="button2Function()">LogIn</button>
              <button type="Submit">SignUp</button>
          </div>

      </div>

   </form>
    <script>
function button2Function() {
  location.replace('index.php')
}
</script>
</body>

</html>
