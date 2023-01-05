<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <!-- Boxicons -->
      <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
      <!-- My CSS -->
      <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <section class="add-products">

    
     
        <form action="" method="post" enctype="multipart/form-data">
           <div class="flex">
              <div class="inputBox">

                 <span>User Name</span>
                 <input type="text" name="name" required placeholder="enter your username" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
              
             <div class="inputBox">
                 <span>Password</span>
                 <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">

             </div>
           </div>
           <input type="submit" value="login now" class="add-btn" name="submit">

        </form>
     
     </section>
</body>
</html>