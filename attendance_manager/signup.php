<!DOCTYPE html>
<html>
<head>
  <title>SignUp</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">SignUp</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
          </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Link</a>
          <a class="mdl-navigation__link" href="">Link</a>
          <a class="mdl-navigation__link" href="">Link</a>
          <a class="mdl-navigation__link" href="">Link</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content">
            <!-- Your content goes here -->
            <form method = "post" action="signup_script.php" style="margin-left:50px " >

              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="name" name="name">
                <label class="mdl-textfield__label" for="name">Enter Your Name..</label>
              </div>

              <div></div>
          

            
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="email" id="e_id" name="e_id">
                <label class="mdl-textfield__label" for="e_id">Enter Your E-Mail Id</label>
              </div>

              <div></div>           

            
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="engg_yr" name="engg_yr">
                <label class="mdl-textfield__label" for="engg_yr">Enter your Enginnering Year(2-4)</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
              </div>

              <div></div>            

            
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="module" name="module">
                  <label class="mdl-textfield__label" for="module">Enter your Module(3-8)</label>
                  <span class="mdl-textfield__error">Input is not a number!</span>
              </div>

              <div></div>            

              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="SUBMIT_MESSAGE" style="margin-left:50px ">
               Submit
              </button>

              </form>


              
        </div>
      </main>
    </div>

    
  </body>
</html>