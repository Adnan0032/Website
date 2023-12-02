<!-- Formulaire -->
<link rel="shortcut icon" href="images/carspeed.avif">
<form action="index.php?action=buy" method="post">
    <br>
<div class="txt">

			<input type="text" placeholder="Enter your first name" id="nom" name="nom" required> <br>
			<input type="text" placeholder="Enter your last name"  id="prenom" name="prenom" required> <br>
			<input type="text" placeholder="Enter your cin"  id="cin" name="cin"> <br>
            <input type="email" placeholder="Enter your email" id="email" name="email" required><br>
			<input placeholder="Enter your phone" type="tel" id="telephone" name="telephone"> <br>
			<input input type="text" id="carte_bancaire" name="carte_bancaire" placeholder="Enter your card number" ><br>
            <input type="date" placeholder="Enter the expiretion date " id="date_naissance" name="date_naissance" ><br>
	</div>
	<input type="submit" value="Enregistrer" name="submit">  <input onclick="window.location.href='index.php'" type="reset" value="Annuler" name="Reset" >

    
</form>
<style>

*{
    margin: 0;
    padding: 0;
    outline: 0;
  }
  body {
    background-image: url('images/piccar.avif');
      font-family: arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    
    .container {
      position: relative;
    }
    form {
      background: rgba(255, 255, 255, .3);
      padding: 3rem;
      height: 560px;
      border-radius: 20px;
      border-left: 1px solid rgba(255, 255, 255, .3);
      border-top: 1px solid rgba(255, 255, 255, .3);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      -moz-backdrop-filter: blur(10px);
      box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
      text-align: center;
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
      width: 300px;
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
    background: rgba(255, 255, 255, .3);
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