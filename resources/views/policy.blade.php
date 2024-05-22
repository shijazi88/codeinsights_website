<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/favicon.png">
		<title>Box12</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-icons.css">		
		<link rel="stylesheet" href="css/aos.css">			
		<link rel="stylesheet" href="css/line-awesome.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">		
		<link rel="stylesheet" href="css/flexslider.css">
		<link rel="stylesheet" href="css/flexslider-rtl.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		
		<!-- loader -->
		<div class="loader">
			<div class="loading">
				<div class="spinner-grow aloader" role="status">
					<span class="sr-only"></span>
				</div>
			</div>
		</div>
		<!-- end loader -->

		<!-- navbar -->
		<div id="navbar" class="navbar navbar-expand-lg justify-content-center align-items-center navbar-fixed">
			<div class="container">
				 <a href="{{route('home')}}" class="navbar-brand"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			        <i class="la la-bars"></i>
			    </button>
			    <div class="collapse navbar-collapse justify-content-evenly" id="navbarSupportedContent">
			    	<ul class="navbar-nav nav">
						<li class="nav-item"><a class="nav-link" href="{{route('home')}}">{{__('Home')}}</a></li>			
						<li class="nav-item"><a class="nav-link" href="#about">{{__('about BOX12?')}}</a></li>
						<li class="nav-item"><a class="nav-link" href="#subscriptions">{{__('subscriptions')}}</a></li>
						<li class="nav-item"><a class="nav-link" href="#workouts">{{__('Our Workouts')}}</a></li>
						<li class="nav-item"><a class="nav-link" href="#group_exercise">{{__('group exercise')}}</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('policy')}}">{{__('Policy')}}</a></li>
					</ul>
			    </div>					
					@include('partials/language_switcher')
			    <button class="button">{{__('Join Now')}}</button>					
					<!-- <p> {{__('Welcome to our website!')}}</p> -->					
			</div>
		</div>
		<!-- end navbar -->
		
		<!-- Policy start -->
		<section id="policy_section" class="policy_section section-bg">
			<div class="container" data-aos="fade-up">
				<div class="section-title">
				<h2 class="text-center text-white">Privacy Policy</h2>
				<p class="text-center text-white">
					This online Privacy Policy Terms apply only to information collected online through our website and our Mobile application, referred to herein provision No. 1- and not to information collected offline.
					And by using our Website You are deemed to consent to our Privacy Policy Terms as stated herein and without any modifications.
				</p>
				</div>

				<div class="accordion-list">
				<ul>
					<!-- 1-Information Collected by the Service -->
					<li data-aos="fade-up">              
						<i class="bi bi-question-octagon icon-help d-flex"></i>
						<a data-bs-toggle="collapse" class="collapse" data-bs-target="#information_collected_by_the_service">
							1-Information Collected by the Service
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="information_collected_by_the_service" class="collapse show" data-bs-parent=".accordion-list">
						<p>
							1.1 Innovative Technologies for Information Technology ("Us", "We", or "Our") operates the online site known as www.memvera.com and the mobile application known as Memvera (the "Site"). These Privacy Policy terms ("the Terms") inform You ("User") of Our policies regarding the collection, use and disclosure of information about You, collected during Your access or Use of the service ("Service") provided by and through the Platform. When You access the Site, visit or use the Service, we receive and collect, with your knowledge and consent, personal information about You "Personally-Identifying Information" such as your name, age, gender, email address, and current location, and phone number, postal address, etc. And sometimes when You enter a contest, make a purchase, subscribe to a publication, or register for any other service, you may be required to provide payment details of yours, such as credit or charge card numbers. All this information is referred to herein as your "Registration Information".
							We use your Registration Information only for providing the Service and improving the Site. By using the Site, you agree to the collection and use of said Registration Information subject to these Terms.
						</p>
						<p>
							1.2 Information about Your online conduct, computer, mobile or other online devices (such as make, model, specifications) Your IP address, pages visited, contents viewed, the sites, applications, and/or services You arrived from, etc.. may be collected by our servers automatically.
						</p>
						<p>
							1.3 If You choose to access or visit and/or use any third party social networking service that is integrated with the Service, we may receive Personally Identifying Information and other information about You, your computer, mobile or other device that you make available to those services. For instance, some social networking services will allow You to push Contents from our Service to your contacts or to pull information about your contacts to enable You to connect with them through Our Service. Please note that You are free to use a social networking service in connection with our Service.
						</p>
						<p>
							1.4 We collect your current location to present the list of the laboratories and home care service providers that are closest to you and improve the provided service. 
						</p>
					</div>
					</li>

					<!-- 2-How the Service Uses Information About You -->
					<li data-aos="fade-up" data-aos-delay="100">
						<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#how_the_service_uses_information_about_you" class="collapsed">
							2-How the Service Uses Information About You
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="how_the_service_uses_information_about_you" class="collapse" data-bs-parent=".accordion-list">
						<p>
											2.1 We use Your Personally Identifiable Information supplied through the Service to provide You with the merchandise, products, service and/or Content You have requested, in addition to providing You with newsletters, marketing and promotional materials and other similar information. If You subscribe to any of Our publications, we will confirm your subscription to said publications through your email address and will deliver the required publication to your mailing address.
						</p>
						<p>
							2.2 We may also use the information to communicate with You about new features, products or services and/or to discuss improvement of the services offered to You to better satisfy Your needs.
						</p>
						<p>
							2.3 Unless otherwise expressly restricted on or by the Service, We may sell or share information about You, Your computer, mobile or other device. We may, without limitation, share your Registration Information, and other Identifying Information with Our parent, subsidiaries and affiliates and with carefully selected companies/entities who We think may offer services or products that may be of interest to You. However, if You do not wish to have Your Personally Identifiable Information shared with unaffiliated third parties, contact our Private Policy Coordinator at the address referred to herein these Terms.
						</p>
						<p>
							2.4 We may also, at our sole discretion, allow access to our database by parties other than You, who provide services We may need including, without limitation, shopping and market research, community management, shopping search, etc. Likewise, if You are seeking to purchase any products or service on or through features on the Service We may forward your relevant required information to third parties including credit card or other payment processing, credit pre-authorization and address verification.
							We may provide your information to our advertisers to allow them process advertisements to You.
						</p>
						<p>
							2.5 But We wish to impart that while We may require such third parties to adopt proper private policies arrangements in dealing with said information, and will not authorize their use of said information except for the express purpose they are provided for, We do not, in any manner, guarantee their compliance with the said requirements. And in this respect We do not bear any responsibility for any wrongful actions or policies of any such third party.
						</p>
						<p>
							2.6 We shall have the right to use any information, We receive or gather, about your computer, mobile or other device (which may lead to identifying You) for any lawful business purpose relating, in any manner, to the Service or to the performance of the servers.
						</p>
						<p>
							2.7 We reserve the right to use transfer, sell and share aggregated anonymous data about our users as a group for any lawful business purpose, such as analyzing usage trends and seeking compatible advertisers, sponsors, clients and customers.
						</p>
						<p>
							2.8 In case any of the assets owned or in any manner controlled by Us or our parent, subsidiaries or affiliates are sold or otherwise transferred to another entity, all information about our Service Users may be included in the transferred assets. In said circumstances, You will be entitled to discontinue your subscription as User.
						</p>
						<p>
							2.9 We reserve the right to merge or co-mingle anonymous or non-personally identifiable data about You, your offline and online behavior, your computer, mobile or other device, with your Registration Information or other personally identifiable data of You, for any lawful business purpose.
						</p>
						<p>
							2.10 Like many Site operators, We collect information that your browser sends whenever You visit our Site, "Log Data". This Log Data may include information such as your computer's Internet Protocol ("IP") address, browser type, browser version, the pages of our Site that You visit, the time and date of your visit, the time spent on those pages and other statistics.
							In addition, We may use third party services such as, Google Analytics, that collect, monitor and analyze any such data or other information so received.
						</p>
						<p>
							2.11 We shall have the right to access, use and share with others your Personally Identifying Information for purposes of health, safety, law, security and other matters relevant to public interest.
						</p>
						<p>
							2.12 We will take reasonable steps to protect your Personal Information from loss, unauthorized use or misuse.
						</p>
						<p>
							2.13 We will, if officially required, by court, government, or official order, provide access to our data base and supply any information in this respect.
						</p>
					</div>
					</li>						

					<!-- 3- Local Device Storage Tracking Technologies -->
					<li data-aos="fade-up" data-aos-delay="100">
						<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#local_device_storage_tracking_technoloigies" class="collapsed">
							3- Local Device Storage Tracking Technologies
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="local_device_storage_tracking_technoloigies" class="collapse" data-bs-parent=".accordion-list">
						<p>
							3.1 The Service may sometimes, place and/or store code or other types of information and/or devices (e.g. "Cookies") on your computer, mobile or other device ("Local Device Storage"). Cookies are files with small amount of data, which may include an anonymous unique identifier. These Cookies are sent to your browser from the site and stored on your computer's hard drive.
						</p>
						<P>
							3.2 Like many Sites, we use "Cookies" for any lawful business related to the servers, the Site, the Service and its administration. To collect broad demographic information, to conduct researches, to analyze trends, to record registration and personalization information. You can instruct your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if you do not accept Cookies, you may not be able to use some portions of our Site.
						</P>
						<P>
							3.3 In addition to said Local Device Storage, we may use web beacons, web bugs, clear gifs and similar technologies (collectively and together with Local Device Storage the "Tracking Technologies"). We use Tracking Technologies for all or some of the business purposes we described above for use of the Local Device Storage.
						</P>
						<P>
							3.4 Our advertising service vendors and other third parties may, sometimes, use tracking technologies to serve You advertisements tailored meet the interests You reflected in your browsing on this Service and other Sites, applications and services You have visited. In doing so these third parties will collect non-personal identifiable data, such as make, model, settings, specifications about your system, and geographic locations of it, as well as IP address, pages visited, content viewed, the sites, applications and/or service You arrived from. The use of third parties of Tracking Technologies is governed by their own Private Policies NOT this Privacy Policy. We have no control, responsibility or liability in connection therewith.
						</P>
					</div>
					</li>

					<!-- 4- Transfer of Information -->
					<li data-aos="fade-up" data-aos-delay="100">
						<i class="bi bi-question-octagon icon-help d-flex"></i> 
									<a data-bs-toggle="collapse" data-bs-target="#transfer_of_information" class="collapsed">
										4- Transfer of Information
										<i class="bi bi-arrow-down-short icon-show"></i>
										<i class="bi bi-arrow-up-short icon-close"></i>
									</a>
					<div id="transfer_of_information" class="collapse" data-bs-parent=".accordion-list">
						<p>
											Your information may be transferred to and maintained on servers and databases outside of your city, province or country and other governmental jurisdictions where the privacy laws may not be similar to those applicable in your jurisdiction. Please note that We may or may assist in the transfer of your information to and from any other jurisdiction. Your consent to this Privacy Policy Terms followed by your submission of such information represents your agreement to any such transfer.
						</p>
					</div>
					</li>

					<!-- 5- Monitoring, non-monitoring and Violating Content -->
					<li data-aos="fade-up" data-aos-delay="100">
						<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#monitoring_non_monitoring_and_violating_content" class="collapsed">
							5- Monitoring, non-monitoring and Violating Content	
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
						<div id="monitoring_non_monitoring_and_violating_content" class="collapse" data-bs-parent=".accordion-list">
							<p>
												5.1 Please note that We apply Our best endeavors to provide pleasing online experience and service for the users thereof, and this requires and necessitates the monitoring of activities on the Service particularly in the social, community and public discussions areas, photo and video galleries, bulletin boards, forums, chats, blogs, personal/job search and elsewhere to ensure compliance with these Terms. And User hereby expressly, unconditionally and irrevocably agree to such monitoring.
							</p>
							<P>
								5.2 On the other hand We do not perform and We neither warrant nor guarantee that We will perform, conduct or arrange any pre-screen monitoring of all Contents before it is posted, uploaded, transmitted, sent or otherwise made available on or through the Service by users. So user may be exposed to Content that is offensive, abusive, or carrying unfavorable material or Content that violates these Terms. We shall not be accountable or be subject to any form of liability, legal, contractual or otherwise for any such posted, transmitted or otherwise any content displayed through or on the Service.
							</P>
							<P>
								5.3 We do not necessarily endorse , support, sanction, encourage, verify or agree with the comments, opinions or statements, posted, uploaded, transmitted sent or otherwise made available c on or through the Service , including without limitation, in our social, and public discussions areas, photos and video galleries, bulletin boards, forums, chats, blogs, articles, and other classified ads.
							</P>
							<P>
								5.4 Any content posted, uploaded, transmitted, sent or otherwise made available on or through the Service , including advice and opinion are the views, opinions and responsibility of those who post said content ; and do not , in any manner, represent or reflect views of Us, Our licensors, vendors, or service providers. They are not endorsed by any of said parties, and User expressly admits and agrees that neither Us, nor any of Our licensors, vendors or service providers are responsible or will be later held responsible or, in any manner, liable to User for any of such content posted, uploaded, transmitted, sent or in any manner made available on the Service including contents violating the Agreement.
							</P>
						</div>
					</li>

					<!-- 6- Information Security and Notification -->
					<li data-aos="fade-up" data-aos-delay="100">
						<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#information_security_and_notification" class="collapsed">
							6- Information Security and Notification
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="information_security_and_notification" class="collapse" data-bs-parent=".accordion-list">
						<p>
							6.1 It is acknowledged that no data transmission is completely secure and no physical or electronic system of security is impenetrable. For said reasons We do not guarantee the security of information sent to or received from Us. Nor do We guarantee the security of our servers, networks or databases.                  
						</p>
						<P>
							6.2 By using this Site and account You will be responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, mobile or other device. And You expressly agree to accept responsibility for all activities that occur under your account or password. And if You are under eighteen years of age You may use the Site and Service only in presence of and with participation of parent or legal guardian.
						</P>
						<P>
							6.3 And by using the Service , You agree and accept all and any risk related to the information sent to Us or collected by Us when You access, visit and/or use the Service, including, inter alia, your Registration Information and other identifiable Information.
						</P>
						<P>
							6.4 And if You choose to store Registration Information or other identifiable information where they can be accessed by others, we shall not be held liable for any loss of any, or the consequences thereof. And in case You lose a computer, mobile or other device that contains such information it will be your duty to seek, arrange and take all steps to protect yourself and your information.
						</P>
						<P>
							6.5 If We become aware that the security of your information in our possession or control are jeopardized or compromised We may seek to notify You, through your computer, mobile or other device.
						</P>								
					</div>
					</li>

					<!-- 7- Children and Kids Restriction -->
					<li data-aos="fade-up" data-aos-delay="100">
						<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#children_and_kids_restriction" class="collapsed">
							7- Children and Kids Restriction
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="children_and_kids_restriction" class="collapse" data-bs-parent=".accordion-list">
						<p>
							7.1 This Privacy Policy Agreement applies to children information We collect from a parent or legal guardian. However, we do not share identifiable information of a child with third parties and We do not send promotional materials to a child but to his parents or legal guardian.
						</p>
						<P>
							7.2 You can review, change or delete your child's personal information or revoke your parental consent by emailing us at our registered address.
						</P>
						<P>
							7.3 This Service is not intended for use by children under age thirteen. No one under this age should be allowed to register for the Service or use our social, community or public discussion areas, forums, blogs, or view our photo and video galleries. Minors above thirteen must receive parent or guardian permission before undertaking any purchase of or subscription for any programs.
						</P>
						<P>
							7.4 Children sometimes disclose personal information about themselves in publicly accessible areas of the Service, and this may lead to their receiving unsolicited messages from other outside parties. We recommend that You should advise them not to try or pursue such practice.
						</P>
						<P>
							7.5 In general, we encourage effective parental control in this regard. However, if You are concerned about your children approach or practice in this respect, We recommend that You seek advice from our Privacy Policy Coordinator at the address indicated in this Privacy Policy Terms.
						</P>
					</div>
					</li>

					<!-- 8-Our Rights of Termination or Suspension of Service -->
					<li data-aos="fade-up" data-aos-delay="100">
						<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#our_rights_of_termination_suspension_service" class="collapsed">
							8-Our Rights of Termination or Suspension of Service								
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="our_rights_of_termination_suspension_service" class="collapse" data-bs-parent=".accordion-list">
						<p>
							8.1 We reserve the right and shall be fully entitled, at any time, with or without reason, with or without notice, and without prejudice to any right of Us, to terminate, discontinue, suspend or restrict the Service, your account, User's ability to access, visit or use the Service or any portion thereof, and/or the Agreement. However if You breach, violate or act inconsistently with the contents of these Terms or with any rules governing the use of the Service We may, without notice, terminate, discontinue, suspend or restrict your account and your access to and use of the Service and the Agreement.
						</p>
						<P>
							8.2 In case of any termination or suspension of User's account/profile, his ability to access or use the Service or any part thereof and or the Agreement will automatically terminate and be expunged. And We may, in addition to any other rights of Us, remove or require a change to any password or User's ID that has been provided to him or other registration information, and, furthermore, reassign, and/or allow another party to use the User's password and/or the User's ID.
						</P>
						<P>
							8.3 Exercise by Us of any of Our rights set in any of the provisions of here-before, does not impose any obligation on Us nor deprive Us of any right to remove any Content or copies of all information related to user's account/profile and any and all Content we may have posted, uploaded, transmitted, sent or otherwise made available on or through the Service. And any and all of the said may, at our discretion, be retained and remain as viewable by Us, our licensors, vendors, service providers and other third parties, including other users.
						</P>
					</div>
					</li>

					<!-- 9- Disclaimer and limitation of Liability -->
					<li data-aos="fade-up" data-aos-delay="100">
						<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#disclaimer_limitation_liability" class="collapsed">
							9- Disclaimer and limitation of Liability
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="disclaimer_limitation_liability" class="collapse" data-bs-parent=".accordion-list">
						<p>
							9.1 User understands and acknowledges that He is using the Service at his own risk. The service is provided "AS IS" with all faults and on an "AS AVAILABLE" basis. And We hereby expressly disclaim any and all representations, warrantees, guarantees (express or implied) including any warrantees of accuracy, reliability, title, merchantability, non-infringement, fitness for a particular purpose, or any other warrantee, condition, guarantee or representation of completeness regarding any Content provided by Us or relating to the Service.
						</p>
						<P>
							9.2 Although We strives to provide uninterrupted Service, nevertheless, We neither warrant nor guarantee that operation of or access to the Service and/or communications or messaging from or to Us will be uninterrupted, timely, or error free, or that there will be no failures, delays, inaccuracies, errors or omissions or loss of transmitted contents or that no harmful software devices, viruses, worms, bugs or defects of similar nature will be transmitted on or through the Service. And We hereby expressly disclaim any liability in this respect and for and in the event of any such occurrence.
						</P>
						<P>
							9.3 We are not and shall not be responsible for incomplete, incorrect, lost, delayed, late, misdirected, garbled, damaged, illegible, undeliverable, or incompletely received communications or messaging from or to You or Us for any reason whatsoever related to the Service or to the devices or to access or use thereof or to any account/profile or any other use or cause related in any manner whatsoever to the afore-said.
						</P>
					</div>
					</li>

					<!-- 10- Communications between us -->
					<li data-aos="fade-up" data-aos-delay="100">
						<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#communications_between_us" class="collapsed">
							10- Communications between us
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="communications_between_us" class="collapse" data-bs-parent=".accordion-list">
						<p>
							10-1 All the communications between Us and You will be through electronic means whether they are used for access, visit or use of the Service, sending of messages, posting of notices on the Service or for communicating with each other through messaging.
						</p>
						<P>
							10-2 And You hereby expressly consent to receiving all such information from Us exclusively in electronic form.
						</P>
						<P>
							10-3 Furthermore, User hereby accepts and agrees that all notices, documents, and other similar forms of communications provided to Him (User) electronically by Us, satisfy all legal requirements that such communications would satisfy if they were in written form.
						</P>
					</div>
					</li>

					<!-- 11-Copyright, Trademark and Intellectual Property -->
					<li data-aos="fade-up" data-aos-delay="100">
						<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#copyright_trademark_intellectual_property" class="collapsed">
							11-Copyright, Trademark and Intellectual Property								
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="copyright_trademark_intellectual_property" class="collapse" data-bs-parent=".accordion-list">
						<p>
							11.1 The trademark "Memvera" and all other Contents, features and functionality provided by Us, our licensors, vendors and/or service providers including, among others, photos, images, text, music, audio, videos, trademarks and trade names, service marks and other brand identifiers, the design, compilation and look of the Service and all advertising thereon are the property of Us, our vendors, and/or service providers.
						</p>
						<P>
							11.2 You shall not and You agree not to copy, reproduce, modify, change, edit, crop, alter, revise, adapt, translate, enhance, reformat, remix, rearrange, create derivative work thereof, move or remove, delete, erase, reverse engineer, decipher, decompile, disassemble, publish, post, display, distribute, rent, sell, sublicense or otherwise provide to others, or use any Content obtained on or through the Service except as permitted by any copyright or trademark or Intellectual Property Law (CIPR) or if expressly permitted in writing by this Agreement or by any other written consent of Us.
						</P>
						<P>
							11.3 You solemnly undertake not to post, upload, transmit, send or in any manner make available on or through the Service any content that may infringe, violate or breach the copyright, trademark, trade secret or any other personal or proprietary right of Us, our licensors, vendors, service providers, other users and/or any other third party.
						</P>
						<P>
							11.4 You shall not attempt to derive any source code or underlying ideas or algorithms of the Service, in whole or in part, including without limitation, any Content, communications, messaging, programming, hardware, functionality or features on Service Provider's networks, servers or databases or otherwise reduce the Service in whole or in part.
						</P>
						<P>
							11.5 We as Service Providers respect the intellectual Property of others and expect the User to do the same. In case of infringement of copyright or intellectual property right by User, we may, in addition to any other remedies available to Us by law, terminate, discontinue and/or suspend the account/profile, access, visit and use of the Service by the infringing User. And We may go further and elect to disable access to the Content and close the User's account if the circumstances necessitate.
						</P>
						<P>
							11.6 If You have reasons to believe that your Content has been copied or is accessible on the Service in such a way as to constitute infringement of any of your copyrights, or that the service contains any reference or activity that infringes your copyright You may notify Us and collaborate with Us to deal with the situation.
						</P>
					</div>
					</li>

					<!-- 12- Our Private Policy Coordinator -->
					<li data-aos="fade-up" data-aos-delay="100">
						<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#our_private_policy_coordinator" class="collapsed">
							12- Our Private Policy Coordinator
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="our_private_policy_coordinator" class="collapse" data-bs-parent=".accordion-list">
						<p>
											If You have any queries about this Privacy Policy Terms or the Service, please contact Us.
						</p>
					</div>
					</li>

					<!-- 13-Indemnity -->
					<li data-aos="fade-up" data-aos-delay="100">
					<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#indemnity" class="collapsed">
							13-Indemnity
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="indemnity" class="collapse" data-bs-parent=".accordion-list">
						<p>
							As a condition of use of this Site, and for use of the Service and Content, You (User) hereby agree to indemnify and hold Us harmless from and against any and all liabilities, claims, damages, complaints, costs, expenses and fees (including attorney's fees) resulting from Your wrongful use of the Site and Service or your breach of any of the provisions of this Privacy Policy Terms document.
						</p>
					</div>
					</li>

					<!-- 14- Governing Law and Dispute Resolution -->
					<li data-aos="fade-up" data-aos-delay="100">
					<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#governing_law_dispute_resolution" class="collapsed">
							14- Governing Law and Dispute Resolution
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="governing_law_dispute_resolution" class="collapse" data-bs-parent=".accordion-list">
						<p>
							14.1 These Terms shall be governed by and construed in accordance with all the applicable laws, rules and Regulations of the Kingdom of Saudi Arabia.
						</p>
						<P>
							14.2 And any dispute relating in any manner to these Terms, and if not amicably resolved by the Parties within one month of its occurrence, shall be resolve by arbitration subject to the Arbitration Regulations and Rules of Saudi Arabia, by one arbitrator. Arbitration shall be conducted in Arabic language and the venue of arbitration shall be the Chamber of Commerce of Riyadh city.
						</P>
						<P>
							14.3 Resort to arbitration shall not prejudice the right of any of the Parties to apply to any competent court in Riyadh, Saudi Arabia, to seek application of any injunctive or similar remedy.
						</P>
					</div>
					</li>

					<!-- 15. Amendments of this Private Policy Terms -->
					<li data-aos="fade-up" data-aos-delay="100">
					<i class="bi bi-question-octagon icon-help d-flex"></i> 
						<a data-bs-toggle="collapse" data-bs-target="#amendments_this_private_policy_terms" class="collapsed">
							15. Amendments of this Private Policy Terms									
							<i class="bi bi-arrow-down-short icon-show"></i>
							<i class="bi bi-arrow-up-short icon-close"></i>
						</a>
					<div id="amendments_this_private_policy_terms" class="collapse" data-bs-parent=".accordion-list">
						<p>
							15.1 These Terms may be amended from time to time by Us and subject always to our sole discretion. And We will give You notice, online, of any material changes within a reasonable time. Continued use by You of this Site following amendment, constitutes tacit acceptance by You of the Amendments.                  
						</p>
					</div>
					</li>
				</ul>
				</div>
			</div>
		</section>
	<!-- end Policy -->
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md col-sm-6">
					<ul>
						<li><a href=""><i class="la la-facebook"></i></a></li>
						<li><a href=""><i class="la la-twitter"></i></a></li>
						<li><a href=""><i class="la la-instagram"></i></a></li>
						<li><a href=""><i class="la la-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-md col-sm-6">
					<div class="cp">
						<span> {{__('copy_right')}} </span>
					</div>
				</div>
			</div>
		</div>
	</footer>
		<!-- end footer -->
		<!-- scroll to top bar -->
		<a href="https://wa.me/966920015223?text=Can you help me with" class="scroll-to-top" target="_blank">
			<i class="lab la-whatsapp"></i>
		</a>
		<!-- script -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/aos.js"></script>		
		<script src="js/jquery.filterizr.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/magnific-popup.min.js"></script>		
		<script src="js/main.js"></script>		
	</body>
</html>