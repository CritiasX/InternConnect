
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
     <header class="flex justify-between items-center px-10 py-5 border-b-[2px]">
      <div>
        <span class="font-bold text-[20px] text-[#FF9D41]">InternConnect</span>
      </div>

      <nav class="space-x-7 text-[#666666]">
        <a class="hover:text-[#FF9D41]" href="landingPage.html">About Us</a>
        <a class="hover:text-[#FF9D41]" href="contactUs.html">Contact Us</a>
        <a class="hover:text-[#FF9D41]" href="">Login</a>
      </nav>
    </header>

    <main class="mx-auto grid grid-cols-1 md:grid-cols-2 gap-0 items-center min-h-screen">
      <div class="px-6 pb-16 flex items-start justify-center ">
        <div class="space-y-6 max-w-md text-center md:text-left ">
            <h1 class="text-[35px] font-semibold text-[#666666]">To create an account:</h1>
            <p class="text-[#707070] ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Nihil nisi, quae aspernatur ipsa consequatur perferendis. 
                Consectetur similique praesentium modi, quas asperiores blanditiis 
                voluptates voluptatem sunt, magni sapiente cupiditate excepturi deleniti!</p>
        </div>
      </div>

      <div class="bg-[#ececec] flex justify-center items-start pt-[90px] h-full ">
          <div class="max-w-md w-full bg-white py-8 md:py-10 px-12 md:px-16 rounded-md shadow">
            <form action="">
                <h1 class="font-bold flex justify-center items-center text-[40px] text-[#666666] mb-[25px]">Create Account</h1> 
                <div class="mb-6">   
                    <input class="w-full px-4 py-[3px] border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div>
                    <input class="w-full px-4 py-[3px] border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      type="password" id="password" name="password" placeholder="Password" required>
                </div>

                 <div class=" flex items-center justify-center space-x-2 text-[12px] mt-4">
                    <input 
                        type="checkbox" id="terms" name="terms" required>
                    <label  class="text-[#707070]"
                        for="terms"> I agree to the</label>
                        <a class="text-[#ff9d41] hover:underline" href="">Terms and Conditions</a>
                </div>
                
                <button class="w-full mt-8 bg-[#FF9D41] text-white font-semibold py-[3px] rounded-md hover:bg-[#ffa856]"
                  type="submit">Create
                </button>
    
                <p class="text-center text-[13px] text-[#707070] mt-4">
                  Already have an account? 
                  <a class="text-[#FF9D41] hover:underline" href="loginPage.php">Click here</a>
                </p>

            </form>
          </div>    
         
        </div>
    </main>


</body>
</html>