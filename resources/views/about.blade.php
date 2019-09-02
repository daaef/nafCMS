<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Nigerian Air Force">
	<meta name="author" content="http://airforce.mil.ng/">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Nigerian Air Force | About</title>
	<!-- Calling Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/assets/pages/img/favicon.png">
	<!-- Calling Favicon -->
	<!-- ********************* -->
	<!-- CSS files -->
	<link rel="stylesheet" href="/assets/pages/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/pages/css/animate.css">
	<link rel="stylesheet" href="/assets/pages/css/all.min.css">
	<link rel="stylesheet" href="/assets/pages/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/assets/pages/css/nice-select.css">
	<link rel="stylesheet" href="/assets/pages/css/magnific-popup.css">
	<link rel="stylesheet" href="/assets/pages/css/meanmenu.css" media="all">
	<link rel="stylesheet" href="/assets/pages/css/default.css">
	<link rel="stylesheet" href="/assets/pages/css/style.css">
	<link rel="stylesheet" class="color-changing" href="/assets/pages/css/color.css">
	<link rel="stylesheet" href="/assets/pages/css/responsive.css">
	<!-- End CSS files -->
</head>

<body>
<!-- Preloader start -->
<div class="loader-page flex-center">
	<img src="/assets/pages/img/loader.gif" alt="">
</div>
<!-- Preloader end -->
<!-- Header start -->

<header class="transperant-head transition-4 ">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-2 col-md-5 col-sm-4 col-5">
				<div class="logo transition-4">
					<a href="index-2.html">
						<img src="/assets/pages/img/logo/logo.png" class="transition-4" alt="logo">
					</a>
				</div>
			</div>
			<div class="col-lg-10 col-md-7 col-sm-8 col-7">
				<div class="icon-links d-flex align-items-center">
					<a href="#" class="search-icon d-none d-sm-block" data-toggle="modal" data-target="#searchModal">
						<i class="fas fa-search"></i>
					</a>
					<a href="#" class="btn btn-round d-none d-sm-block blob-small">CONTACT US</a>
				</div>
				<div class="menu-links">
					<nav class="main-menu white">
						<ul>
							<li>
								<a href="/">Home</a>
							</li>
							<li class="active">
								<a href="{{ route('about-us') }}">About Us <i class="fas fa-angle-down"></i></a>
								<ul class="submenu">
									<li><a href="{{ route('history') }}">History of NAF</a></li>
									<li><a href="#">International Liaison</a></li>
									<li>
										<a href="#" class="sub-2">Organisation</a>
										<ul class="submenu">
											<li><a href="#">NAF Structure</a></li>
											<li><a href="#">Direct Reporting Units</a></li>
											<li><a href="#">Service HQ</a></li>
											<li><a href="#">Commands</a></li>
										</ul>
									</li>
									<li><a href="#">Vision and Mission</a></li>
									<li>
										<a href="#">Chief of Air Staff</a>
									</li>
									<li>
										<a href="#">Senior Commanders</a>
									</li>
									<li>
										<a href="#">Former CAS</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Careers</a>
							</li>
							<li>
								<a href="#">News</a>
							</li>
							<li>
								<a href="#">Media</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-12">
				<div class="mobile-menu"></div>
			</div>
		</div>
	</div>
</header>

<div class="search-popup modal" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
	 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<form action="#">
					<div class="form-group relative">
						<input type="text" class="form-control input-search" id="search" placeholder="Search here...">
						<i class="fas fa-search transform-v-center"></i>
					</div>
				</form>

			</div>
		</div>
	</div>
	<i class="fas fa-times close-search-modal" data-dismiss="modal" aria-label="Close"></i>
</div>
<!-- Header end -->

<!-- immer banner start -->
<section class="inner-banner pt-80 pb-95" style="background-image: url('/assets/pages/img/pagetop2.png');" data-overlay="7">
	<div class="container">
		<div class="row z-5 align-items-center">
			<div class="col-md-8 text-center text-md-left">
				<h1 class="f-700 color-white">About Us</h1>
				<span class="bg-light-white d-none d-md-inline-block"></span>
			</div>
			<div class="col-md-4 text-center text-md-right">
				<nav aria-label="breadcrumb" class="banner-breadcump">
					<ol class="breadcrumb justify-content-center">
						<li class="breadcrumb-item"><a href="/"><i class="fas fa-home fs-12 mr-5"></i>Home</a>
						</li>
						<li class="breadcrumb-item font-weight-bold active" aria-current="page"><a href="{{ route('about-us') }}">About Us</a>
						</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>

<!-- blog details area start -->
<section class="service-details pt-100 pb-100">
	<div class="container">
		<div class="row ">
			<!-- right-part -->
			<div class="col-xl-4 col-lg-5 mb-md-60">
				<div class="right-box mb-30">
					<div class="right-box-head">
						<h4>Useful Links</h4>
					</div>
					<div class="right-box-content">
						<div class="categories mb-5">
							<ul>
								<li>
									<a class="font-weight-bold"  href="{{ route('about-us') }}">About Us
									</a>
								</li>
								<li>
									<a href="{{ route('history') }}">History of NAF
									</a>
								<li>
									<a href="#">International Liaison
									</a>
								</li>
								<li>
									<a href="">Organisation
									</a>
								</li>
								<li>
									<a href="">Vision and Mission
									</a>
								</li>
								<li>
									<a href="">Chief of Air Staff
									</a>
								</li>
								<li>
									<a href="">Senior Commanders
									</a>
								</li>
								<li>
									<a href="">Former CAS
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="right-box mb-30">
					<div class="right-box-head">
						<h4>Popular Posts</h4>
					</div>
					<div class="right-box-content mt-10 mb-10">
						<a href="" class="popular-post d-flex align-items-center">
							<div class="popular-post-img mr-20">
								<img src="/assets/pages/img/5651.jpg" alt="">
								<div class="full-cover bg-green-op-8 transition-4">
									<i class="fas fa-external-link-alt transform-center"></i>
								</div>
							</div>
							<div class="popular-post-text">
								<p class="mb-5">Naf Immortalizes Late Flying Officer Abdulrahman Bayero..</p>
								<span>August 10, 2019</span>
							</div>
						</a>
						<a href="" class="popular-post d-flex align-items-center">
							<div class="popular-post-img mr-20">
								<img src="/assets/pages/img/planes.jpg" alt="">
								<div class="full-cover bg-green-op-8 transition-4">
									<i class="fas fa-external-link-alt transform-center"></i>
								</div>
							</div>
							<div class="popular-post-text">
								<p class="mb-5">Capacity Building: Naf Takes Delivery Of Final Batch Of Super
									Mushshak..</p>
								<span>May 16, 2019</span>
							</div>
						</a>
						<a href="" class="popular-post d-flex align-items-center">
							<div class="popular-post-img mr-20">
								<img src="/assets/pages/img/5543.jpg" alt="">
								<div class="full-cover bg-green-op-8 transition-4">
									<i class="fas fa-external-link-alt transform-center"></i>
								</div>
							</div>
							<div class="popular-post-text">
								<p class="mb-5">Naf To Strengthen Ties With Bangladesh For Capacity..</p>
								<span>April 11, 2019</span>
							</div>
						</a>
					</div>
				</div>
				
				<div class="right-box mb-30">
					<div class="right-box-head">
						<h4>Follow Us</h4>
					</div>
					<div class="right-box-content">
						<div class="social-profile mt-10 mb-10">
							<a href="" class="social-profile-box">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="" class="social-profile-box">
								<i class="fab fa-twitter"></i>
							</a>
							<a href="" class="social-profile-box">
								<i class="fab fa-google-plus-g"></i>
							</a>
							<a href="" class="social-profile-box">
								<i class="fab fa-google-plus-g"></i>
							</a>
							<a href="" class="social-profile-box">
								<i class="fab fa-pinterest-p"></i>
							</a>
						</div>
					</div>
				</div>

				<!--<div class="right-box ad-banner bg-light-white mb-30">
					<a href="" class="d-block ">
						<img src="img/service/ad-banner.jpg" class="w-100" alt="">
					</a>
				</div>-->
			</div>
			<div class="col-xl-8 col-lg-7">
				<!-- left part -->
				<div class="blog-list">
					<div class="each-blog-standared">
						<h4 class="f-700 lh-12 mb-20">
							HISTORY OF THE NIGERIAN AIR FORCE
						</h4>
						<div class="blog-list-content text-justify">
							<p>
								The idea of establishing an air force for Nigeria was first mooted in 1961 following the
								nation's participation in peace-keeping operations in Congo and Tanganyika (now
								Tanzania). During these peace-keeping operations, foreign air forces aircraft were
								employed to airlift the Nigerian Army Regiment to and from the theatres of operation.
								The Nigerian Government at the time, no doubt, recognized the urgent need to establish
								an air force actively supported by modern facilities to provide full complement of
								forces to enhance the nation's military posture. Early in 1962, the Government agreed in
								principle that the Nigerian Air Force (NAF) be established.
							</p>
							<p>
								The Nigerian Parliament, therefore, approved the establishment of the NAF and
								recruitment of cadets commenced in June 1962. Consequently, the NAF was officially
								established by a statutory Act of Parliament in April 1964 to serve four main purposes
								namely:
							</p>
							<ol type="a">
								<li class="mb-20"><b class="mr-15">a.</b> To achieve a full complement of the military
									defence system of the Federal Republic of
									Nigeria both in the air and on the ground.
								</li>
								<li class="mb-20"><b class="mr-15">b.</b> To ensure a fast versatile mobility of the
									Armed Forces.
								</li>
								<li class="mb-20"><b class="mr-15">c.</b> To provide close support for the ground-based
									and sea borne forces in all phases of
									operations and to ensure the territorial integrity of a united Nigeria.
								</li>
								<li class="mb-20"><b class="mr-15">d.</b> To give the country the deserved prestige that
									is invaluable in international matters.
								</li>
							</ol>
							<p>
								It was in 1962 that the drive for the required manpower for the planned air force
								started. Simultaneous with this development, Government was in dialogue with some
								friendly nations on the possibility of training Nigerian Air Force personnel in various
								specialist fields.
							</p>
							<p>The first batch of 10 cadets was enlisted in 1962 to undergo training with the Ethiopian
								Air Force. The second set of 16 cadets was enlisted in February 1963 to undergo training
								with the Royal Canadian Air Force while six cadets were sent to the Indian Air Force.
								The stage was thus set for the training of its personnel in the country. Consequently,
								several countries were approached but the lot fell on the German Air Force to provide
								technical assistance for the local training of NAF personnel and this materialized in
								1963.</p>
							<p>While the NAF was still at its infancy as a fighting force, the laudable plans made by
								the German Air Force Assistance Group were prematurely put to test barely three years
								after its establishment. The inexperienced Air Force assumed the role of a well
								established Air Force in order to prosecute the Nigerian civil war in close
								collaboration with sister Services. At this stage of its existence, the NAF was only
								equipped with a few aircraft. As the war progressed, some fighter aircraft such as MIG
								15 and 17 were acquired to help bring the war to a speedy end.</p>
							<p>The Nigerian Civil War came to an end in 1970 and there was the need to re-organize the
								Nigerian Air Force and up-grade its equipment. In order to strengthen itself, the NAF
								between 1981 and 1990 acquired additional aircraft types of advanced technology. With
								the acquisition of new weapon platforms, there arose the need to train personnel to man
								and maintain the new aircraft types. This led to the NAF re-organising its training
								aspects in all NAF trade specialties.</p>
							<p>Following the expansion of the NAF over time and the need to enforce all international
								laws and conventions relating to space activities in the Nigerian airspace, the Federal
								Government promulgated Decree 105 (Armed Forces Amendment Decree) of 23rd August 1994
								which provided additional roles for the NAF. These additional roles include:</p>

							<ol type="a">
								<li class="mb-20"><b class="mr-15">a.</b> Enforcing and assisting in coordinating the
									enforcement of international
									law, conventions, practices and customs ascribed and acceded to by Nigeria relating
									to aerial or space activities in the Nigerian airspace.
								</li>
								<li class="mb-20"><b class="mr-15">b.</b> Coordinating and enforcing all national and
									international air laws acceded or
									ascribed to by Nigeria and
								</li>
								<li class="mb-20"><b class="mr-15">c.</b> De-lineating, demarcating and coordinating all
									aerial surveys and security zones of the Nigerian airspace
								</li>
							</ol>
							<h4 class="f-700 lh-12 mb-20">
								HEADQUARTERS NIGERIAN AIR FORCE
							</h4>
							<p>The Nigerian Air Force Headquarters comprises nine staff branches which formulate
								policies. The current nine staff branches are namely Policy and Plans, Training and
								Operations, Aircraft Engineering, Logistics and Communications, Administration,
								Standards and Evaluations Air Secretary, Accounts and Budjet and Medical Services. Each
								Staff Branch is headed by a Branch Chief who is directly responsible to the Chief of Air
								Staff. The Branch Chiefs are assisted by several directors and staff officers. The
								office of the Chief of Air Staff is structured to include the Coordinator Project
								Implementation and Monitoring Team, Finance & Account, and the Nigerian Air Force
								Procurement and Plans.</p>
							<p>The Policy and Plans Branch is responsible for the formation, development and
								implementation of strategic policies and plans in the Nigerian Air Force. The Branch
								also prepares in close consultation with other air staff branches and commands,
								long-range plans and policies to support timely, accurate and efficient employment of
								air power under the direction of the Chief of Air Staff to meet NAF mission.</p>
							<p>The Training and Operations Branch is responsible for policies and directives for the
								daily operations of the NAF. The branch is also responsible for all training both on
								ground and aircrew duties. The Aircraft Engineering Branch is responsible for all
								matters relating to aircraft, armament design and maintenance in the NAF on the other
								hand, the Logistics and Communications Staff Branch is responsible for policies on
								provisioning, procurement and maintenance of all equipment and infrastructure in the
								NAF. The Administration Staff Branch is the hub in which most of NAF personnel and
								administrative matters revolve. It also sees to the running of the NAF in accordance
								with operational policy guidelines and requirements. The Standads and Evaluation Staff
								Branch is also charged with the responsibility of ensuring proper maintenance of
								standards in the NAF and to facilitate full-time research into specific areas of the
								Service with a view to avoiding waste in both human and material resources. The Air
								Secretary Branch is responsible for the establishment of guidelines for the recruitment,
								career management and maintenance of a balanced force structure for the NAF.</p>
							<h4 class="f-700 lh-12 mb-20">
								NAF COMMANDS
							</h4>
							<p>The Nigerian Air Force is currently made up of five Commands namely: Tactical Air Command with headquarters in Makurdi, Special Operations Command with headquarters in Bauchi, Mobility Command with Headquarters in Yenagoa, Training Command with headquarters in Kaduna and Logistics Command with headquarters in Lagos. The Tactical Air Command was established for the purpose of centralization of Command with a view to providing joint operational doctrine for the use of NAF air tactical forces. Similarly, Special Operations Command was established to provide combat support capabilities. Mobility Command is responsible for performing the air power role of tactical and strategic airlift in support of military operations and government.  The Training Command was established for the purpose of planning and coordinating the administrative and operational command of all NAF training activities, while the Logistics Command was established to supply and maintain all the NAF operational equipment as well as infrastructural facilities required for the effective accomplishment of NAF assigned tasks.</p>
							<p>In addition to the five major commands, there are some other formations which are directly answerable to HQ NAF. These are Nigerian Air Force Holdings Company comprising of the Aeronautical Engineering and Technical Services Limited,  Nigerian Air Force Post-Service Housing Development Limited, Nigerian Air Force Investment Limited, and Nigerian Air Force Properties Limited. others are, the Pay and Accounting Group, the Personnel Management Group and the Air Force Institute of Technology.</p>
							<h4 class="f-700 lh-12 mb-20">
								MAIN WEAPON PLATFORMS
							</h4>
							<p>
								To achieve the objectives for which the NAF was set up, the Federal Government has over the years acquired various weapons systems to enable the NAF to effectively perform its roles. There are therefore, various aircraft types currently in operation in the NAF performing different roles. The most recent platforms added to the NAF inventory by the Federal Government are F-7Ni, ATR-42 Maritime Patrol Aircraft and the Agusta Helicopter.
							</p>
							<h4 class="f-700 lh-12 mb-20">
								ACHIEVEMENTS
							</h4>
							<p>
								Achievement is a subjective term from the point of view of an air force that is charged with specific roles. However, some NAF activities which qualify as achievements are discussed hereunder.
							</p>
							<p>
								At present, the NAF has an aggressive airlift capacity that provides speedy airlift support for sister Services, the Federal Government and its agencies both within and outside the country. The NAF has a Search and Rescue airlift which is made up of helicopters capable of performing large scale rescue operations over jungles, mountains and high seas. The airlift was deployed, for instance, during the NET building fire incidents in 1982 during which many people trapped in the building were airlifted to safety. Another instance where the NAF exploits readily come to mind is in the area of civil aviation.
							</p>
							<h4 class="f-700 lh-12 mb-20">
								DEFENCE OF NIGERIAN FROM EXTERNAL AGGRESSION
							</h4>
							<p>
								In it's about 48 years of existence; the NAF has taken part in operations in defence of Nigeria's territorial integrity. The NAF participated effectively in troops lift, logistics re-supply, medieval and in combat, Operations HARMONY I to IV conducted in the Eastern flank of the country from the Maiduguri/Chad border to the Bakassi/Cameroonian' area and Operation GABAS in 1987 aimed at flushing out some insurgents from Chad are some good examples. Furthermore, in the discharge of its role of protecting Nigeria from aerial attack, the NAF in conjunction with the Nigerian Army Air Defence Artillery provides low-level air defence for airports around the country. Although lack of serviceable radar and other equipment continue to be a problem, working with other stakeholders, the NAF through the offices of the airport commandants has maintained reasonable level of operational effectiveness. The commencement of work on the military component of the Total Radar Coverage of Nigeria (TRACON) would further enhance NAF's capability in protecting Nigeria's airspace.
							</p>
							<p>
								The NAF also helps to airlift Nigerian contingents to sporting engagements wherever there are flight problems or notice to move in short time. The NAF has over the years participated in various International Peace-keeping Operations in Lebanon from 1978 to 1982, the OAU Peace-keeping Operations in Chad in 1983 during which 144 NAF personnel were awarded OAU Medals; the UN Military Observer Group (UNIMOG) in Yugoslavia in 1988, the ECOMOG Operations in Liberia, UNISOM Operations in Somalia and Rwanda as well as the engagement in Sierra Leone. Furthermore, in support of Government's foreign policy goals, the NAF has in recent times airlifted relief materials to sister African countries devastated by one form of disaster or the other.
							</p>
							<p>
								The NAF has similarly systematically localized almost all trades training in pursuance of its local training policy. Because of the high standards of facilities and quality of Instruction in some NAF schools, the Federal Government directed the NAF to provide significant military aid in term of training to some sister African countries. To this end, NAF has in recent years, trained military pilots and aircraft technicians for various African nations. The localization of training has no doubt saved the nation huge sums of foreign exchange in addition to making the country more self-reliance in its training needs.
							</p>
							<h4 class="f-700 lh-12 mb-20">
								AID TO CIVIL POWER/AUTHORITY
							</h4>
							<p>
								The NAF participated actively in various operations nationwide in aid to civil power/authorities during the period under review. These missions range from internal security assignments to the provision of airlift to government agencies. When aviation workers abandoned work for one labour protest reason or the other, NAF personnel took over immediate control of the airports in a few instances. In collaboration with other aviation stakeholders such as the Nigerian Airspace Management Agency (NAMA), it monitored the Nigerian airspace and played a supportive role in the implementation of government policies on the National Airport Security Programme. Some instances of NAF participation in aid to civil authority/power are mentioned under internal security and other engagements.
							</p>
							<p>
								In addition to the aforementioned tasks, the NAF aids civil authority in the provision of liaison and light transport for both military and civilian VIPs, airlift for presidential visits, aerial patrol duties and ceremonial displays. Indeed, significant portion of the electoral materials used in the series of elections  held in the country were airlifted by the NAF. Its search and rescue efforts helped to save many lives during the NET Building fire in 1982 while NAF pilots and other personnel were involved in various internal security operations.
							</p>
							<p>
								Apart from the normal airlift of electoral materials conducted in support of the numerous electoral bodies in 1991, the NAF played an active part in the verification of voters registration for the then National Electoral Commission (NEC) now Independent National Electoral Commission (INEC). The NAF has also been involved in the patrol of PHCN power lines across the country and is in the forefront of efforts to stop illegal oil bunkering under OPS Restore Hope. Currently, the Nigerian Air Force is involved in internal Security Operations in different parts of the country. Additionally, the NAF is also collaborating with National Emergency Management Agency in disaster response.
							</p>
							<h4 class="f-700 lh-12 mb-20">
								PROVISION OF SERVICES TO HOST COMMUNITIES
							</h4>
							<p>
								As currently structured, the NAF has bases in over 17 states across the country. To cater for the welfare and needs of its personnel, hospitals and schools were established. These facilities are often open to the host communities. Through these facilities, the NAF contributes to human and national development. Furthermore, job opportunities are also provided for citizens in some of the ancillary services thereby improving the local populations' living standard.
							</p>
							<p>
								In an effort to achieve a good measure of self sufficiency in aviation technology, NAF entered into a joint venture agreement with the Dornier (AIEP) Limited. The joint venture project culminated in the development and production of made-in-Nigeria aircraft called “Air Beetle”. The aircraft was officially commissioned as part of activities to mark NAF Silver Jubilee celebration in Kaduna, on 22 April, 1989. The aircraft was developed jointly by DANA (AIEP) engineers, NAF pilots, engineers and technicians. Currently, the NAF is also developing national capacity in aviation technology and Unmanned Aerial Vehicle (UAV) through the Air Force Institute of Technology (AFIT) in Kaduna.
							</p>
							<h4 class="f-700 lh-12 mb-20">
								MEETING NIGERIA'S MILITARY OBLIGATIONS TO THE UNITED NATIONS AND OTHER ORGANIZATIONS
							</h4>
							<p>
								In the area of peace support operations, the NAF has also left an indelible imprint. Nigeria's outing on UN PSO is perhaps as old as the nation itself. Indeed the need to airlift Nigerian troops to these operations was the main factor that resulted in the formation of the NAF. The first Nigerian troops deployed to Lebanon on UN peacekeeping operations from 1978-1982 relied entirely on NAF airlift assets for their sustenance. Also, the deployment and withdrawal of the Nigerian contingent to OAU peacekeeping operations in Chad in 1982/83 were carried out using NAF C-130s. Apart from these major operations, the NAF was involved in peacekeeping efforts in Yugoslavia, Somalia, Rwanda, Kuwait etc. The successes recorded by ECOMOG forces in their peacekeeping and later, peace enforcement efforts in Liberia and Sierra Leone would have been at a far higher cost, without the critical contributions of NAF air power. Currently, NAF C-130s and personnel are involved in airlift missions in International Peace Support Operations in aid of United Nations, African Union and Economic Countries of West African States.
							</p>


							<h4 class="f-700 lh-12 mb-20">
								REACTIVATION OF OPERATIONAL CAPABILITY
							</h4>
							<p>
								With the advent of democracy in May 1999, plans to reverse the downward trend of NAF's fortunes began to be implemented. The democratic government identified the need to have a robust air force, hence, it began to make committed efforts at revitalizing the Service. This entailed revamping ageing platforms and systems as well as inducting new ones. The results of these efforts gradually manifested with the arrival of some of the reactivated aircraft and the delivery of new ones. In 2010, the NAF took delivery of the F-7Nls, the Agusta 109s and ATR 42s. In 2011, 4 Alpha Jets were reactivated through AETSL while 7 others are scheduled to join the fleet soon. Similarly, several other platforms are currently undergoing Periodic Depot Maintenance (PDM). The NAF is now able to meet essential tasks. Similarly, the Super Puma Helicopters are now back to operations after nearly a decade of conservation.
							</p>
							<p>
								The challenges of the Vision 20:2020 has brought out the imperative of maintaining a strong air force more than ever before. To this effect, the CAS has coined a vision thus “To transform the NAF into a self-reliant and highly professional fighting force through the application of innovative technology in fulfilment of national defence and security objectives” that should drive the NAF to attain capabilities necessary for the achievement of national objectives. The Vision should see the NAF able to discharge its constitutional responsibilities.
							</p>
							<p>
								The NAF will continue to aim at a higher standards of operational excellence and combat readiness in carrying out its statutory roles as assigned by the President, Commander-in-Chief of the Armed Forces Federal Republic of Nigeria, Muhammadu Buhari GCFR . Indeed the Chief of Air Staff, Air Marshal Sadique Baba Abubakar DFS is also committed to transforming  the NAF through his vision to ensure that the Service is transformed into a model fighting force.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Blog details area end -->

<!-- cta area start -->
<!--  <section class="cta pt-50 pb-50" style="background-image: url('img/bg/bg_cta.jpg');" data-overlay="9">
	  <div class="container">
		  <div class="row align-items-center">
			  <div class="col-xl-4 col-lg-5 mb-md-20 text-center text-lg-left">
				  <h3 class="z-5 white f-700 lh-18 wow fadeInLeft">What type of challenge are you facing?
			<span class="green italic">Let’s talk</span>
		  </h3>
			  </div>
			  <div class="col-xl-8 col-lg-7 text-center text-lg-right z-5">
				  <a href="" class="btn btn-square-white mr-20 mr-xs-00 d-block d-sm-inline-block mb-xs-15 wow fadeInUp">
					  <i class="fas fa-envelope mr-15"></i>info@example.com
				  </a>
				  <a href="tel:1234567890" class="btn btn-square-green d-block d-sm-inline-block blob-small wow fadeInUp">
					  <i class="fas fa-phone mr-15"></i>+1 234 567 890
				  </a>
			  </div>
		  </div>
	  </div>
  </section>-->
<!-- cta area end -->


<!-- Footer area start -->
<footer class="footer-area">
	<div class="container">
		<div class="row mb-sm-50 mb-xs-00">
			<div class="col-lg-4 z-5">
				<div class="contact-area relative h-100 mr-lg-20 mr-md-00">
					<div class="footer-logo mb-35">
						<img src="/assets/pages/img/logo/logo.png" alt="">
					</div>
					<div class="contact-options mb-35">
						<ul>
							<li>
								<i class="fas fa-map-marker-alt green"></i>4221 Melrose Street,Yakima, Washington
							</li>
							<li>
								<i class="fas fa-phone green"></i>(1) 234 456 89
							</li>
							<li>
								<i class="fas fa-envelope green"></i>info@example.com
							</li>
						</ul>
					</div>
					<div class="social-links">
						<ul class="social-icons">
							<li>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li>
								<a href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fab fa-linkedin-in"></i></a>
							</li>
							<li>
								<a href="#"><i class="fab fa-google-plus-g"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-4">
				<div class="footer-links pt-85 pt-md-50 mb-sm-70">
					<h5 class="green f-700 mb-35">Quick Links</h5>
					<ul class="links-list">
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="{{ route('auth.login.get') }}">Admin Login</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-4">
				<div class="footer-links pt-85 pt-md-50 mb-sm-70">
					<h5 class="green f-700 mb-35">Our Services</h5>
					<ul class="links-list">
						<li><a href="#">Investment planning</a></li>
						<li><a href="#">Financial Planning</a></li>
						<li><a href="#">Business Management</a></li>
						<li><a href="#">Mutual Funds</a></li>
						<li><a href="#">Markets Research</a></li>
						<li><a href="#">Business Consulting</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-sm-4">
				<div class="footer-links pt-85 pt-md-50 mb-50">
					<h5 class="green f-700 mb-35">Need Help?</h5>
					<ul class="links-list">
						<li><a href="#">FAQS</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Get a Quote</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="copyright pt-25 pb-25">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-8">
					<p class="mb-0 white">© Copyrights 2019 Bizz All rights reserved</p>
				</div>
				<div class="col-xl-4 text-right">
					<a href="#" class="btn scroll-btn f-right flex-center z-25 opacity-0">
						<i class="fas fa-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</section>
</footer>
<!-- Footer area end -->
<!-- ********************* -->

<!-- JS Files -->
<script src="/assets/pages/js/modernizr-3.5.0.min.js"></script>
<script src="/assets/pages/js/jquery-1.12.4.min.js"></script>
<script src="/assets/pages/js/bootstrap.bundle.min.js"></script>
<script src="/assets/pages/js/owl.carousel.min.js"></script>
<script src="/assets/pages/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/pages/js/jquery.nice-select.min.js"></script>
<script src="/assets/pages/js/jquery.waypoints.min.js"></script>
<script src="/assets/pages/js/jquery.counterup.min.js"></script>
<script src="/assets/pages/js/jquery.countdown.min.js"></script>
<script src="/assets/pages/js/lightslider.min.js"></script>
<script src="/assets/pages/js/wow.min.js"></script>
<script src="/assets/pages/js/isotope.pkgd.min.js"></script>
<script src="/assets/pages/js/jquery.meanmenu.min.js"></script>
<script src="/assets/pages/js/main.js"></script>
<!-- JS Files end -->
</body>

</html>