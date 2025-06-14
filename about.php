<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">

    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>About</title>
   

</head>
<body>

        <?php
            if(isset($_POST['submit'])) {

                if(empty($_POST['email'])) {
                     echo 'Email is Required!<br/>';   
                } else {
                  echo $_POST['email'];
                }

                if(empty($_POST['password'])) {
                     echo 'Password is Required!<br/>';   
                } else {
                  echo $_POST['password'];
                }

            }   

        ?>
          

     <div class="container">
        <?php include("header.php"); ?>

     <p class="text-[50px] text-center font-sans not-italic mt-8 ">About Me</p>

     
    
     <form class="flex flex-col  border border-sm bg-[#081b29] text-white rounded-xl p-4 my-[50px] mx-[100px] px-[60px] md:px-[100px] poppins-medium"
     action="addpizza.php" method="POST">

       <lable for="">Your Email</lable>
       <input required class="p-1 mb-2 bg-white text-black font-sans rounded-b-lg rounded-t-lg" type="email" name="email"class="">
       <lable for="">Password</lable>
       <input required class="p-1 mb-2 bg-white text-black font-sans rounded-b-lg rounded-t-lg" type="text" name="title"class="">
       <input class="bg-[#d62939] hover:bg-pink-500 rounded-t-lg rounded-b-lg tect-white py-1 px-3 mt-3" type="submit" value="submit">

    </form>
    
      <?php include("footer.php"); ?>
   </div> 

 
   
</body>
</html>