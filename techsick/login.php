<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="description" content="There is General Knoledge quiz for beginner and master as well." />
  <meta name="keywords" content="Login - techsick community">
  <meta name="author" content="Singh sir">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>techsick Community</title>
  <link href =  
"../techsick/okk.css" rel="stylesheet">
  <link rel = "icon" href =  
"../techsick/techsicklogo_tscommunity.webp" 
        type = "image/x-icon"> 
</head>
<body>
  
  <header  class="bg-green-500">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href =  
"../techsick/home.php?data=<?=$a?>">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="../techsick/techsicklogo_tscommunity.webp" height="50" width="50">
      <span class="ml-3 text-xl" style="color: white;">TechsickCommunity</span>
    </a></a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a href =  
"../techsick/home.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">Home</a>
      <a href =  
"../techsick/quiz.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">Quiz</a>
      
      <a href =  
"../techsick/bestcolleges.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">Cg Best Clgs</a><a href =  
"../techsick/notes.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">Notes</a>
      <a href =  
"../techsick/aboutus.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">About Us</a>
      <a href =  
"../techsick/policy.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">Our Policy</a>
    </nav>
  </div>
</header>
<hr>
<!-- component -->
<form action="home.php" method="post">
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
      <div class="mb-4">
        <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
          Username
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="ans2" type="text" placeholder="username">
      </div>
    
      <div class="mb-6">
        <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" name="ans1" type="password" placeholder="*****">
        <p class="text-red text-xs italic">Please choose a password.</p>
      </div>
    <div class="flex items-center justify-between">
      
    <button class="inline-flex items-center bg-green-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Log In
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href =  
"../techsick/#">
        Forgot Password?
      </a>
    </div>
    
</div>
</form>

<hr>
<footer class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap md:text-left text-center order-notes">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Engineering</h2>
        <nav class="list-none mb-10">
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">notes Year</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Computer Science</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Civil Engineering</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">EEE</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Et&T</a>
          </u></li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Bachler's of Science</h2>
        <nav class="list-none mb-10">
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Mathematics</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Biology</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Chemistry</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Physics</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Zoology</a>
          </u></li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Bachler's of Arts</h2>
        <nav class="list-none mb-10">
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">History</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Sociology</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Geology</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Human Rights</a>
          </u></li>
          <li><u>
            <a href =  
"../techsick/notes.php?data=<?=$a?>" class="text-gray-600 hover:text-gray-800">Ancient HIndi</a>
          </u></li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Feedback</h2>
        <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
          <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
            sub:<input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-green-200 focus:border-green-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div><a href =  
"../techsick/home.php?data=<?=$a?>">
          <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded">Submit</button></a>
        </div>
        <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Do a fovour to us
          <br class="lg:block hidden">Give your valuable feedback
        </p>
      </div>
    </div>
  </div>
  <div class="bg-green-500">
    <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
      <a href =  
"../techsick/home.php?data=<?=$a?>" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img src="../techsick/techsicklogo_tscommunity.webp" height="50" width="50">
        <span class="ml-3 text-xl">TechsickCommunity</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">©2020 TechnickCommunity —
        <a href =  
"../techsick/https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@techsickcommunity</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a href =  
"../techsick/https://m.facebook.com/TechSick-Community-100794338700704/">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a href =  
"../techsick/https://twitter.com/i/lists/1360141150158376960?s=09" class="ml-3">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a href =  
"../techsick/https://instagram.com/techsickcommunity?igshid=tfkxtgsferrd" class="ml-3 text-orange-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a href =  
"../techsick/https://www.linkedin.com/company/techsick-community-raipur" class="ml-3">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>
</body>
</html>