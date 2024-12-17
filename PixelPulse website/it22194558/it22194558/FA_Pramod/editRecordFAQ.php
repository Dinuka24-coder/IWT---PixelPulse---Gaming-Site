<?php
	require 'config.php';
	
	$FAQId = $_GET['id'];
	$Name =$_GET['name'];
	$Email = $_GET['email'];
	$des = $_GET['qdes'];
	
?>




<html>
<head>

<link rel="stylesheet" href="Stlye1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	
	
</head>
<title>FAQ</title>

<body>
<ul class="navbar">

<li><a href="#">Home</a></li>
<li><a href="#">Games</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">FAQ</a></li>
<li><a href="#">Feedback</a></li>
<li id="logo"><a href="#"> <img src="profile1.png" width="35px" height="35px"></a></li>
	<br><p class="test1"><strong><a href="#">Login</a> / <a href="#">Register</a></strong></p>
</ul>

	
	<div class="imgg"  align="center" >
	<img  src="faqq.jpeg" width="100%" height="150px" >
	
	
	</div>
	
<div class="container1">
  <img src="fg.jpeg" alt="Norway" style="width:100%;" height="550">
  <div class="centered"><h2 class="headerc" ><br>What is Pixelpulse ?</h2>
	
	
		

		<div class="athule">PixelPulse is an immersive online gaming platform that caters to the needs of gamers from all walks of life.</div>
	<h3>PixelPulse Gaming: Where Pixels Come to Life</h3>

PixelPulse is an immersive online gaming platform that caters to the needs of gamers from all walks of life. Here's what you can expect:

	<h3>1. Diverse Game Library: At PixelPulse,</h3> we pride ourselves on offering a vast and diverse collection of games spanning various genres. Whether you're into action, strategy, role-playing, or casual games, we have something to satisfy your gaming cravings.

		<h3>2. Cross-Platform Play:</h3> <div class="athule">Our gaming site is designed to bridge the gap between different gaming platforms. You can play with friends on different devices, whether it's PC, Mac, console, or mobile, and enjoy seamless cross-platform experiences.</div>

		<h3>3. Social Gaming Community:</h3><div class="athule"> PixelPulse isn't just about gaming; it's about connecting with other like-minded gamers. Join discussions, make new friends, and team up with players from around the world through our community forums and chat features.</div>

		<h3>4. Regular Tournaments and Events: </h3><div class="athule">Get ready to test your skills and compete against the best. PixelPulse hosts regular tournaments and special events with exciting prizes up for grabs. Prove your gaming prowess and climb the leaderboards.</div>
		<h3>5. User-Generated Content: </h3><div class="athule">We encourage our users to contribute to the gaming experience. Share your game mods, custom levels, and content with the community. Let your creativity shine and leave your mark on the gaming world.</div></div>
   

	
	
		</div></div>
	
<div class="warap1">
		<div class="ques">1. How do I create an account on Pixelpulse?</div>

Creating an account on a fictional gaming website like "PixelPulse" would typically involve a straightforward registration process. Here are the general steps to create an account:
<br>


1. **Find the Sign-Up Button:** Look for a "Sign Up" or "Create Account" button or link. This is usually located at the top of the homepage or in a prominent location for easy access.<br>

2. **Provide Information:**<br>
   - **Username:** Choose a unique username that you'll use to log in.<br>
   - **Password:** Create a strong and secure password.<br>
   - **Email:** Enter a valid email address for account verification and communication purposes.<br>

3. **Submit Your Information:** Click the "Sign Up" or "Create Account" button after filling in the required information.<br>

4. **Set Up Your Profile (Optional):** You might have the option to customize your profile by adding a profile picture, personal information, or gaming preferences. This step is often optional.<br><br>

		<div class="ques">2. Is it free to join Pixelpulse?</div>

Yes it is , Pixelpulse is free to join.<br><br>
		<div class="ques">3. What types of games are available on Pixelpulse?</div>

Educational,Funny and Learning games.<br><br>
		<div class="ques">4. Can I play games on Pixelpulse on my mobile device?</div>

Yes,tou can play any games on Macbook,Iphone,Phones also Tablets and Ps5.<br><br>
<div class="ques">5. Are the games on Pixelpulse available for download, or do I play them online?</div>
		Both are here, if you prefer to play online you can play it online , if you want to downlord you can download .

</div>
	
	
	
	
	<div class="container1">
<div class="centered1">
	
    <h2 >Any Questions
	</h2><br><br></div>
		
	<div class="centered6">	
	<div class="formfq">
		<form action="SubmiteditFaq.php" method="post">
		
		
		<label>FAQ Id</label><br>
			<div class="inputfaq">
			<input type="text" value="<?php echo "$FAQId" ?>"  name="faqid" readonly>
			</div>
		
		
			<label>Name</label><br>
			<div class="inputfaq">
			<input type="text" value="<?php echo "$Name" ?>" name="Name">
			</div>
			
			<label>Email</label><br>
			<div class="inputfaq">
			<input type="email" value="<?php echo "$Email" ?>" name="Email">
			</div>
			
			<label>Question</label><br>
			<textarea class="textarea" value="<?php echo "$des" ?>" name="qdes">
				</textarea>
			
			<div class= "btnn" align="center">
				<input type="submit" value="Submit" class="btn">
				</div>
			
	
		</form>
	</div>
		
		
		
		
		</div>
  <img src="hhhh.jpeg" alt="halo" style="width:550px;" height="550px" class="img2">
	  </div>
	
	
  
	
	
	
	
	
	
<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>contact</h4>
  	 			<ul>
 				  <li><a href="#">pixelpulse@gaming.com&nbsp;</a></li>
  	 				<li><a href="#">Tel : 0112-234-55&nbsp;</a></li>
  	 				<li><a href="#">Newyork, USA</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>License &amp; Terms&nbsp;</h4>
  	 			<ul>
 				  <li><a href="#">Privacy policy</a></li>
  	 				<li><a href="#">Terms of use</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Company</h4>
  	 			<ul>
 				  <li><a href="#">about us</a></li>
  	 				<li><a href="#">contact us</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
  	 				<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
  	 				<a href="https://lk.linkedin.com/?original_referer=https%3A%2F%2Fwww.google.com%2F"><i class="fab fa-linkedin-in"></i></a>
					
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
	 <p class="copy1">
					<br><br>&copy; 2023 PixelPulse. All Rights Reserved.</p>
  </footer>


</body>
</html>