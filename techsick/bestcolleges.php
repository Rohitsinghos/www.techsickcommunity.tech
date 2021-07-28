<!doctype html>
<html>
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="description" content="According to us,who we are? -> we are the students of this colleges and part of this community..!<br> We are a Community of engineers and others of Raipur....we believe in work. we want to make a platform for all individuals for knoledge!" />
  <meta name="keywords" content="Best Colleges of Chhattisgarh - TechSickCommunity Raipur">
  <meta name="author" content="Singh sir">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <!-- <meta http-equiv="refresh" content="5"> -->
  <title>techsick Community</title>
  <link href =  
"../techsick/okk.css" rel="stylesheet">
  <link rel = "icon" href =  
"../techsick/techsicklogo_tscommunity.webp" 
        type = "image/x-icon"> 
</head>
<body>
  <?php
      if($_POST["ans2"]!=""){
          $a=$_POST["ans2"];
        }
        else if($_GET["data"]!=""){
          $a=$_GET["data"];
        }
        else if($_POST["user"]!=""){
          $a=$_POST["user"];
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
"../techsick/home.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">Home</a>
      <a href =  
"../techsick/quiz.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">Quiz</a>
      <a href =  
"../techsick/bestcolleges.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;"><b><u>Cg Best Colleges</u></b></a>
      <a href =  
"../techsick/notes.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">Notes</a>
      <a href =  
"../techsick/aboutus.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">About Us</a>
      <a href =  
"../techsick/policy.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">Our Policy</a>
    </nav>
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
  </div>
</header>
<hr>

<b><h2> Updated - 12 April 2021(Per Month)</h2></b>

<section class="text-gray-600 body-font">
  <div class="container px-10 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">#This is our sincere Opinions</h2>
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">***Best Colleges of Chhattisgarh***</h1>
      <B><p class="lg:w-2/3 mx-auto leading-relaxed text-green-900">According to us! who we are??? - "we are the students of this colleges..!"</p></B>
    </div>
    <b><h2>#### Ranking is declared by there Teaching qualities, Fees, Placement, Campus, Opportunities and many mores....!</h2></b><br><br>
    <div class="flex flex-wrap">
      <div class="xl:w-1/2 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Cg Best Colleges For Engineering(B.Tech.)</h2>

        <a href =  
"../techsick/http://www.nitrr.ac.in/"><p class="leading-relaxed text-base mb-4"><u>1. National Institute of Technology Raipur(NIT)</u></p></a>

        <a href =  
"../techsick/http://www.iitbhilai.ac.in/"><p class="leading-relaxed text-base mb-4"><u>2. Indian Institute of Technology Bhilai(IIT)</u></p></a>

        <a href =  
"../techsick/http://www.iiitnr.ac.in/"><p class="leading-relaxed text-base mb-4"><u>3. International Institute of Information & Technology Raipur(IIIT)</u></p></a>

        <a href =  
"../techsick/http://www.gecraipur.ac.in/"><p class="leading-relaxed text-base mb-4"><u>4. Govt.Engineering College Raipur(GEC Raipur)</u></p></a>

        <a href =  
"../techsick/http://www.ssiet.co.in/"><p class="leading-relaxed text-base mb-4"><u>6. Shri Shankaracharya Institute of Engineering and Technology Bhilai(SSIET)</u></p></a>

        <a href =  
"../techsick/http://bitdurg.ac.in/"><p class="leading-relaxed text-base mb-4"><u>7. Bhilai Institute of Technology Durg(BIT)</u></p></a>

        <a href =  
"../techsick/http://www.bitraipur.ac.in/"><p class="leading-relaxed text-base mb-4"><u>8. Bhilai Institute of Technology Raipur(BIT)</u></p></a>

        <a href =  
"../techsick/https://cgiraipur.org"><p class="leading-relaxed text-base mb-4"><u>9. Columbia Institute of Engineering & Technology Raipur(CIET)</u></p></a>

        <a href =  
"../techsick/https://www.krutiindia.in"><p class="leading-relaxed text-base mb-4"><u>10. Kruti Institute of Technology and Engineering Raipur(KITE)</u></p></a>
        <p class="leading-relaxed text-base mb-4">And Others......</p>
        <a class="text-indigo-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="xl:w-1/2 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Cg Best Colleges For M.B.B.S.(Bechler of Medicine & bachler of Surgen)</h2>
        <a href =  
"../techsick/http://aiimsraipur.edu.in/"><p class="leading-relaxed text-base mb-4"><u>1. All India Institute of Medical Science Raipur(AIIMS Raipur)</u></p></a>
        <a href =  
"../techsick/http://www.ptjnmcraipur.in/"><p class="leading-relaxed text-base mb-4"><u>2. Govt. Pt. Jawahar Lal Nehru Memorial Medical College, Raipur</u></p></a>
        <a href =  
"../techsick/http://cimsbilaspur.ac.in/"><p class="leading-relaxed text-base mb-4"><u>3. Chhattisgarh Institute of Medical Sciences Bilaspur</u></p></a>
        <a href =  
"../techsick/http://www.gmcjagdalpur.ac.in/"><p class="leading-relaxed text-base mb-4"><u>4. Govt. Late Baliram Kashyap Memorial Government Medical College Jagadalpur</u></p></a>
        <a href =  
"../techsick/http://www.gmcrjn.in/"><p class="leading-relaxed text-base mb-4"><u>5. Govt. Medical College Rajnandgaon</u></p></a>
        <a href =  
"../techsick/http://www.govtdentalcollegeraipur.in/"><p class="leading-relaxed text-base mb-4"><u>6. Government Dental College And Hospital Raipur</u></p></a>
        <p class="leading-relaxed text-base mb-4">And Others......</p>
        <a class="text-indigo-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      
      <div class="xl:w-1/2 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Cg Best Colleges For Pharmasy(Medicine)</h2>
        <a href =  
"../techsick/https://www.gnscr.ac.in"><p class="leading-relaxed text-base mb-4"><u>1. Government Nagarjuna Post Graduate College of Science Raipur(science college raipur)</u></p></a>
        <a href =  
"../techsick/http://www.ssiet.co.in/"><p class="leading-relaxed text-base mb-4"><u>2. Shri Shankarachary Engineering college Bhilai</u></p></a>
        <a href =  
"../techsick/http://www.cgiraipur.org/"><p class="leading-relaxed text-base mb-4"><u>3. Colombia College Raipur</u></p></a>

        <a href =  
"../techsick/https://rit.edu.in/"><p class="leading-relaxed text-base mb-4"><u>4. Raipur Institute of Technology Raipur(RIT Raipur)</u></p>
        <p class="leading-relaxed text-base mb-4">And Others......</p>
        <a class="text-indigo-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="xl:w-1/2 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Cg Best Colleges For B.Sc.(bachler of Science)</h2>
        <a href =  
"../techsick/https://www.gnscr.ac.in"><p class="leading-relaxed text-base mb-4"><u>1. Government Nagarjuna Post Graduate College of Science Raipur(science college raipur)</u></p></a>
        <a href =  
"../techsick/https://govtsciencecollegedurg.ac.in
"><p class="leading-relaxed text-base mb-4"><u>2. Govt. V.Y.T.PG. Autonomous College, Durg(science college Durg)</u></p></a>
        <a href =  
"../techsick/http://ggu.ac.in/"><p class="leading-relaxed text-base mb-4"><u>3. Guru Ghasi das University Bilaspur(GGU)</u></p></a>
        <a href =  
"../techsick/https://www.google.com/search?q=kakatiya+collg+jdp"><p class="leading-relaxed text-base mb-4"><u>4. Govt. Kaktiya P. G. College Jagadalpur(Science jdp)</u></p></a>
        <p class="leading-relaxed text-base mb-4">And Others......</p>
        <a  class="text-indigo-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      </div>
      <div class="flex flex-wrap">
      
      <div class="xl:w-1/2 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Cg Best Colleges For B.Com.(bachler of Commerce)</h2>
        <a href =  
"../techsick/https://www.gnscr.ac.in"><p class="leading-relaxed text-base mb-4"><u>1. Government Nagarjuna Post Graduate College of Science Raipur(science college raipur)</u></p></a>
        <a href =  
"../techsick/https://govtsciencecollegedurg.ac.in
"><p class="leading-relaxed text-base mb-4"><u>2. Govt. V.Y.T.PG. Autonomous College, Durg(science college Durg)</u></p></a>
        <a href =  
"../techsick/http://ggu.ac.in/"><p class="leading-relaxed text-base mb-4"><u>3. Guru Ghasi das University Bilaspur(GGU)</u></p></a>
        <a href =  
"../techsick/https://www.google.com/search?q=kakatiya+collg+jdp"><p class="leading-relaxed text-base mb-4"><u>4. Govt. Kaktiya P. G. College Jagadalpur(Science jdp)</u></p></a>
        <p class="leading-relaxed text-base mb-4">And Others......</p>
        <a  class="text-indigo-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>

      
      <div class="xl:w-1/2 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Cg Best Colleges For B.A.(bachler of Arts)</h2>
        <a href =  
"../techsick/https://www.gnscr.ac.in"><p class="leading-relaxed text-base mb-4"><u>1. Government Nagarjuna Post Graduate College of Science Raipur(science college raipur)</u></p></a>
        <a href =  
"../techsick/https://govtsciencecollegedurg.ac.in
"><p class="leading-relaxed text-base mb-4"><u>2. Govt. V.Y.T.PG. Autonomous College, Durg(science college Durg)</u></p></a>
        <a href =  
"../techsick/http://ggu.ac.in/"><p class="leading-relaxed text-base mb-4"><u>3. Guru Ghasi das University Bilaspur(GGU)</u></p></a>
        <a href =  
"../techsick/https://www.google.com/search?q=kakatiya+collg+jdp"><p class="leading-relaxed text-base mb-4"><u>4. Govt. Kaktiya P. G. College Jagadalpur(Science jdp)</u></p></a>
        <p class="leading-relaxed text-base mb-4">And Others......</p>
        <a  class="text-indigo-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      </div>
    </div>
    <a href =  
"../techsick/aboutus.php?data=<?=$a?>">
    <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">About Us</button></a>
  </div>
</section>
<br>
<hr>
<form action="bestcolleges.php" method="post">
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">

      <div class="mb-4">
        <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
          Username
        </label>
        <input class="shadow appearance-none border rounded w-half py-2 px-3 text-green-500" name="user" type="text" value="<?php echo($a); ?>">
      </div>
    
      <div class="mb-6">
        <label class="block text-grey-darker text-sm font-bold mb-2" for="text">
          comment
        </label>
        <input class="shadow appearance-none border rounded w-full py-3 px-5 text-green-500" name="feed" type="text" placeholder="write something....!">
      </div>
    <div class="flex items-center justify-between">
      
    <button class="inline-flex items-center bg-green-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Submit
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
    </div>
    
</div>
</form>
<br>
<hr>

<footer class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap md:text-left text-center order-notes">
    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <b><p class="text-grey text-sm mt-2 md:text-left text-center">
          <br class="lg:block hidden">Give your valuable feedback
        </p></b>
        <br><br>
        <a href =  
"../techsick/mailto:techsickcommunity@gmail.com?subject=Feedback Regarding the www.techsickcommunity.tech website!&body=To,\nThe ts-community administration,\nRaipur.\n\nRsp sir,\n">
          <button class="ml-4 inline-flex text-black-700 bg-blue-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Feedback</button></a>
      </div>
    </div>
  </div>
  <div class="bg-green-500">
    <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
      <a href =  
"../techsick/home.php?data=<?=$a?>" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="../techsick/techsicklogo_tscommunity.webp" height="50" width="50">
      <span class="ml-3 text-xl" style="color: white;">TechsickCommunity</span>
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