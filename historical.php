<?php

require_once 'libs.php';
$smarty->assign('title', 'Historical Derivations');
$content = <<<END
<strong>Instructions</strong>: Click to reveal applications of a phonological rule in each column.
    Paper & pencil are helpful if you'd like to test yourself before revealing answers.</p>
<p><button id="showall" class="btn btn-primary">Show All Answers</button></p> 
<div class="table-responsive">
<table class="table-striped table-bordered" width="90%">
	<tbody>
		<tr>
			<th>PIE</th>
			<th>1st GMC consonant shift</th>
			<th>Verner&#8217;s Law</th>
			<th>GMC accent shift</th>
			<th>GMC vowel shift</th>
			<th>Nasal assimilation</th>
		</tr>
		<tr>
			<td>*/p&#601;t&#7703;r/</td>
			<td>*/<span id="f&#601;&#254;&#7703;r" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="f&#601;d&#7703;r" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="f&#601;&#769;d&#275;r" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="f&#225;d&#483;r" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="f&#225;d&#483;r" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/sl&#7703;bonom/</td>
			<td>*/<span id="sl&#7703;ponom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="sl&#7703;ponom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="sl&#7703;ponom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="sl&#483;&#769;panam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="sl&#483;&#769;panan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/kmt&#243;m/</td>
			<td>*/<span id="hm&#254;&#243;m" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="hmd&#243;m" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="h&#7743;dom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="h&#7743;dam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="h&#324;dan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/d&#233;kmt/</td>
			<td>*/<span id="t&#233;hm&#254;" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="t&#233;hmd" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="t&#233;hmd" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="t&#233;hmd" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="t&#233;hnd" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/gny&#243;m/</td>
			<td>*/<span id="kny&#243;m" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="kny&#243;m" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="k&#324;yom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="k&#324;jam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="k&#324;jan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/b<sup>h</sup>&#233;ronom/</td>
			<td>*/<span id="b&#233;ronom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#233;ronom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#233;ronom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#233;ranam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#233;ranan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/g<sup>h</sup>&#7703;b<sup>h</sup>&#299;t/</td>
			<td>*/<span id="g&#7703;b&#299;&#254;" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#7703;b&#299;d" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#7703;b&#299;d" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#483;&#769;b&#299;d" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#483;&#769;b&#299;d" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/d<sup>h</sup>&#7811;rom/</td>
			<td>*/<span id="d&#7811;rom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="d&#7811;rom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="d&#7811;rom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="d&#250;ram" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="d&#250;ran" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/d<sup>h</sup>&#7811;rys/</td>
			<td>*/<span id="d&#7811;rys" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="d&#7811;ryz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="d&#7811;ryz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="d&#250;riz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="d&#250;riz" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/m&#233;d<sup>h</sup>yos/</td>
			<td>*/<span id="m&#233;dyos" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="m&#233;dyoz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="m&#233;dyoz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="m&#233;djaz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="m&#233;djaz" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/g<sup>h</sup>&#243;stys/</td>
			<td>*/<span id="g&#243;stys" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#243;styz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#243;styz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#225;stiz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#225;stiz" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/st&#233;yg<sup>h</sup>onom/</td>
			<td>*/<span id="st&#233;ygonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="st&#233;ygonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="st&#233;ygonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="st&#233;iganam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="st&#233;iganan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/b<sup>h</sup>&#233;nd<sup>h</sup>onom/</td>
			<td>*/<span id="b&#233;ndonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#233;ndonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#233;ndonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#233;ndanam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#233;ndanan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/b<sup>h</sup>&#324;d<sup>h</sup>ete/</td>
			<td>*/<span id="b&#324;de&#254;e" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#324;dede" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#324;dede" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#324;dede" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="b&#324;dede" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/sk&#233;ynonom/</td>
			<td>*/<span id="sk&#233;ynonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="sk&#233;ynonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="sk&#233;ynonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="sk&#233;inanam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="sk&#233;inanan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/s&#233;ng<sup>h</sup>wonom/</td>
			<td>*/<span id="s&#233;ngwonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="s&#233;ngwonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="s&#233;ngwonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="s&#233;ngwanam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="s&#233;ngwanan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/st&#233;rnos/</td>
			<td>*/<span id="st&#233;rnos" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="st&#233;rnoz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="st&#233;rnoz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="st&#233;rnaz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="st&#233;rnaz" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/k&#225;ptos/</td>
			<td>*/<span id="h&#225;ftos" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="h&#225;ftoz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="h&#225;ftoz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="h&#225;ftaz" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="h&#225;ftaz" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/t&#243;ngyonom/</td>
			<td>*/<span id="&#254;&#243;nkyonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="&#254;&#243;nkyonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="&#254;&#243;nkyonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="&#254;&#225;nkijanam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="&#254;&#225;nkijanan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/moys&#243;m/</td>
			<td>*/<span id="moys&#243;m" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="moyz&#243;m" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="m&#243;yzom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="m&#225;izam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="m&#225;izan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/moyst&#243;m/</td>
			<td>*/<span id="moyst&#243;m" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="moyst&#243;m" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="m&#243;ystom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="m&#225;istam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="m&#225;istan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/p&#243;nkonom/</td>
			<td>*/<span id="f&#243;nhonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="f&#243;nhonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="f&#243;nhonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="f&#225;nhanam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="f&#225;nhanan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/ponkon&#243;m/</td>
			<td>*/<span id="fonhon&#243;m" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="fongon&#243;m" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="f&#243;ngonom" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="f&#225;nganam" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="f&#225;nganan" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/g<sup>h</sup>&#233;b<sup>h</sup>ety/</td>
			<td>*/<span id="g&#233;be&#254;y" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#233;bedy" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#233;bedy" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#233;bedi" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="g&#233;bedi" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
		<tr>
			<td>*/kw&#243;d/</td>
			<td>*/<span id="hw&#243;t" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="hw&#243;t" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="hw&#243;t" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="hw&#225;t" class="btn btn-xs btn-default revealtext">?</span>/</td>
			<td>*/<span id="hw&#225;t" class="btn btn-xs btn-default revealtext">?</span>/</td>
		</tr>
	</tbody>
</table>
</div>
        
<script>

$( ".revealtext" ).on( "click", function() {
  var thisText = $( this ).text();
  var textID = $( this ).attr("id");
  
  $( this ).removeClass("btn-xs");
  $( this ).removeClass("btn-default");
  $( this ).removeClass("btn");
  $( this ).removeClass("revealtext");
  $( this ).text(textID);

  event.stopPropagation();
});

$( "#showall" ).on( "click", function() {
	$( ".revealtext" ).each(function() {
	  var thisText = $( this ).text();
	  var textID = $( this ).attr("id");
	  $( this ).removeClass("btn-xs");
	  $( this ).removeClass("btn-default");
	  $( this ).removeClass("btn");
	  $( this ).removeClass("revealtext");
	  $( this ).text(textID);
	  });
event.stopPropagation();
});
</script>
END;
$smarty->assign('content', $content);
$smarty->display('index.tpl');
?>