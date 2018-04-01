<!DOCTYPE html>
<html>
<head>
<title>SimpleTut - Contact</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?combine=0" rel="stylesheet">
<link href="css/default.min.css" rel="stylesheet" type="text/css" />

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/handlebars-v4.0.10.js"></script>
<script type="text/javascript" src="js/scripts.min.js" defer></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">


		function formSubmit(){
		  return false;
		}

        var onSubmit = function(token) {
          
          document.getElementById('contact_form').addEventListener('submit', function() {
          		
          		var Get_FirstName = $('#FirstName').val(),
          			Get_LastName = $('#LastName').val(),
          			Get_Email = $('#Email').val(),
          			Get_Message = $('#Message').val();
				
				$.ajax({

					type: 'POST',
					url: './projectAssets/email/contact_form.php',
					data: {
						'ContactFormDetails' : '1',
						'FirstName': Get_FirstName, 
						'LastName': Get_LastName,
						'Email': Get_Email,
						'Message': Get_Message
					},
					success: function(data){
						
						$('.success-label').fadeIn();
						$('#FirstName').val(''),
	          			$('#LastName').val(''),
	          			$('#Email').val(''),
	          			$('#Message').val('');
					}

				});

		  });
        };

        var onloadCallback = function() {
          grecaptcha.render('captcha', {
            'sitekey' : '6Ldg9SQUAAAAACbcFsEQgBvzey9AGvRFVLgjG_mn',
            'callback' : onSubmit,
            'theme': "dark"
          });
        };
    </script>

</head>

<body>

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-6387725970957053",
	    enable_page_level_ads: true
	  });
	</script>
	
	<header>

	<div class="logo">
		<a href="https://simpletut.com/">
			<img src="./projectAssets/graphics/logo.png">
		</a>
	</div>

	<div class="actions">

		<nav>
			<ul>
				<li class="first">
					<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JH32E9Y3DCFME" target="_blank">
						Donate
					</a>
				</li>
				<li class="shortlist">
					<div id="watchLater_wrap">
					<div class="overlay"></div>
					<div class="headline">
					Watch later <span class="count">(0)</span>
					</div>
					<div class="toggle" style="display: none;">
						<div class="title">
							Saved videos
						</div>
						<ul>
						
						</ul>
					</div>
					

					</div>
				</li>
				<li class="last mobile">
					<span class="menu">

					</span>
				</li>
			</ul>
		</nav>

	</div>

</header>
	<div class="container-fluid">

		<aside id="side_col_left">

	<div class="main_nav">
	
		<nav>

			<ul>
				<li class="first">
					<a href="https://simpletut.com/"
					class="non_active">
						Home
					</a>
				</li>
				<li>
					<a href="https://simpletut.com//browse.php"
					class="non_active">
						Browse tutorials
					</a>
				</li>
				<li class="last">
					<a href="https://simpletut.com//contact.php"
					class="active">
						Contact
					</a>
				</li>
			</ul>

		</nav>

	</div>

	<div class="social">
			<nav>
				<ul>
					<li class="first">
						<a href="https://www.facebook.com/SimpleTut/" target="_blank" class="fb">
							Facebook
						</a>
					</li>
					<li>
						<a href="https://twitter.com/simpletut" target="_blank" class="tw">
							Twitter
						</a>
					</li>
					<li class="last">
						<a href="https://www.youtube.com/user/SimpleTutsOnline" target="_blank" class="yt">
							Youtube
						</a>
					</li>
				</ul>
			</nav>
		</div>

</aside>
		<section id="main">

			<div class="content">

				<div class="success-label" style="display: none;">
					Sent!
			  	</div>

			  	<div class="google_leaderboard">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- SimpleTutv3 Responsive -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-6387725970957053"
					     data-ad-slot="5123223580"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>

				<div id="contact_us">

					<h1>Contact us</h1>

					<form id="contact_form" onsubmit="return formSubmit();">
							
						<div class="form_wrap">


							<div class="form_row">

								<label>
									First name
								</label>

								<div class="form_input">
									<input type="text" name="FirstName" id="FirstName" placeholder="First name" required="required">
								</div>

							</div>

							<div class="form_row">

								<label>
									Last name:
								</label>

								<div class="form_input">
									<input type="text" name="LastName" id="LastName" placeholder="Last name" required="required">
								</div>

							</div>

							<div class="form_row">

								<label>
									Email:
								</label>

								<div class="form_input">
									<input type="email" name="Email" id="Email" placeholder="Email" required="required">
								</div>

							</div>

							<div class="form_row textarea">

								<label>
									Message:
								</label>

								<div class="form_input">
									<textarea id="Message" name="Message" placeholder="Message" required="required"></textarea>
								</div>

							</div>

							<div class="form_row " id="captcha">

							</div>

							<div class="form_buttons">

								<div class="form_input">
									<input type="submit" value="Send" name="submit" id="submit" class="btn">
								</div>
								
							</div>

						</form>

                        </div>	
                        
				</div>

			</div>
			
<footer>
				
	&copy; 2018 Dennis Bazanye. All Rights Reserved.

</footer>


		</section>


	</div>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>

</body>
</html>