<?php 
session_start();
if ($_SESSION['jeevanEmail']==''){header("Location:index.php");}else{
	include('components/header.php');
	include('components/navbar.php');
	}?>
		<div class="page-wrapper">
			<!-- aside dropdown start-->
			
			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="img/volunteer.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/volunteer.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"><span>Compassion</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Jeevan Organ Donation</span>
										<h1 class="promo-primary__title"><span>FAQ</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- faq start-->
				<section class="section faq">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-12">
								<div class="heading heading--primary"><span class="heading__pre-title">Faq</span>
									<h2 class="heading__title no-margin-bottom"><span>General</span> <span>Questions</span></h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 col-xl-9">
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">If I agree to donate my organs, the hospital staff would not work as hard to save my life</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>When you go to the hospital for treatment, doctors focus on saving your life. The medical team treating you is separate from the transplant team. The team coordinating the donation is not notified until all lifesaving efforts have failed and death has been determined. The transplant team will not be notified until your family has consented to organ donation.</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">Maybe I would not be dead when they sign my death certificate</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>Although it is a popular topic in the tabloids, in reality, people do not start to wiggle their toes after they are declared dead. People who have agreed to organ donation are given more tests (at no charge to their families) to determine that they are truly dead than those who haven't agreed to organ donation.</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">Organ donation is against my religion</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>Although some may believe that organ donation goes against their religious beliefs, it is important to recognize that the majority of organized religions support this practice. Many religions view organ donation as a generous and selfless act that is ultimately up to the individual to decide. So while personal beliefs may vary, it's worth considering the perspective of one's religion and the potential impact that organ donation can have on saving lives.</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">I am under the age of 18. I am too young to make this decision.</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>That is true, in a legal sense. But your parents can authorize this decision. You can express to your parents your wish to donate, and your parents can give their support knowing that it is what you want. Children, too, require organ transplants, and they usually need organs smaller than those an adult can provide.</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">I am too old to donate. Nobody would want my organs.</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>There is no defined cut-off age for donating organs. Organs have been successfully transplanted from donors in their 70s and 80s. The decision to use your organs is based on strict medical criteria, not age. Please do not disqualify yourself prematurely. Let the doctors decide at your time of death whether your organs and tissues are suitable for transplantation. There is no age limit when it comes to donating. My organs, just like anyone else's, hold immense value and can bring hope to those who need them.</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">Rich and famous people go to the top of the list when they need a donor</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>Celebrities are not given priority when it comes to organ allocation.
</br>-Jeevan is responsible for maintaining the organ transplant network and waiting list.
</br>-The organ allocation system is blind to social status and wealth.
</br>-Severity of illness, time spent waiting, blood type, and medical information are what count when waiting for a donor organ.
</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">I heard that they take everything, even if I only want to donate my eyes.</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>You may specify which organs you want to be donated. Your wishes will be followed</p>
									</div>
								</div>
								<div class="accordion accordion--primary">
									<div class="accordion__title-block">
										<h6 class="accordion__title">I am not in the best of health. Nobody would want my organs or tissues.</h6><span class="accordion__close"></span>
									</div>
									<div class="accordion__text-block">
										<p>Very few medical conditions automatically disqualify you from donating organs. The decision to use an organ is based on strict medical criteria. It may turn out that certain organs are not suitable for transplantation, but other organs and tissues may be fine. Please do not disqualify yourself prematurely. Only medical professionals at the time of your death can determine whether your organs are suitable for transplantation</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-xl-3">
								<div class="faq-aside"><img class="img--bg" src="img/projects_6.jpg" alt="img"/>
									<h5 class="faq-aside__title">Any Question?</h5>
									<p>Confussed on making a decision? feel free to ask us</p><a class="faq-aside__link" href="#">ASk Us</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- faq end-->
				<!-- bottom bg start-->
				<section class="bottom-background background--brown">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bottom-background__img"><img src="img/bottom-bg.png" alt="img"/></div>
							</div>
						</div>
					</div>
				</section>
				<!-- bottom bg end-->
			</main>
			<?php include('components/footer.php');?>
			<!-- footer end-->
		</div>
		<!-- libs-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="js/libs.min.js"></script>
		<!-- scripts-->
		<script src="js/common.min.js"></script>
		
	</body>
</html>