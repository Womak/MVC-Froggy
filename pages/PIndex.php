<?php

include ("config.php");

$data['title'] = "Min sida";
$data['meta_description'] = "Lite fakta om Daniel";
$data['main'] = <<<EOD
        <article>
        		<section>
        			<h1 class="h-left">Vem &auml;r jag?</h1>
        			<img class="img-inText" src="img/_DSC5557.jpg" alt="Picture of Daniel and his wife"/>
        
        			<p class="text-box">
        			Jag heter Daniel Lenander och bor i Vellinge i underbara Sk&aring;neland 
        			med min fru och mina tv&aring; barn (knappt 1,5 och 3 &aring;r gamla). 
        			Anledningen till varf&ouml;r jag b&ouml;rjade l&auml;sa PHP och MVC var f&ouml;r att 
        			jag fick smak f&ouml;r PHP n&auml;r jag l&auml;ste Informationsteknologi programmet p&aring; BTH 
        			 f&ouml;r att vidareutveckla mig 
        			sj&auml;lva. Efter att ha jobbat med missbrukare, kriminella, 
        			heml&ouml;sa och psyksjuka under flera &aring;r s&aring; k&auml;nde jag 
        			f&ouml;r att byta milj&ouml; och inriktning. 
        			</p>
        			<p class="text-box">Nu n&auml;r man har mognat 
        			och b&ouml;rjar inse vad man vill syssla med i livet s&aring; var valet 
        			inte s&aring; sv&aring;rt. Resan f&ouml;r att skaffa sig kunskap inom ett 
        			nytt yrke har varit l&aring;ng men v&auml;ldigt givande och jag 
        			&aring;ngrar inte en sekund. 
        			</p>
        			<p class="text-box">
        			Jag &auml;r uppv&auml;xt med datorer och det har alltid varit en 
        			sj&auml;lvklar del av mitt liv. Dock har man varit f&ouml;r d&aring;lig 
        			p&aring; att l&auml;ra sig mer om hur allt egentligen fungerar. Man har tagit 
        			det f&ouml;r givet och bara k&ouml;rt p&aring;. Det &auml;r inte 
        			f&ouml;rren senare &aring;r som jag har blivit intresserad av att 
        			sj&auml;lva kunna skapa applikationer och anv&auml;nda datorn p&aring; 
        			ett nytt s&auml;tt. N&auml;r man har familj s&aring; blir livet ganska 
        			omstrukturerat och ens egna intressen s&auml;tts &aring;t sidan f&ouml;r att
        			ta hand om barn och det "vuxna" livet. Detta har inneburit att mitt 
        			stora intresse av dator spel(MMO) har hamnat i tr&auml;da. Vilket 
        			&auml;r tur f&ouml;r annars hade jag kanske aldrig suttit h&auml;r 
        			framf&ouml;r datorn och vidareutbildat mig, utan &ouml;dslat viktig tid 
        			framf&ouml;r ett spel.
        			</p>
        			
        		</section>
        	</article>
EOD;

include(__DIR__."/theme/core/template.php");

?>

