<!DOCTYPE html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="description" content="We are a Community of engineers and others of Raipur....we believe in work. we want to make a platform for all individuals for knoledge!" />
  <meta name="keywords" content="Home - Techsick Community">
  <meta name="author" content="Singh sir">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta name="asset-url" class="mercado-icons-sprite" id="artdeco-icons/static/images/sprite-asset" content="https://static-exp1.licdn.com/sc/h/21m48fftxrxil7c8lck4bcp41">
  <title>techsick Community</title>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "https://www.techsickcommunity.tech",
      "logo": "https://www.techsickcommunity.tech/techsicklogo_tscommunity.webp"
    }
  </script>
  <link href =  
"../techsick/okk.css" rel="stylesheet">
  <link rel = "icon" href = "techsicklogo_tscommunity.webp" type = "image/x-icon"> 
</head>
<body>
  <?php  
      if($_GET["data"]!=""){
        $a=$_GET["data"];
      }else if($_POST["ans2"]!=""){
        $a=$_POST["ans2"];
      }
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
"../techsick/home.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;"><u>Home</u></a>
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
    <span  style="color: black;">
        
        <?php  

         $p=$_POST["ans1"];
        if($a!="" || $p!=""){ 
          echo "&#10004;";
          echo $a; 
          echo "    ";
        }
        else{
          echo '<a href =  
"../techsick/login.php"><button class="inline-flex items-center bg-gray-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Log In<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"></path></svg></button></a>';
        }
        if($_POST["ans2"]!=""){
               $myfile = fopen("logdata.txt","a");
              
               fwrite($myfile, $a);
              fwrite($myfile, "\t\t\t");
              fwrite($myfile, $p);
              fwrite($myfile, "\n");

              fclose($myfile);
            }

        if($_POST["user"]!=""){
          $a=$_POST["user"];
          $f=$_POST["feed"];
               $myfile = fopen("feedback.txt","a");
              
              fwrite($myfile, $a);
              fwrite($myfile, "\t\t\t");
              fwrite($myfile, $f);
              fwrite($myfile, "\n");
              fclose($myfile);
            }

        if($a!=""){
           echo '<a href =  
"../techsick/home.php"><button class="inline-flex items-center bg-gray-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Log Out<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"></path></svg></button></a>';
        }
        ?>
    </span>
    
  </div>
</header>

<b><h2> Updated - 12 April 2021(Per Month)</h2></b>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">

      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Play Quiz
        <br class="hidden lg:inline-block"> - with techsickcommunity </h1> 
      
      <p class="mb-8 leading-relaxed">Hello everyone, This is A General Knoledge quiz where is some Current affairs, some basic Science, basic arts, Technolory and etc. And we will <b>"mention there the toppers of quiz....!"</b>.</p>
      <div class="flex justify-center">
        <a href =  
"../techsick/quiz.php?data=<?=$a?>">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Quizs Section -></button></a>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="something went wrong!" src="../techsick/home_tscommunity.webp">
    </div>
  </div>
</section>


<hr>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Let's prepare
        <br class="hidden lg:inline-block">with techsickcommunity
      </h1>
      <p class="mb-8 leading-relaxed">Hello everyone, This is why we made because at the time of the exam mostly students don't have the notes and books of the particular subjects, that was sometimes our problem too......!</p>
      
      <div class="flex justify-center">
        <a href =  
"../techsick/notes.php?data=<?=$a?>">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Notes Section -></button></a>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="something went wrong!" src="../techsick/work_pc_tscommunity.webp">
    </div>
  </div>
</section>
<hr>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Free Free Free for all</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">we are working for our type individuals, there is all are free for you! Techsickcommmunity is working for all. please do support!</p>
    </div>
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M8 17l4 4 4-4m-4-5v9"></path>
            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
          <p class="leading-relaxed">Downloads</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
          <p class="leading-relaxed">Users</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M3 18v-6a9 9 0 0118 0v6"></path>
            <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
          <p class="leading-relaxed">Files</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">15</h2>
          <p class="leading-relaxed">Courses</p>
        </div>
      </div>
    </div>
  </div>
</section>

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
        <b><p class="text-grey text-sm mt-2 md:text-left text-center">Do a fovour to us
          <br class="lg:block hidden">Give your valuable feedback
        </p></b>
        <br><br>
        <a href =  
"../techsick/mailto:techsickcommunity@gmail.com?subject=Feedback Regarding the www.techsickcommunity.tech website!&body=To,\nThe ts-community administration,\nRaipur.\n\nRsp sir,\n">
          <button class="ml-4 inline-flex text-black-700 bg-blue-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Feedback</button></a>
      </div>
    </div>
  </div>
</footer><hr>



<footer>
  <div class="bg-green-500">
    <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
      <a href =  
"../techsick//?data=<?=$a?>" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img src="../techsick/techsicklogo_tscommunity.webp" height="50" width="50">
        <span class="ml-3 text-xl">TechsickCommunity</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">©2020 TechnickCommunity —
        <a rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@techsickcommunity</a>
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