<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Personal Portfolio</title>
	<link rel="stylesheet" href="tailwind.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/jpg" href="icon/favicon-32x32.png" />
</head>

<body class="bg-body text-white font-poppins pb-12">

	<header class="py-6">
		<div class="container flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
			<div class="text-lg font-bold">Ashraf sayed</div>
			<div class="hidden md:flex gap-x-3 items-center">
				<a href="#" class="text-selected-text">الرئيسيه</a>
				<a href="#work">اعمالي</a>
				<a href="#skills">مهاراتي</a>
				<!-- <a href="#clients">العملاء</a> -->
				<a href="#hire"><button class="px-6 py-2 bg-theme font-bold rounded-md hover:bg-blue-500">وظفني</button></a>
			</div>
			<div class="md:hidden">
				<svg width="26" height="18" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M13 17.5H0.25V14.6667H13V17.5ZM25.75 10.4167H0.25V7.58333H25.75V10.4167ZM25.75 3.33333H13V0.5H25.75V3.33333Z" fill="white" />
				</svg>
			</div>
		</div>
	</header>


	<div class="container mt-16 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
		<div class="flex flex-wrap md:flex-nowrap">

			<nav class="inline-block lg:mr-24 lg:w-4 fixed left-percentage hidden xl:block">
				<div class="absolute left-50 transform -translate-x-1/2 space-y-6 mt-36">
					<a href="#" class="nav-dot selected-circle block w-7 h-7 rounded-full border-4 border-nav bg-body">
						<span class="bg-black px-2 py-1 rounded-md ml-10 opacity-0">الرئيسيه</span>
					</a>
					<a href="#skills" class="nav-dot block w-7 h-7 rounded-full border-4 border-nav bg-body">
						<span class="bg-black px-2 py-1 rounded-md ml-10 opacity-0">مهاراتي</span>
					</a>
					<a href="#work" class="nav-dot block w-7 h-7 rounded-full border-4 border-nav bg-body">
						<span class="bg-black px-2 py-1 rounded-md ml-10 opacity-0">اعمالي</span>
					</a>

					<a href="#hire" class="nav-dot block w-7 h-7 rounded-full border-4 border-nav bg-body">
						<span class="bg-black px-2 py-1 rounded-md ml-10 opacity-0">وظفني</span>
					</a>
				</div>
			</nav>

			<div class="flex flex-wrap lg:ml-20 justify-center md:justify-start max-w-xl mt-0 md:my-36">
				<h1 class="font-bold text-3xl md:text-6xl lg:text-7xl text-right md:text-right leading-5">ابني<br> تجربة مواقع انترنت رائعه</h1>
				<div class="w-full flex justify-center md:justify-start">
					<a href="tel:65594848" class="px-8 py-4 bg-theme hover:bg-blue-500 rounded-md text-white font-bold mt-12 flex items-center gap-x-3">
						<span>اتصل بي </span>
						<div>
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
							</svg>
						</div>
					</a>
				</div>
			</div>
			<!-- <img src="img/man.png" alt="Man" class="w-3/4 mt-12 md:absolute -mt-6 md:mt-0 right-0 -z-1"> -->
		</div>
	</div>
	<!-- My skilss -->
	<div class="container mt-64 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
		<section class="w-full">
			<h2 id="skills" class="secondary-title">مهاراتي </h2>
			<p class="section-paragraph">
				مهاراتي في تطوير المواقع ولغات البرمجه
			</p>
			<ul class="text-white shadow-lg max-w-lg">
				<li class="my-5 py-3 uppercase">
					<h3>html</h3>
					<span class="bar bg-gray-600 block h-5 border-2 border-gray-800 rounded-md overflow-hidden shadow-lg shadow-white transition-all duration-300 ease-linear hover:shadow-sm">
						<span class="html block h-full bg-green-700" style="width:96%"></span>
					</span>
				</li>
				<li class="my-5 py-3 uppercase">
					<h3>css</h3>
					<span class="bar bg-gray-600 block h-5 border-2 border-gray-800 rounded-md overflow-hidden shadow-lg shadow-white transition-all duration-300 ease-linear hover:shadow-sm">
						<span class="css block h-full bg-green-700" style="width:95%"></span>
					</span>
				</li>
				<li class="my-5 py-3 uppercase">
					<h3>javascript</h3>
					<span class="bar bg-gray-600 block h-5 border-2 border-gray-800 rounded-md overflow-hidden shadow-lg shadow-white transition-all duration-300 ease-linear hover:shadow-sm">
						<span class="javascript block h-full bg-green-700" style="width:78%"></span>
					</span>
				</li>
				<li class="my-5 py-3 uppercase">
					<h3>Vue js</h3>
					<span class="bar bg-gray-600 block h-5 border-2 border-gray-800 rounded-md overflow-hidden shadow-lg shadow-white transition-all duration-300 ease-linear hover:shadow-sm">
						<span class="vue block h-full bg-green-700" style="width:73%"></span>
					</span>
				</li>
				<li class="my-5 py-3 uppercase">
					<h3>tailwind css</h3>
					<span class="bar bg-gray-600 block h-5 border-2 border-gray-800 rounded-md overflow-hidden shadow-lg shadow-white transition-all duration-300 ease-linear hover:shadow-sm">
						<span class="tailwind block h-full bg-green-700" style="width:85%"></span>
					</span>
				</li>
				<li class="my-5 py-3 uppercase">
					<h3>php</h3>
					<span class="bar bg-gray-600 block h-5 border-2 border-gray-800 rounded-md overflow-hidden shadow-lg shadow-white transition-all duration-300 ease-linear hover:shadow-sm">
						<span class="php block h-full bg-green-700" style="width:75%"></span>
					</span>
				</li>
				<li class="my-5 py-3 uppercase">
					<h3>laravel</h3>
					<span class="bar bg-gray-600 block h-5 border-2 border-gray-800 rounded-md overflow-hidden shadow-lg shadow-white transition-all duration-300 ease-linear hover:shadow-sm">
						<span class="laravel block h-full bg-green-700" style="width:80%"></span>
					</span>
				</li>

			</ul>
		</section>
	</div>

	<!-- My work -->
	<div class="container mt-64 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
		<section class="w-full">
			<h2 id="work" class="secondary-title">اعمالي </h2>
			<p class="section-paragraph">
				لقد قمت بتصميم وبرمجة العديد من المشاريع التي تم تطويرها بشكل عام وخاص.
			</p>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
				<a href="https://rawjly.com">
					<img src="images/rawjlycom.png" class="w-full bg-nav h-36 lg:h-72 object-cover">
				</a>
				<a href="https://cleanpestcontrols.com">
					<img src="images/cleanpestcontrols.png" class="w-full bg-nav h-36 lg:h-72 object-cover">
				</a>
				<a href="https://rawjly.net">
					<img src="images/rawjlynet.png" class="w-full bg-nav h-36 lg:h-72 object-cover">
				</a>
			</div>
		</section>
	</div>




	<!-- Hire me -->
	<div class="container mt-64 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
		<section class="w-full">
			<h2 id="hire" class="secondary-title">
				وظفني
			</h2>
			<p class="section-paragraph">
				لا تتردد في التواصل معي عن طريق البريد الالكتروني أو التواصل معي على رقم الهاتف
			</p>

			<div class="w-full grid lg:grid-cols-2 gap-8 lg:gap-32 mt-24">

				<div class="space-y-12">
					<form method="GET" action="mailto:ashrafsayed19841111@gmail.com" enctype="text/plain">
						<div>
							<label class="text-white block mb-6 text-xl font-bold">الاسم </label>
							<input class="w-full border border-input-border bg-input px-4 py-4" name="name">
						</div>
						<div>
							<label class="text-white block mb-6 text-xl font-bold">
								البريد الالكتروني
							</label>
							<input type="email" class="w-full border border-input-border bg-input px-4 py-4" name="email">
						</div>
						<div>
							<label class="text-white block mb-6 text-xl font-bold">
								الرساله
							</label>
							<textarea name="message" class="w-full border border-input-border bg-input px-4 py-4 h-56 resize-none"></textarea>
						</div>
						<input type="hidden" name="body" />
						<input type="submit" value="ارسل" class="px-6 py-2 bg-theme hover:bg-blue-500 rounded-md text-white font-bold" />
					</form>
				</div>

				<div class="mt-12">
					<!-- Contact info -->
					<p class="text-secondary">65594848</p>
					<a href="mailto:email@mydomain.com" class="text-secondary underline mt-3 block">ashrafsayed19841111@gmail.com</a>

					<!-- Socials -->
					<!-- <div class="flex mt-20 space-x-6">
						
							<a href="#">
								<svg class="w-8 h-8 lg:w-12 lg:h-12" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M43.1494 28.252C43.3496 27.1533 43.457 26.0303 43.457 24.9072C43.457 22.417 42.9688 20 42.0068 17.7295C41.0791 15.5322 39.7461 13.5596 38.0518 11.8652C36.3716 10.1808 34.3799 8.83914 32.1875 7.91504C29.9121 6.95313 27.5 6.46484 25.0098 6.46484C23.8379 6.46484 22.6611 6.57715 21.5186 6.79687C19.9376 5.9591 18.176 5.51995 16.3867 5.51758C13.4717 5.51758 10.7275 6.65527 8.66699 8.71582C7.65021 9.72738 6.84403 10.9305 6.29507 12.2555C5.74611 13.5806 5.46526 15.0013 5.46875 16.4355C5.46875 18.291 5.94727 20.1172 6.84082 21.7285C6.66016 22.7734 6.5625 23.8428 6.5625 24.9072C6.5625 27.3975 7.05078 29.8145 8.0127 32.085C8.94043 34.2822 10.2686 36.2549 11.9629 37.9492C13.6572 39.6436 15.6299 40.9717 17.8272 41.8994C20.1025 42.8613 22.5147 43.3496 25.0049 43.3496C26.0889 43.3496 27.1729 43.252 28.2373 43.0615C29.8731 43.9844 31.7188 44.4775 33.6084 44.4775C36.5234 44.4775 39.2676 43.3447 41.3281 41.2793C43.3936 39.2188 44.5264 36.4746 44.5264 33.5596C44.5313 31.7041 44.0527 29.873 43.1494 28.252ZM25.083 36.2061C18.5303 36.2061 15.6006 32.9834 15.6006 30.5713C15.6006 29.3311 16.5137 28.4668 17.7734 28.4668C20.5762 28.4668 19.8535 32.4951 25.083 32.4951C27.7637 32.4951 29.2432 31.04 29.2432 29.5508C29.2432 28.6572 28.8037 27.6611 27.0361 27.2266L21.2061 25.7715C16.5137 24.5947 15.6592 22.0557 15.6592 19.6729C15.6592 14.7217 20.3223 12.8613 24.7022 12.8613C28.7354 12.8613 33.4912 15.0928 33.4912 18.0615C33.4912 19.3359 32.3877 20.0732 31.1279 20.0732C28.7354 20.0732 29.1748 16.7627 24.3555 16.7627C21.9629 16.7627 20.6397 17.8467 20.6397 19.3945C20.6397 20.9424 22.5293 21.4355 24.1699 21.8115L28.4863 22.7686C33.2129 23.8232 34.4092 26.582 34.4092 29.1797C34.4092 33.1982 31.3184 36.2061 25.083 36.2061Z" fill="white"/></svg>
							</a>
						
							<a href="#">
								<svg class="w-8 h-8 lg:w-12 lg:h-12" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 0C9.40313 0 0 9.40313 0 21C0 32.5969 9.40313 42 21 42C32.5969 42 42 32.5969 42 21C42 9.40313 32.5969 0 21 0ZM31.0922 15.8297C31.1062 16.05 31.1062 16.2797 31.1062 16.5047C31.1062 23.3859 25.8656 31.3125 16.2891 31.3125C13.3359 31.3125 10.5984 30.4547 8.29219 28.9781C8.71406 29.025 9.11719 29.0437 9.54844 29.0437C11.9859 29.0437 14.2266 28.2188 16.0125 26.8219C13.725 26.775 11.8031 25.275 11.1469 23.2125C11.9484 23.3297 12.6703 23.3297 13.4953 23.1188C12.3175 22.8795 11.2588 22.2398 10.4991 21.3084C9.73949 20.377 9.32572 19.2113 9.32812 18.0094V17.9437C10.0172 18.3328 10.8281 18.5719 11.6766 18.6047C10.9633 18.1293 10.3784 17.4854 9.97365 16.7298C9.5689 15.9743 9.35683 15.1306 9.35625 14.2734C9.35625 13.3031 9.60938 12.4172 10.0641 11.6484C11.3714 13.2578 13.0028 14.5741 14.8522 15.5117C16.7016 16.4493 18.7275 16.9873 20.7984 17.0906C20.0625 13.5516 22.7063 10.6875 25.8844 10.6875C27.3844 10.6875 28.7344 11.3156 29.6859 12.3281C30.8625 12.1078 31.9875 11.6672 32.9906 11.0766C32.6016 12.2812 31.7859 13.2984 30.7031 13.9406C31.7531 13.8281 32.7656 13.5375 33.7031 13.1297C32.9953 14.1703 32.1094 15.0938 31.0922 15.8297Z" fill="white"/></svg>								
							</a>
						</div> -->
				</div>

			</div>

		</section>
	</div>
	<footer class="w-full lg:w-3/4 mx-auto">
		<div class="py-6 px-4 md:flex md:items-center md:justify-between">
			<span class="text-sm text-gray-300 sm:text-center">© 2022 <a href="#">Ashraf Sayed</a>. All Rights Reserved.
			</span>
			<div class="flex mt-4 gap-x-4 sm:justify-center md:mt-0">
				<a href="https://www.facebook.com/ashraf.sayed.963434/" class="text-gray-400 hover:text-white">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
					</svg>
				</a>
				<!-- <a href="#" class="text-gray-400 hover:text-white">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
					</svg>
				</a> -->
				<!-- <a href="#" class="text-gray-400 hover:text-white">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
					</svg>
				</a> -->
				<a href="https://github.com/ashrafsayed2018" class="text-gray-400 hover:text-white">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
					</svg>
				</a>
				<a href="https://rawjly.com" class="text-gray-400 hover:text-white">
					<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
						<path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
					</svg>
				</a>
			</div>
		</div>
	</footer>

	<script src="main.js"></script>
	<script>
		var form = document.getElementsByTagName('form')[0];

		form.addEventListener('submit', contact, false);

		function contact(e) {
			// Prevent Default Form Submission
			e.preventDefault();

			var target = e.target || e.srcElement;

			var i = 0;
			var message = '';

			// Loop Through All Input Fields
			for (i = 0; i < target.length; ++i) {
				console.log(target[i].value);
				// Check to make sure it's a value. Don't need to include Buttons
				if (target[i].type != 'text' && target[i].type != 'textarea') {
					// Skip to next input since this one doesn't match our rules
					continue;
				}

				// Add Input Name and value followed by a line break
				message += target[i].name + ': ' + target[i].value + "\r\n";
			}
			// Modify the hidden body input field that is required for the mailto: scheme
			target.elements["body"].value = message;

			// Submit the form since we previously stopped it. May cause recursive loop in some browsers? Should research this.
			this.submit();
		}
	</script>

</body>

</html>