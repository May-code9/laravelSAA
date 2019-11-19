@extends('layouts.master') @section('content')
<!-- BREADCRUMBS -->
<div id="t3-breadcrumbs" class="t3-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="index.php" class="pathway"><span itemprop="name">Home</span></a></li>
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active"><span itemprop="name">User registration</span>
						<meta itemprop="position" content="2">
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //BREADCRUMBS -->

</div>

<div id="t3-mainbody" class="t3-mainbody">
	<div class="container">
		<div class="row">
			<!-- MAIN CONTENT -->
			<div id="t3-content" class="t3-content col-sm-12">
				<div id="system-message-container"></div>
				<div class="page-registration page-registration__">
					<div class="page_header">
						<h2><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">User</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">registration</span></h2>
					</div>
					<form id="member-registration" action="{{ route('register') }}" method="post" class="form-horizontal">
						@csrf
						<fieldset>
							<div class="control-group">
								<div class="control-label">
									<span class="spacer"><span class="before"></span><span class="text">
										<label id="jform_spacer-lbl" class=""><strong class="red">*</strong> All fields Required</label></span><span class="after"></span></span>
									</div>
									<div class="controls"></div>
								</div>

								<div class="control-group">
									<div class="control-label">
										<label id="first_name" for="first_name" class="hasPopover required" title="first_name" data-content="Enter your First name.">First Name<span class="star">&#160;*</span></label>
									</div>
									<div class="controls">
										<input type="text" name="first_name" id="first_name" value="" class="required" size="30" required aria-required="true" />
										@error('first_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="control-group">
									<div class="control-label">
										<label id="last_name" for="last_name" class="hasPopover required" title="last_name" data-content="Enter your Last name.">Last Name<span class="star">&#160;*</span></label>
									</div>
									<div class="controls">
										<input type="text" name="last_name" id="last_name" value="" class="validate-username required" size="30" required aria-required="true" />
										@error('last_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="control-group">
									<div class="control-label">
										<label id="phone" for="phone" class="hasPopover" title="Phone" data-content="Enter your phone number.">Phone<span class="star">&#160;*</span></label>
									</div>
									<div class="controls">
										<input type="tel" name="phone" id="phone" value="" size="30" required aria-required="true"/>
										@error('phone')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="control-group">
									<div class="control-label">
										<label id="email" for="email" class="hasPopover required" title="Email Address" data-content="Enter your email address.">Email Address<span class="star">&#160;*</span></label>
									</div>
									<div class="controls">
										<input type="email" name="email" class="validate-email required" id="email" value="" size="30" autocomplete="email" required aria-required="true" />
										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="control-group">
									<div class="control-label">
										<label id="password" for="password" class="hasPopover required" title="Password" data-content="Enter your desired password.">Password<span class="star">&#160;*</span></label>
									</div>
									<div class="controls">
										<input type="password" name="password" id="password" value="" autocomplete="off" class="validate-password required" size="30" maxlength="99" required aria-required="true" autocomplete="new-password"/>
										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="control-group">
									<div class="control-label">
										<label id="password-confirm" for="password-confirm" class="hasPopover required" title="Confirm Password" data-content="Confirm your password.">Confirm Password<span class="star">&#160;*</span></label>
									</div>
									<div class="controls">
										<input type="password" name="password_confirmation" id="password-confirm" value="" autocomplete="off" class="validate-password required" size="30" maxlength="99" required aria-required="true" autocomplete="new-password"/>
									</div>
								</div>
								<div class="control-group">
									<div class="control-label">
										<label id="jform_profile_tos-lbl" for="jform_profile_tos" class="hasPopover required" title="Terms of Service" data-content="Please read the Terms of Service. You will not be able to register if you do not agree with them."><a href="javascript:;" id="readTnA">Click to view Terms of Service</a><span class="star">&#160;*</span></label>
									</div>
									<div class="controls">
										<h5>You cannot submit form without Agreeing. Agreeing means you have read and are satisfied with our terms and condition.</h5>
										<fieldset id="jform_profile_tos" class="radio" required aria-required="true">

											<input type="radio" id="jform_profile_tos0" name="jform[profile][tos]" value="1" required aria-required="true" />
											<label for="jform_profile_tos0">Agree </label>

											<input type="radio" id="jform_profile_tos1" name="jform[profile][tos]" value="0" checked="checked" required aria-required="true" />
											<label for="jform_profile_tos1">No </label>
										</fieldset>
									</div>
								</div>
							</fieldset>

							<div class="controls">
								<button type="submit" class="btn btn-primary" id="regButton">Register</button>
								<a class="btn btn-primary cancel" href="{{ route('login') }}" title="Login">Already have account?</a>
							</div>
						</form>
					</div>
				</div>
				<!-- //MAIN CONTENT -->
				<section class="page-category page-category__testimonials" id="termsnagreement">
					<header class="page_header">
						<h2><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Terms of service</span></h2>
					</header>
					<div class="items-row cols-2 row">
						<div class="col-sm-12">
							<article class="item column-1" id="item_48">
								<!--  title/author -->
								<header class="item_header">
									<h4 class="item_title">
										<span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">GENERAL TERMS</span>
										<span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">AND CONDITION</span>
									</h4>
								</header>
								<!-- Introtext -->
								<div class="item_introtext">
									<blockquote>
										<ul>
											<li style="list-style: decimal; text-align: left;margin-left:30px">This Agreement is entered into by these Terms & Conditions, which shall regulate the relationship between PERFECT ALGORITHM ACADEMY LIMITED, duly registered/incorporated under the Nigerian Laws  (hereinafter referred to as the Provider), and the customer who uses the service of the Provider being a natural and  legal entity is (hereinafter referred to as the Subscriber).</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Subscriber confirms that he/she has read, understood and accepted all the content of this terms and condition set out on Providers website. Thus, by accepting this Agreement, the Subscriber agrees and irrevocably accepts the terms and conditions herein contained, its annexes and/or appendixes as well as other documentation/information published on the Providers website.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The terms of this Agreement shall be considered accepted unconditionally by the Subscriber upon completing his/her registration/application form on the Providers website.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Subscriber is however, bound by these General Terms & Conditions together with any other terms conditions that may be applicable for the specific type of service or product we make available and any other terms, rules and conditions that we may subsequently put forward for easy management of the Providers product (trading signal)</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Terms and Conditions contained herein represent the complete, final and exclusive agreement between the Subscriber and the Provider and supersede all prior agreements, representations and understandings.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">By using the offered services (trading Signal), the Subscriber confirms that he/she has reached the age of 18 years or such legal age under the relevant and applicable laws in Nigeria.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">If you do not agree to be bound by the terms and conditions of this Agreement please do not complete your registration and cease using our services and inform us in writing immediately of your dissatisfaction, in order words completion of your registration form will be deemed and considered as unreserved acceptance to the terms and conditions herein contained.</li>
										</ul>
									</blockquote>
								</div>
								<!-- info BOTTOM -->
							</article>
							<!-- end item -->
						</div>
						<!-- end spann -->
						<div class="col-sm-12">
							<article class="item column-1" id="item_48">
								<!--  title/author -->
								<header class="item_header">
									<h4 class="item_title">
										<span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">ACCOUNT</span>
										<span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">OPENING</span>
									</h4>
								</header>
								<!-- Introtext -->
								<div class="item_introtext">
									<blockquote>
										<ul>A Subscriber may only open an account on this site on the following conditions:
											<li style="list-style: decimal; text-align: left;margin-left:30px">The client has read this legal Terms and conditions page in full and understood that the client will be buying and selling contracts subject to these terms and conditions.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The client has read the Company's privacy statement and is aware of how the Company processes information.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The client has sufficient experience and knowledge of financial trading to be capable of evaluating the merits and risks involve in binary volatility trading.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Subscriber is over 18 years of age.</li>
											The Company does not provide investment advice in relation to the Company's products or services
										</ul>
									</blockquote>
								</div>
								<!-- info BOTTOM -->
							</article>
							<!-- end item -->
						</div>
						<div class="col-sm-12">
							<article class="item column-1" id="item_48">
								<!--  title/author -->
								<header class="item_header">
									<h4 class="item_title">
										<span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">RISK ASSOCIATED</span>
										<span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">WITH THE PRODUCT</span>
									</h4>
								</header>
								<!-- Introtext -->
								<div class="item_introtext">
									<blockquote>
										<p>The Subscriber should not trade or invest in binary volatility trading unless the client knows and understands the products' risks involved, owing to the fact that the subscriber may lose all the money invested.</p>
										<p>"Binary volatility trading is an option that pay a pre-determined, fixed amount, depending on whether or not an event occurs at the time the Binary Option expires. Binary options can have only one of two possible outcomes and allow the client to take a simple "Yes or No" approach. There can only be two outcomes for the option, either the subscriber is paid the return upon the occurrence of the event, or the subscriber loses the investment amount as determined in each option.</p>
										<p>It is however pertinent to point out here that trading in binary options is speculative and involves a high degree of risk that can result in the loss of the subscriber's entire investment.  To that extent, binary options and related markets can be highly volatile. The prices of the underlying instrument that a Binary Option refers to may fluctuate rapidly and over wide ranges and may reflect unforeseeable events or changes in conditions, none of which can be controlled by the Provider.</p>
									</blockquote>
								</div>
								<!-- info BOTTOM -->
							</article>
							<!-- end item -->
						</div>
						<div class="col-sm-12">
							<article class="item column-1" id="item_48">
								<!--  title/author -->
								<header class="item_header">
									<h4 class="item_title">
										<span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">INTERNET</span>
										<span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">RISK</span>
									</h4>
								</header>
								<!-- Introtext -->
								<div class="item_introtext">
									<blockquote>
										<p>There are risks associated with utilizing an Internet-based deal execution trading system such as binary volatility trading, which includes, but not limited to, the failure of hardware, software or Internet connection. Since the Provider does not control internet network signal, the reliability of its connection, the subscriber’s computer processing speed/configuration of same or Binary.com website.</p>
										<ul>
											Consequently
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Subscriber accepts the risk caused by software or telecommunications facility failures, slow network, as well as by other technical problems.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Provider shall not be responsible for Subscriber’s losses sustained due to non-observance of instructions issued by the Provider’s facilitator</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Subscriber accepts the risk of executing unplanned trading transactions in the case of repeating an order before the last order processing results were received.</li>
											The Provider cannot bear any liability or be held responsible for communication failures, distortions, or delays during the subscriber’s online trading.
										</ul>
									</blockquote>
								</div>
								<!-- info BOTTOM -->
							</article>
							<!-- end item -->
						</div>
						<div class="col-sm-12">
							<article class="item column-1" id="item_48">
								<!--  title/author -->
								<header class="item_header">
									<h4 class="item_title">
										<span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">PROVIDERS COMPANY</span>
										<span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">TERMS AND CONDITIONS</span>
									</h4>
								</header>
								<!-- Introtext -->
								<div class="item_introtext">
									<blockquote>
										<ul>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Subscriber shall be entitled to have one session per day commencing from 8:30 am CAT to 10am CAT having subscribed with a non-refundable subscription fee of $500 per each month.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">A month for the purpose of this transaction and the required sessions for the Subscriber is 20 business working days and weekends are not inclusive.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">Subscribers shall have the prerogative or choice to subscribe for two sessions in a day, which cost $1000 and starts from 8:30 am CAT to 10am CAT and 10am CAT through to 11:30am CAT.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Subscriber is "highly advised" to trade with 1% of his/her capital in order to minimize losses, though the general standard for risk management on Trading account is 2%.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The management of your account as a Subscriber, is your exclusive responsibility and not that of the Provider. Your account information should be kept safe from a third party. Perfect Algorithm Academy will not ask a Subscriber for his/her trading account details. Consequently, Subscriber are to report to the management if anyone (staff) ask for the Subscriber’s Trading account details.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">Subscribers are only entitled to 100 non-negotiable signals in a month with exception to those who have subscribed for two sessions in a day.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">Five number signals will be sent out daily in each session to Subscribers.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Provider shall not be responsible for slippage in your account which is directly from the broker.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">Also the Subscriber shall be responsible for his/her internet provision during the aforementioned sessions, but we highly recommend that the Subscriber should get a good internet service network.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px"> We recommend a minimum of 500gig HDD (Hard Disk Drive) of a computer operating system. This is because speedy execution is needed for the Subscriber not to lose any signals issued out from the Provider.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px"> The Subscriber is recommended to fund his/her trading account with a minimum of $1000.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px"> Willful Absenteeism by the Subscriber is at his/her own risk/choice as the Provider company doesn't negotiate anything above 100 signals in a month any missed days will not be recounted again, thus the Subscriber is advised to always make him/her self-available whether through representation or being physically present.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Provider shall not be responsible for late execution as a result of broker not taking your trade at a particular time.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The company promises a high level success rate but has not promised that the signals sent out is a Holy Grail that gives a 100% successful outcome daily.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">Trading volatility index carries a high level of risk and to that extent the Subscribers should be aware that the decision and risk to trade this index is solely theirs and not because of any form of enticement, accuracy of signal or endorsement by the company to do so.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">In the event where the Subscriber has chosen to invest in trading the volatility index on binary options, they should take note that our past performance whether stated or demonstrated is not a guarantee of future results and outcome.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The company states categorically that it does not own any platform(s) nor in any way form a partnership with Binary.com and therefore is not liable nor responsible for any challenge(s) encountered by any Subscriber with Binary.com in the course of their trading with our signals.</li>
											<li style="list-style: decimal; text-align: left;margin-left:30px">The Provider may from time to time adjust its terms of contract with Subscribers without any pre information due to new regulations.</li>
										</ul>
									</blockquote>
								</div>
								<!-- info BOTTOM -->
							</article>
							<!-- end item -->
						</div>
						<div class="col-sm-12">
							<article class="item column-1" id="item_48">
								<!--  title/author -->
								<header class="item_header">
									<h4 class="item_title">
										<span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">UNDERTAKEN</span>
									</h4>
								</header>
								<!-- Introtext -->
								<div class="item_introtext">
									<blockquote>
										<p>The Subscriber hereby confirms to have read, understood and hereby accepts the risk statement relating to the use of Services on the Website, as the same is available electronically via the Website.</p>
										<p>The subscriber undertakes that he/she understands that the risk associated with online volatility trading, to the extent that he/she may completely lose all initial funds and any additional funds used when trading on the market.</p>
										<p>Sequel to the foregoing understanding of the binary volatility trading, the subscriber hereby undertake and agrees that the Provider cannot be held responsible or be sued for the subscriber’s losses caused directly or indirectly through the use of the received signal from the Provider, due to the volatility of the binary trading.</p>
										<p>The Subscriber, having gone through the out listed risks herein and understand same. Do unequivocally undertakes to bear full responsibility for any unauthorized trading resulting to risk associated with his/her trading account access, and must ensure that third parties cannot access the trade terminals.</p>
									</blockquote>
								</div>
								<!-- info BOTTOM -->
							</article>
							<!-- end item -->
						</div>
						<div class="col-sm-12">
							<article class="item column-1" id="item_48">
								<!--  title/author -->
								<header class="item_header">
									<h4 class="item_title">
										<span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">PROVIDER’S</span>
										<span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">COMPANY SERVICES</span>
									</h4>
								</header>
								<!-- Introtext -->
								<div class="item_introtext">
									<blockquote>
										<p>The Provider shall monthly provide consultation or advisory services, such as analytical trading signals of only binary volatility trading to its Subscribers.</p>
										<p>The Provider shall not be held responsible for any losses that the Subscriber may incur/suffer due to reliance on the received trading signal which turns out to be inaccurate or erroneous.</p>
										<p>To the maximum extent permitted by applicable law, under no circumstances shall we be responsible for any loss or damage resulting from use of the volatility index website or Services, from any content posted on or through the website or Services, or from the conduct of any users of the website or Services, whether online or offline.</p>
									</blockquote>
								</div>
								<!-- info BOTTOM -->
							</article>
							<!-- end item -->
						</div>
						<div class="col-sm-12">
							<article class="item column-1" id="item_48">
								<!--  title/author -->
								<header class="item_header">
									<h4 class="item_title">
										<span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">DISCLAIMER</span>
									</h4>
								</header>
								<!-- Introtext -->
								<div class="item_introtext">
									<blockquote>
										<p>The aforesaid trading signal does not construe or guarantee volatility accuracy of binary instrument trading or the prediction of accurate future performance, reason being that past performance is not a guarantee of or accurate prediction of the future of binary volatility movement. Consequently, the Provider makes no presentation/assurance of the trading signal accuracy. To that extent the provider will not be held liable or assume any liability for failure of the trading signal to be accurate.</p>
									</blockquote>
								</div>
								<!-- info BOTTOM -->
							</article>
							<!-- end item -->
						</div>
						<div class="col-sm-12">
							<article class="item column-1" id="item_48">
								<!--  title/author -->
								<header class="item_header">
									<h4 class="item_title">
										<span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">FORCE</span>
										<span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">MAJEURE</span>
									</h4>
								</header>
								<!-- Introtext -->
								<div class="item_introtext">
									<blockquote>
										<p>The Company is not responsible for the Subscriber’s losses sustained due to force majeure circumstances such as acts of war, terrorist attacks, natural disasters, financial market trading stops, currency interventions, government decisions, instability on financial markets with rapid drops of liquidity, and other significant changes of counteragents working process.</p>
									</blockquote>
								</div>
								<!-- info BOTTOM -->
							</article>
							<!-- end item -->
						</div>
						<div class="col-sm-12">
							<article class="item column-1" id="item_48">
								<!--  title/author -->
								<header class="item_header">
									<h4 class="item_title">
										<span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">ARBITRATION</span>
									</h4>
								</header>
								<!-- Introtext -->
								<div class="item_introtext">
									<blockquote>
										<p>Except as otherwise expressly provided in this Agreement, any dispute arising between the Parties (the Provider and the Subscriber) touching on or concerning the interpretation or performance of this Agreement or anything therein contained or the rights and liabilities of the Parties, which the Parties cannot settle by amicable resolution, then either Party may serve on the other a demand for reference to arbitration after initial attempt to resolve the dispute through Negotiation between the parties must have failed.</p>
										<p>Where the parties are unable to amicably resolve the dispute between them within thirty (30) days of notice of said dispute being given by one Party to the other Party, such Dispute shall be referred to an Arbitration Panel which shall be agreed and appointed by the Parties and shall be settled in accordance with the Nigerian Institute of Chartered Arbitration Rules (NICArb).</p>
										<p>Within thirty (30) days of such demand being served, each Party shall appoint an arbitrator and the two arbitrators thus appointed shall within fifteen (15) days appoint a third arbitrator.  If the arbitrators do not agree on the appointment of such third arbitrator, or if either Party fails to appoint the arbitrator to be appointed by him, such arbitrator shall be appointed by the Chairperson of Nigerian Institute of Chartered Arbitration Rules (NICArb), who in making his appointment, shall have regard to the nature of the Dispute in question and appoint an Arbitrator who is experienced and skilled in the area of dispute, and when appointed, the third arbitrator will convene meetings and act as chairman thereof.</p>
										<p>The award of arbitrators shall be determined by a majority of the arbitrators and the arbitrators award shall be binding upon the Parties and the expenses of the arbitration shall be borne by the Parties in such proportion and manner as may be provided in the award. The entire proceedings/venue of the Arbitration shall be held in Port Harcourt, Rivers State of Nigeria.</p>
									</blockquote>
								</div>
								<!-- info BOTTOM -->
							</article>
							<!-- end item -->
						</div>
						<div class="col-sm-12">
							<article class="item column-1" id="item_48">
								<!--  title/author -->
								<header class="item_header">
									<h4 class="item_title">
										<span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">PRIVACY</span>
										<span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">POLICY</span>
									</h4>
								</header>
								<!-- Introtext -->
								<div class="item_introtext">
									<blockquote>
										<p>PERFECT ALGORITHM ACADEMY LIMITED take your privacy very seriously. We however, collect, use and process certain personal information about you, these information about you that you give us by filling our Subscribers forms/agreements on our website, or by corresponding with us by phone, e-mail, in person or otherwise. It includes information you provide when you choose to use our services and/or become a Subscriber to our company, participate in any company event and when you send any information to us under any capacity. The information you give us may include your name, address, e-mail address and phone number, financial information etc.</p>
										<p>We will keep your personal information save while you have an account with us or while we are providing services and/or our products to you or while we are in a contractual relationship with us. Thereafter, we will keep your personal information for as long as there is a contractual relationship between parties and the Subscriber is hereby agree/accept to be bound by this policy.</p>
										<p>You are obliged to keep your usernames and passwords secret and ensure that third parties do not obtain access to your Trading Account. Without prejudice to any other provisions of this Agreement, you will be liable for all exposure of your personal data/ information.</p>
										<p>All information you provide to us is stored on secure website. Where we may have given you a password which enables you to access certain parts of our site and/or use any other of our services, you are responsible for keeping this password confidential, and we therefore, urge you not to share your password with anyone.</p>
										<p>It is worthy to mention here that, the transmission of information via the internet is not completely secure. Although we will do our best to protect your personal data, we cannot guarantee the security of your data transmitted to us; any transmission is at your own risk. Once we have received your information, we will use strict procedures and security features to try to prevent unauthorized access.</p>
										<p>We will disclose your personal information to third parties, if we are under a duty to disclose or share your personal data/information to any law enforcement agency while comply with any legal and/or regulatory obligation, please note that we will be bound to so do.</p>
									</blockquote>
								</div>
								<!-- info BOTTOM -->
							</article>
							<!-- end item -->
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div id="fixed-sidebar-left">
		<div class="moduletable  ">
			<div class="module_container">
			</div>
		</div>
	</div>

	<div id="fixed-sidebar-right">
	</div>
</div>
@endsection
