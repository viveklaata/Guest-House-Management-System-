<html>
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/signup.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>

        <style>
      body {
        background: #e1c192 url(images/pic06.jpg);
      }
      
    </style>
    </head>
 <body>

      <form method="POST" action="signup.php">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="User_id">User Id:</label>
          <input type="text" id="User_id" name="User_id">
          
          <label for="Name">Name:</label>
          <input type="text" id="Name" name="Name">
          
          <label for="Password">Password:</label>
          <input type="password" id="Password" name="Password">
          
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="Phone_no">Phone Number:</label>
          <input type="text" id="Phone_no"
                 name="Phone_no" 
                 >
          
          <label for="Email">Email:</label>
          <input type="Email" id="mail" name="Email">
          <label for="Address">Address:</label>
          <textarea id="Address" name="Address"></textarea>
        
        <label for="Sex">Sex:</label>
        <select id="Sex" name="Sex">
            <option selected value="male">Male</option>
            <option value="female">Female</option>
            </fieldset>
          </optgroup>
        </select>
        <button type="submit" name="Submit">Sign Up</button>
      </form>
    </body>
</html>