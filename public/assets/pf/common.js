var language_code;
	
	
	$(document).ready(function () {
	
		setLanguage();
		/*
		//$.isLoading({ text: "Loading" });
		$("#header").load("header.html"); 
		$("#footer").load("footer.html"); 
		
		setTimeout(function(){
			setLanguage();
			//$.isLoading( "hide" );
		}, 1000);
		*/
	});
	

	var englishFileName = "js/languages/english.js";
	var hindiFileName = "js/languages/languages/hindi.js";
	var kannadaFileName = "js/languages/kannada.js";
	var marathiFileName = "js/languages/marathi.js";
	var gujaratiFileName = "js/languages/gujarati.js";
	var teluguFileName = "js/languages/telugu.js";
	var tamilFileName = "js/languages/tamil.js";
	var oriyaFileName = "js/languages/oriya.js";
	var malayalamFileName = "js/languages/malayalam.js";
	var bengaliFileName = "js/languages/bengali.js";
	
	function plus()
    {
    	$('#top-header').css({'font-size':'14px'});
		$('#img1').css({'font-size':'28px'});
		$('#img2').css({'font-size':'28px'});
		$('#img3').css({'font-size':'28px'});
		$('#img4').css({'font-size':'28px'});
		$('#img5').css({'font-size':'28px'});
		$('.about h4').css({'font-size':'16px'});
		$('.data-block').css({'font-size':'14px'});
		$('.container-4').css({'font-size':'13px'});
		
		
		$('#scheme_eligibility_txt').css({'font-size':'17px'});
		$('#textile_sector_txt').css({'font-size':'17px'});
		$('#est_data').css({'font-size':'15px'});
		
    }

    function minus(){
    	$('#top-header').css({'font-size':'12px'});
		$('#img1').css({'font-size':'24px'});
		$('#img2').css({'font-size':'24px'});
		$('#img3').css({'font-size':'24px'});
		$('#img4').css({'font-size':'24px'});
		$('#img5').css({'font-size':'24px'});
		$('.about h4').css({'font-size':'13px'});
		$('.data-block').css({'font-size':'12px'});
		$('.container-4').css({'font-size':'11px'});
		
		$('#scheme_eligibility_txt').css({'font-size':'15px'});
		$('#textile_sector_txt').css({'font-size':'15px'});
		$('#est_data').css({'font-size':'13px'});
    }

    function normal(){
    	$('#top-header').css({'font-size':'13px'});
		$('#img1').css({'font-size':'26px'});
		$('#img2').css({'font-size':'26px'});
		$('#img3').css({'font-size':'26px'});
		$('#img4').css({'font-size':'26px'});
		$('#img5').css({'font-size':'26px'});
		$('.about h4').css({'font-size':'15px'});
		$('.data-block').css({'font-size':'13px'});
		$('.container-4').css({'font-size':'12px'});
		
		$('#scheme_eligibility_txt').css({'font-size':'16px'});
		$('#textile_sector_txt').css({'font-size':'16px'});
		$('#est_data').css({'font-size':'14px'});
    }

    

	function setFileName(){
		englishFileName = "js/languages/english.js";
		hindiFileName = "js/languages/hindi.js";
		kannadaFileName = "js/languages/kannada.js";
		marathiFileName = "js/languages/marathi.js";
		gujaratiFileName = "js/languages/gujarati.js";
		teluguFileName = "js/languages/telugu.js";
		tamilFileName = "js/languages/tamil.js";
		oriyaFileName = "js/languages/oriya.js";
		malayalamFileName = "js/languages/malayalam.js";
		bengaliFileName = "js/languages/bengali.js";
	}
	

function language(language_id){
		
	$('.english').css({'opacity':'1'});
	$('.tamil').css({'opacity':'1'});
	$('.marathi').css({'opacity':'1'});
	$('.kannada').css({'opacity':'1'});
	$('.oriya').css({'opacity':'1'});
	$('.malayalam').css({'opacity':'1'});
	$('.telugu').css({'opacity':'1'});
	$('.gujarati').css({'opacity':'1'});
	$('.hindi').css({'opacity':'1'});
	$('.bengali').css({'opacity':'1'});


	localStorage.setItem("language_code", language_id);
	setFileName();
		
	if(language_id == 1)
	{
		loadLanguageJS(englishFileName);
		$('.english').css({'opacity':'.3'});
	}
	if(language_id == 9)
	{
		loadLanguageJS(hindiFileName);
		$('.hindi').css({'opacity':'.3'});
	}
	if(language_id == 4)
	{
		loadLanguageJS(kannadaFileName);
		$('.kannada').css({'opacity':'.3'});

	}
	if(language_id == 3)
	{
		loadLanguageJS(marathiFileName);
		$('.marathi').css({'opacity':'.3'});

	}
	if(language_id == 8)
	{
		loadLanguageJS(gujaratiFileName);
		$('.gujarati').css({'opacity':'.3'});
	}
		if(language_id == 7)
	{
		loadLanguageJS(teluguFileName);
		$('.telugu').css({'opacity':'.3'});
	}
	if(language_id == 2)
	{
		loadLanguageJS(tamilFileName);
		$('.tamil').css({'opacity':'.3'});
	}
	if(language_id == 5)
	{
		loadLanguageJS(oriyaFileName);
		$('.oriya').css({'opacity':'.3'});
	}
	if(language_id == 6)
	{
		loadLanguageJS(malayalamFileName);
		$('.malayalam').css({'opacity':'.3'});
	}

	if(language_id == 10)
	{
		loadLanguageJS(bengaliFileName);
		$('.bengali').css({'opacity':'.3'});
	}
}

	function loadLanguageJS(file_name) {
		/*
		var jsElm = document.createElement("script");
		jsElm.type = "application/javascript";
		jsElm.src = file_name;
		document.head.appendChild(jsElm);
		*/
		
		var script_file = document.createElement("script");
		script_file.type = "text/javascript";
		script_file.src = file_name;
		$("head").append(script_file);
	}

	function setLanguage(){
		
		var language = localStorage.getItem("language_code");
		
	
		
		$('.english').css({'opacity':'1'});
		$('.tamil').css({'opacity':'1'});
		$('.marathi').css({'opacity':'1'});
		$('.kannada').css({'opacity':'1'});
		$('.oriya').css({'opacity':'1'});
		$('.malayalam').css({'opacity':'1'});
		$('.telugu').css({'opacity':'1'});
		$('.gujarati').css({'opacity':'1'});
		$('.hindi').css({'opacity':'1'});
		$('.bengali').css({'opacity':'1'});

   	    setFileName();
		
		if(language == 1)
		{	
			loadLanguageJS(englishFileName);
			$('.english').css({'opacity':'.3'});
		}
		if(language == 9)
		{
			loadLanguageJS(hindiFileName);
			$('.hindi').css({'opacity':'.3'});
		}
		if(language == 4)
		{
			loadLanguageJS(kannadaFileName);
			$('.kannada').css({'opacity':'.3'});
		}
		if(language == 3)
		{
			loadLanguageJS(marathiFileName);
			$('.marathi').css({'opacity':'.3'});
		}
		if(language == 8)
		{
			loadLanguageJS(gujaratiFileName);
			$('.gujarati').css({'opacity':'.3'});
		}
		if(language == 7)
		{
			loadLanguageJS(teluguFileName);
			$('.telugu').css({'opacity':'.3'});
		}
		if(language == 2)
		{
			loadLanguageJS(tamilFileName);
			$('.tamil').css({'opacity':'.3'});
		}
		if(language == 5)
		{
			loadLanguageJS(oriyaFileName);
			$('.oriya').css({'opacity':'.3'});
		}
		if(language == 6)
		{
			loadLanguageJS(malayalamFileName);
			$('.malayalam').css({'opacity':'.3'});
		}
		if(language == 10)
		{
			loadLanguageJS(bengaliFileName);
			$('.bengali').css({'opacity':'.3'});
		}
		
	}