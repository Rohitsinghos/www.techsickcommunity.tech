<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="There is General Knoledge quiz for beginner and master as well." />
  <meta name="keywords" content="General knoledge Quiz - TechsickCommunity Raipur">
  <meta name="author" content="Singh sir">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "icon" href =  
"../techsick/techsicklogo_tscommunity.webp" 
        type = "image/x-icon"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style>
*, *::before, *::after{
	box-sizing: border-box;
	/*font-family: Gotham Rounded;*/
}

:root{
	--hue-neutral:200;
	--hue-wrong: 0;
	--hue-correct:145;
}

body{
	--hue: var(--hue-neutral);
	padding: 0;
	margin: 0;
	display: flex;
	width: 100vw;
	height: 100vh;
	justify-content: center;
	align-items: center;
	background-color: hsl(var(--hue),80%,20%);
}

body.correct{
	--hue: var(--hue-correct);
}

body.wrong{
	--hue: var(--hue-wrong);
}

.container{
	width: 600px;
 max-width: 95%;
 background-color: white;
 border-radius: 5px;
 padding: 10px;
 padding-top: 10px;
 box-shadow: 0 0 10px 2px;
 font-weight: bold;
 font-size: 1.2rem;
}



.btn-grid{
    display: grid;
    grid-template-columns: repeat(2,auto);
    gap:20px;
    margin: 40px 0;
}

.btn{
	--hue: var(--hue-neutral);
	border: 2px solid hsl(var(--hue),100% ,30%);
	background-color: hsl(var(--hue),100% ,50%);
	border-radius: 20px;
	padding: 10px 20px;
	color: white;
	outline: none;
}

.btnn{
	--hue: var(--hue-neutral);
	border: 5px solid hsl(var(--hue),100% ,30%);
	background-color: hsl(var(--hue),100% ,50%);
	border-radius: 10px;
	padding: 20px 20px;
	margin-right: 10px;
	margin-left: 10px;
	color: white;
	outline: none;
}

.btn:hover{
  border-color: black;
}

.correct{
	--hue: var(--hue-correct);
	color: black;
}

.wrong{
	--hue:var(--hue-wrong);
}

.start-btn,.next-btn{
	font-size: 1.2rem;
	font-weight: bold;
	padding: 10px 20px;
}

.controls{
	display: flex;
	justify-content: center;
}
.resBut{
	justify-content: center;
	align-items: center;
}

.hide{
	display: none;
}</style>
	<title>Quiz App</title>
</head>
<body >
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
	<div class="container">
		<div id='question-container' class="hide">
			<div id="que">Question</div>
			<div id="answer-button" class="btn-grid">
				<button id="ans1" class="btn">Answer 1</button>
				<button id="ans2" class="btn">Answer 2</button>
				<button id="ans3" class="btn">Answer 3</button>
				<button id="ans4" class="btn">Answer 4</button>
			</div>
		</div>
		<div class="controls">
			<button id="check-btn" class="next-btn btnn hide">Check</button>
			<button id="next-btn" class="next-btn btnn hide">Next</button>
			<button id="res-btn" class="start-btn hide">Result</button>
			
		</div>
		<br>
		<div class="controls">
			<button id="finish-btn" class="start-btn btnn hide"><a href =  
"../techsick/quiz.php?data=<?=$a?>" class="mr-5 hover:text-gray-900" style="color: white;">Finish</a></button>
			
			<button id="start-btn" class="start-btn btnn">Start</button>
			
		</div>
		
		</div>
	</div>
	<script>
		let permi=true;
		let result=0;
		const startButton = document.getElementById('start-btn')
		const finishButton = document.getElementById('finish-btn')
const questionContainer = document.getElementById('question-container')
const questionElement = document.getElementById('que')
const answButtonEle=document.getElementById('answer-button')
const nextButton=document.getElementById('next-btn')
const checkButton=document.getElementById('check-btn')
const resButton=document.getElementById('res-btn')
const ans1=document.getElementById('ans1')
const ans2=document.getElementById('ans2')
const ans3=document.getElementById('ans3')
const ans4=document.getElementById('ans4')


let checked=[false,false,false,false,false,false,false,false,false,false];

let x=0;

ans1.addEventListener('click',check1)
ans2.addEventListener('click',check2)
ans3.addEventListener('click',check3)
ans4.addEventListener('click',check4)

startButton.addEventListener('click', startGame)
nextButton.addEventListener('click', checkbe)
checkButton.addEventListener('click', checkAns)


function startGame() {
	if (x==0){
		result=0;
		console.log('Quiz game start')
		resButton.classList.add('hide');
		startButton.classList.add('hide')
	
		questionContainer.classList.remove('hide')
		nextButton.classList.remove('hide')
		checkButton.classList.remove('hide')
	}



    if(x<10){
    	questionElement.textContent=(x+1)+". "+questions[x].question;
        ans1.textContent=questions[x].answers[0].text;
        ans2.textContent=questions[x].answers[1].text;
        ans3.textContent=questions[x].answers[2].text;
        ans4.textContent=questions[x].answers[3].text;
         x++;

    }
    else{
    	resButton.textContent="Result -> "+result+"/100"
    	resButton.classList.remove('hide');
    	console.log('Finished')
	    finishButton.classList.remove('hide')
	    questionContainer.classList.add('hide')
		nextButton.classList.add('hide')
		checkButton.classList.add('hide')
    }

   
}

function checkbe() {
		OkKar();
	
	startGame();
}

function OkKar() {
	x--;
       permi=true;
        
	    if(ans1.textContent=questions[x].answers[0].correct){
	    	ans1.classList.remove('correct')
	    }else{
	    	ans1.classList.remove('wrong')
	    }

	    if(ans2.textContent=questions[x].answers[1].correct){
	    	ans2.classList.remove('correct')
	    }else{
	    	ans2.classList.remove('wrong')
	    }

	    if(ans3.textContent=questions[x].answers[2].correct){
	    	ans3.classList.remove('correct')
	    }else{
	    	ans3.classList.remove('wrong')
	    }

	    if(ans4.textContent=questions[x].answers[3].correct){
	    	ans4.classList.remove('correct')
	    }else{
	    	ans4.classList.remove('wrong')
	    }



     x++;


}

function check1() {
	if(permi){
		if(questions[x-1].answers[0].correct){
		    	ans1.classList.add('correct')
			result+=10;
		}else{
		    	ans1.classList.add('wrong')
		}
		permi=false;
	}
}
function check2() {
	if(permi){
			if(questions[x-1].answers[1].correct){
			    	ans2.classList.add('correct')
			    	result+=10;
			 }else{
			    	ans2.classList.add('wrong')
			 }
			 permi=false;
			 
	}
}
function check3() {
	if(permi){
			if(questions[x-1].answers[2].correct){
		    	ans3.classList.add('correct')
		    	result+=10;
		    }else{
		    	ans3.classList.add('wrong')
		    }
		    permi=false;
	}
}
function check4() {
	if(permi){
		if(questions[x-1].answers[3].correct){
		    	ans4.classList.add('correct')
		    	result+=10;
		 }else{
		    	ans4.classList.add('wrong')
		 }
		 permi=false;
	}
}


function checkAns() {
  
	x--;
	permi=false;

	checked[x]=true;


	    if(questions[x].answers[0].correct){
	    	ans1.classList.add('correct')
	    }else{
	    	ans1.classList.add('wrong')
	    }

	    if(questions[x].answers[1].correct){
	    	ans2.classList.add('correct')
	    }else{
	    	ans2.classList.add('wrong')
	    }

	    if(questions[x].answers[2].correct){
	    	ans3.classList.add('correct')
	    }else{
	    	ans3.classList.add('wrong')
	    }

	    if(questions[x].answers[3].correct){
	    	ans4.classList.add('correct')
	    }else{
	    	ans4.classList.add('wrong')
	    }

     x++;
}


const questions = [
		{		question: 'What is the length of ganga river?',
				answers: [
					{text: '2720 km', correct: false },
					{text: '2940 km', correct: false },
					{text: '2510 km', correct: true },
					{text: '2630 km', correct: false }
				]

		},
		{		question: 'Recently completed 5 lakh vaccination of Covid-19, who is the notes state to do?',
				answers: [
					{text: 'Dilhi', correct: false },
					{text: 'chhattisgarh', correct: false },
					{text: 'Madhyapardesh', correct: false },
					{text: 'Uttarpardesh', correct: true }
				]

		},
		{		question: 'The biggest producer of fish in the world is?',
				answers: [
					{text: 'Japan', correct: false },
					{text: 'India', correct: false },
					{text: 'China', correct: true },
					{text: 'Shrilanka', correct: false }
				]

		},
		{		question: 'When had notes ever indian kranti?',
				answers: [
					{text: '1823', correct: false },
					{text: '1857', correct: true },
					{text: '1880', correct: false },
					{text: '1920', correct: false }
				]

		},
		{		question: "Who is India's Finanace Minister?",
				answers: [
					{text: 'Amit shah', correct: false },
					{text: 'Venkaiya nayadu', correct: false },
					{text: 'Rajnath singh', correct: false },
					{text: 'Nirmala sitaraman', correct: true }
				]

		},
		{		question: 'When was ISRO founded?',
				answers: [
					{text: '1969', correct: true },
					{text: '1958', correct: false },
					{text: '1965', correct: false },
					{text: '1972', correct: false }
				]

		},
		{		question: 'when we celebrate Science day?',
				answers: [
					{text: '1 december', correct: false },
					{text: '28 febrary', correct: true },
					{text: '5 june', correct: false },
					{text: '21 june', correct: false }
				]

		},
		{		question: 'Recently when National Woman day has been celebrated?',
				answers: [
					{text: '14 febrary', correct: false },
					{text: '12 febrary', correct: false },
					{text: '11 febrary', correct: false },
					{text: '13 febrary', correct: true }
				]

		},
		{		question: 'Who is Now the Governor of RBI?',
				answers: [
					{text: 'Nirmala Shitaraman', correct: false },
					{text: 'Raghuram Rajan', correct: false },
					{text: 'Urjit patel', correct: false },
					{text: 'Shaktikant Das', correct: true }
				]

		},
		{		question: 'What is the capital of the counrty brazil?',
				answers: [
					{text: 'Buenos Aires', correct: false },
					{text: 'Vienna', correct: false },
					{text: 'Beijing', correct: false },
					{text: 'Brasilia', correct: true }
				]

		}
]
	</script>
</body>
</html>

