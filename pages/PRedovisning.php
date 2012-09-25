<?php
// =============================================================================
//
// 	PIndex.php
//
require_once('src/CHTMLPage.php');
  	  $test = new CHTMLPage();


// -----------------------------------------------------------------------------
// 	Page specific code
//

$html = <<<EOD

 <div class="main-container">
        	<article>
        		<section>
        			<h1 class="h-left">Redovisning</h1>
        			
        			<h3>KMOM1</h3>
        			<p class="text-box">
        			Mina tidigare erfarenheter inom PHP &auml;r fr&aring;n kurserna Databaser och webbapp intro samt Databaser och OO PHP.
        			Tyv&aumlrr har jag &auml;nnu inte f&aring;tt m&ouml;jligheten att jobba med php f&ouml;r att skaffa mig mer erfarenhet.
        			Jag har aldrig kommit i kontakt med BoilerPlate innan utan det blir en ny l&auml;rdom f&ouml;r mig. 
        			Videon om BoilerPlate var informativ, fast f&ouml;rklaras p&aring; en "h&ouml;gre niv&aring;". 
        			Detta g&ouml;r att jag inte h&auml;nger med 100% p&aring; alla som tas upp (skall se den n&aring;gra g&aring;nger till). 
        			Litteratur var l&auml;tt l&auml;st. Dock beh&ouml;vs nog teorin fr&aring;n litteratur s&auml;ttas i praktik f&ouml;r att det skall klarna helt 
        			med abstrakt, inherit osv. (har gjort det innan i java men &auml;r lite rostig).
        			</p>
        			<p class="text-box">
        			Boilerplate-konceptet k&auml;nns som en bra och smidig l&ouml;sning f&ouml;r att komma ig&aring;ng. Jag hade dock lite pill och strul med
        			implementera Front- och pagecontrollern (lite ring rostig h&auml;r med, beh&ouml;vde repetera) samt f&aring; till min template p&aring; ett effektivt s&auml;tt
        			s&aring; att jag kan &aring;teranv&auml;nda den (CHTMLPage.php). Det kommer nog att ta ett tag innan jag v&auml;njer mig och 
        			uppskatta allt med BoilerPlate till fullt ut. Jag hoppas att vidare moment i kursen &ouml;kar min f&ouml;rst&aring;else och uppskattning f&ouml;r Boilerplate.
        			Det som var extra intressant med HTML5Boilerplate var all inlagd hantering av IE f&ouml;r att &ouml;ka stabiliteten och kompablitet.
        			</p>
        			<p class="text-box">
        			Som jag n&auml;mde innan s&aring; implementerade jag front- pagekontroller eftersom den f&ouml;rsta versionen
        			av KMOM1 bara blev ren HTML i stort s&auml;tt. Det k&auml;ndes fel eftersom det &auml;r en php-kurs och d&auml;rf&ouml;r &auml;ndrade 
        			jag uppl&auml;gget, vilket skapade lite mer tid. 
        			</p>
        			<p class="text-box">
        			Utvecklingsmilj&ouml;n:
        			<ul>
        				<li class="li-blue">OS Windows 7</li>
        				<li class="li-blue">Firefox</li>
        				<li class="li-blue">Filezilla</li>
        				<li class="li-blue">Putty</li>
        				<li class="li-blue">JEdit</li>
        			<ul>
        			</p>
        			
        			
        		</section>
        	</article>
        </div>

EOD;

// -----------------------------------------------------------------------------
// 
//	Create and print out the resulting page
//
require_once('src/CHTMLPage.php');

$page = new CHTMLPage();

$page->printHTMLHeader('Daniel Lenander, PHP och MVC');
$page->printPageHeader();
$page->printPageBody($html);
$page->printPageFooter();
?>