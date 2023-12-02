
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
    
	<title>Login</title>
    <link rel="shortcut icon" href="images/carspeed.avif">
<div class="container">
</head>
<body>
    <form  action="" method="post">
      <p>Bienvenue</p>
      <input type="email" placeholder="Enter your email" name="email"><br>
      <span style="color:red;" class="Err"><?= $erreur["email"] ?? "" ?> </span><br>
      <input type="password" placeholder="Enter your password" name="password"><br>
      <span style="color:red;" class="Err"><?= $erreur["password"] ?? "" ?> </span><br>
      
      <input type="submit" onclick="window.location.href='views/data.php'" value="Connexion"><br>
    
      
      
    </form>
  
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
  </body>
  <style>

*{
    margin: 0;
    padding: 0;
    outline: 0;
  }
  body {
    background-image: url('images/speed.jpg');
      height: 100vh;
      font-family: arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover ;
      position: relative;
      z-index: 100;
    }
    body::after{
      content:"";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #0000004f;
      z-index: -1;
    }
    
    .container {
      position: relative;
    }
    form {
      background: rgba(255, 255, 255, .5);
      padding: 3rem;
      height: 320px;
      border-radius: 20px;
      border-left: 1px solid rgba(255, 255, 255, .3);
      border-top: 1px solid rgba(255, 255, 255, .3);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      -moz-backdrop-filter: blur(10px);
      box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
      text-align: center;
      z-index: 200;
    }
    p {
      color: black;
      font-weight: 500;
      opacity: .7;
      font-size: 1.4rem;
      margin-bottom: 60px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
    }
      
    a {
      text-decoration: none;
      color: black;
    }
    
    a:hover {
      text-shadow: 2px 2px 6px #00000040;
    }
    
    a:active {
      text-shadow: none;
    }
    input {
      background: transparent;
      border: none;
      border-left: 1px solid rgba(255, 255, 255, .3);
      border-top: 1px solid rgba(255, 255, 255, .3);
      padding: 1rem;
      width: 200px;
      border-radius: 50px;
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      -moz-backdrop-filter: blur(5px);
      box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
      color: black;
      font-weight: 500;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
      transition: all .3s;
      margin-bottom: 2em;
    }
    input:hover,
  input[type="email"]:focus,
  input[type="password"]:focus{
    background: rgba(255,255,255,0.1);
    box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
  }
      
  input[type="button"] {
    margin-top: 10px;
    width: 150px;
    font-size: 1rem;
    cursor: pointer;
  }
  
  ::placeholder {
    color:black;
  }
  .drop {
    background: rgba(255, 255, 255, .5);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 10px;
    border-left: 1px solid rgba(255, 255, 255, .3);
    border-top: 1px solid rgba(255, 255, 255, .3);
    box-shadow: 10px 10px 60px -8px rgba(0,0,0,0.2);
    position: absolute;
    transition: all 0.2s ease;
  }
  .drop-1 {
    height: 80px; width: 80px;
    top: -20px; left: -40px;
    z-index: -1;
  }
  
  .drop-2 {
    height: 80px; width: 80px;
    bottom: -30px; right: -10px;
  }
  
  .drop-3 {
    height: 100px; width: 100px;
    bottom: 120px; right: -50px;
    z-index: -1;
  }
  
  .drop-4 {
    height: 120px; width: 120px;
    top: -60px; right: -60px;
  }
  
  .drop-5 {
    height: 60px; width: 60px;
    bottom: 170px; left: 90px;
    z-index: -1;
  }


  </style>