<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="description" content="This is error page of our website....we believe in work. we want to make a platform for all individuals for knoledge!" />
  <meta name="keywords" content="notes page of TechSick community">
  <meta name="author" content="Pujari sir">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>techsick Community</title>
  <link href =  
"../techsick/okk.css" rel="stylesheet">
  <link rel = "icon" href =  
"../techsick/techsicklogo_tscommunity.webp" 
        type = "image/x-icon"> 
</head>
<body>
  <?php  

        $a=$_GET["data"];
  ?>
  <header  class="bg-green-500">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href =  
"../techsick/home.php?data=<?=$a?>" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="../techsick/techsicklogo_tscommunity.webp" height="50" width="50">
      <span class="ml-3 text-xl" style="color: white;">TechsickCommunity</span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center">
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
    <?php  

        if($a!=""){ 
          echo "&#10004;";
          echo $a; 
        }
        else{
          echo '<a href =  
"../techsick/login.php"><button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Log In<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"></path></svg></button></a>';
        }
        if($a!=""){
           echo '<a href =  
"../techsick/home.php"><button class="inline-flex items-center bg-gray-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Log Out<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"></path></svg></button></a>';
        }
        ?>
  </div>
</header>
<hr>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Comming Soon
        <br class="hidden lg:inline-block">we are working on it
      </h1>
      <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
      <div class="flex justify-center">
        <a href =  
"../techsick/notes.php?data=<?=$a?>">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Notes</button></a>
        <a href =  
"../techsick/books.php?data=<?=$a?>">
          <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Books</button></a>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="something went wrong!" src="../techsick/notes_tscommunity.webp">
    </div>
  </div>
</section>


<hr>

<footer class="text-gray-600 body-font">
  <div class="bg-green-500">
    <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
      <a href =  
"../techsick/home.php?data=<?=$a?>" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img src="../techsick/techsicklogo_tscommunity.webp" height="50" width="50">
        <span class="ml-3 text-xl">TechsickCommunity</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">??2020 TechnickCommunity ???
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