<!doctype html>
<html>
<head>
  <meta charset="UTF-8" >
  <meta name="description" content="We are a Community of engineers and others of Raipur....we believe in work. we want to make a platform for all individuals for knoledge!" >
  <meta name="keywords" content="About Us - TechSick Community Raipur">
  <meta name="author" content="Deepika Sahu">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
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
"../techsick/aboutus.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;"><b><u>About Us</u></b></a>
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

<b><h2> Updated - 12 April 2021(Per Month)</h2></b>
<br>
<center>
<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">***Techsick Community Raipur</h1></center>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Why we made website?</h1>
      <p class="mb-8 leading-relaxed">The last time of semester/year ,we have only few time to study for exam, No time to work hard.we have to work smart means----Notes. And topper shit.    So we thought to distribute notes to all so how...<u><a href =  
"../techsick/home.php?data=<?=$a?>"><b>"website"</b></a></u></p>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="something went wrong!" src="../techsick/web_tscommunity.webp">
    </div>
  </div>
</section>
<hr>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Why we made Community?</h1>
      <p class="mb-8 leading-relaxed">Ajay thought ,we was in 1st year so we are all together. but after this we will depart by Branches(bcom,bba,Bca,civil,Cs,Electrical,ET&t).   So we thought to make something to make us together so...<u><a href =  
"../techsick/aboutus.php?data=<?=$a?>"><b>"community"</b></a></u> And sincerely we are not so good friends but Friends ;)</p>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="something went wrong!" src="../techsick/community_tscommunity.webp">
    </div>
  </div>
</section>
<hr>

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Other Questions -</h1>
      <a href =  
"../techsick/techsick.php?data=<?=$a?>"><p class="mb-8 leading-relaxed"><b><u>1. what we thing about techsick and why we took for name of our community??</p></u></b></a>

      <p class="mb-8 leading-relaxed"><a href =  
"../techsick/community.php?data=<?=$a?>"><b><u>2. what we thing about Community and why we made Community??</u></b></a></p>
    </div>
  </div>
</section>
<hr>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="../techsick/rohit_tscommunity.webp">
          <p class="leading-relaxed">"Such website that made our Engg well, we are thankful to them. And wanted to do like them. For our type individuals."</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Rohit Singh</h2>
          <p class="text-gray-500">Devoloper</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="../techsick/chandan_tscommunity.webp">
          <p class="leading-relaxed">"We are working on make it for all. Our team is working hard to make it. with small small steps makes big.I hope ,we will get that soon."</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Chandan Meriha</h2>
          <p class="text-gray-500">Manager</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="../techsick/ajay_tscommunity.webp">
          <p class="leading-relaxed">"If it will help any one individual it will be alot for us. And have any suggestion, please give feedback. We always appreciate that!"</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Ajay Pujari</h2>
          <p class="text-gray-500">Influencer</p>
        </div>
      </div>
    </div>
  </div>
</section>

<br>
<hr>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Our Team</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Individual commitment to a group effort--that is what makes a team work, a company work, a society work, a civilization work.</p>
    </div>
    <div class="flex flex-wrap -m-2">
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="../techsick/chandan_tscommunity.webp">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">Chandan Meriha</h2>
            <p class="text-gray-500">Manager</p>
            <p class="text-gray-500">chandanmeriha9074@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="../techsick/rohit_tscommunity.webp">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">Rohit Singh</h2>
            <p class="text-gray-500">Developer</p>
            <p class="text-gray-600">rohitsinghos2001@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="../techsick/ajay_tscommunity.webp">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">Ajay Pujari</h2>
            <p class="text-gray-500">Influencer</p>
            <p class="text-gray-600">jaypujari100@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="../techsick/https://dummyimage.com/90x90">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">Deepika Sahu</h2>
            <p class="text-gray-500">Editor</p>
            <p class="text-gray-500">deepikasahu1002@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="../techsick/https://dummyimage.com/94x94">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">Sourabh Markam</h2>
            <p class="text-gray-500">Analyst</p>
            <p class="text-gray-500">saurabhmarkam4@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>

<hr>
<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="../techsick/https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
          <p class="mt-1">Vidhan Sabha, Raipur, Chhattisgarh INDIA</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
          <a href =  
"../techsick/mailto:techsickcommunity@gmail.com?subject=Feedback Regarding the www.techsickcommunity.tech website!&body=To,\nThe ts-community administration,\nRaipur.\n\nRsp sir,\n" class="text-green-500 leading-relaxed">techsickcommunity@gmail.com</a>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
          <p class="leading-relaxed">+91 9174313601</p>
          <p class="leading-relaxed">+91 9399274490</p>
          <p class="leading-relaxed">+91 9074710297</p>
        </div>
      </div>
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
</section>


<footer class="text-gray-600 body-font">
    
  <div class="bg-green-500">
    <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
      <a href =  
"../techsick/home.php?data=<?=$a?>" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
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