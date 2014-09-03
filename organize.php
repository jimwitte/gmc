<?php
require_once 'libs.php'; 
$smarty->assign('title','Classification');
$content = <<<END
<p><strong>Instructions</strong>: Click to reveal English cognates and classification codes.</p>
<p><button id="showall" class="btn btn-primary">Show All Answers</button></p>
<div class="table-responsive">
	<table class="table-striped table-bordered" width="90%">
		<tr>
			<th>German</th>
			<th>English</th>
			<th>Danish</th>
			<th>Cognate</th>
			<th>Loanword</th>
		</tr>
		<tr>
			<td>England (n)</td>
			<td><span id="England" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>England</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Grab (n)</td>
			<td><span id="grave" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>grav</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Monument (n)</td>
			<td><span id="monument" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>monument</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>y</td>
		</tr>
		<tr>
			<td>Umgebung (f)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>omgivelse</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Inschrift (f)</td>
			<td><span id="inscription" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>indskrift</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>y</td>
		</tr>
		<tr>
			<td>Grab (n)</td>
			<td><span id="grave" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>graven</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Spur (f)</td>
			<td><span id="&Oslash;* (spoor)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>spor</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Leiche (f)</td>
			<td><span id="&Oslash;* (litch-)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>lig</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Verwunderung (f)</td>
			<td><span id="&Oslash;* (wonder)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>forundring</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Zeit (f)</td>
			<td><span id="&Oslash;* (tide)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>tid</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Name/n (m)</td>
			<td><span id="name" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>navn</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Leben (n)</td>
			<td><span id="life" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>liv</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Manns (m)</td>
			<td><span id="&Oslash;* (man)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>mand</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Welt (f)</td>
			<td><span id="&Oslash;* (world)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>verden</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Zwiesprache (f)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Buch (n)</td>
			<td><span id="book" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>bog</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Titel (m)</td>
			<td><span id="title" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>titel</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>y</td>
		</tr>
		<tr>
			<td>Lust (f)</td>
			<td><span id="&Oslash;* (lust)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>lyst</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Buch (n)</td>
			<td><span id="book" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>bogen</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Sinn (m)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>sind</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Gedanke/n (m)</td>
			<td><span id="thought" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>tanke</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Mensch/en (m)</td>
			<td><span id="man" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>menneske</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Seele (f)</td>
			<td><span id="soul" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>sj&aelig;l</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Sorgen (pl)</td>
			<td><span id="&Oslash;* (sorrow)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (sorg)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Gesch&auml;ft (n)</td>
			<td><span id="&Oslash;* (shape)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (skabe)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Neugierde (f)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>nysgerrighed</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Erfahrung (f)</td>
			<td><span id="&Oslash;* (fare)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (fare)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Dichter- (m)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>digterens</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>wortes (n)</td>
			<td><span id="word" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>ord</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Grabe (n)</td>
			<td><span id="grave" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>graven</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Ruh (f)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (ro)</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Bewohner (m)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Trauer (f)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Ruhe (f)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (ro)</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Ende (n)</td>
			<td><span id="&Oslash;* (end)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (ende)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Welt (f)</td>
			<td><span id="world" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>verden</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Haus (n)</td>
			<td><span id="&Oslash;* (house)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>hus</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Heim (n)</td>
			<td><span id="home" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>hjem</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Anschrift (f)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>[ Adresse (f) ]</td>
			<td><span id="&Oslash;* (address)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (adresse)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>y</td>
		</tr>
		<tr>
			<td>Eumeniden (pl)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>Eumeniderne</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>y</td>
		</tr>
		<tr>
			<td>Tempels (m)</td>
			<td><span id="temple" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>templets</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>y</td>
		</tr>
		<tr>
			<td>Pforte (f)</td>
			<td><span id="&Oslash;* (portal)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (port)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>y</td>
		</tr>
		<tr>
			<td>[Tor, T&uuml;r]</td>
			<td><span id="&Oslash;* (door)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (d&oslash;r)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>(Armes&uuml;nder) bank (f)</td>
			<td><span id="&Oslash;* (bench)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>b&aelig;nk</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Kummer (m)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Leid (n)</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (lide)</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>Leben (n)</td>
			<td><span id="alive" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>i live</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>soll</td>
			<td><span id="&Oslash;* (shall)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>skal</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>sein</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>(aus)zeichnet</td>
			<td><span id="&Oslash;* (token)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (tegn)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>ge&ouml;ffnet</td>
			<td><span id="opened" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&aring;bnede</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>gefunden</td>
			<td><span id="found" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>fundet</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>haben</td>
			<td><span id="had" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>have</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>weckt</td>
			<td><span id="&Oslash;* (waken)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>v&aelig;kker</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>gefunden</td>
			<td><span id="found" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>fandt</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>ge&ouml;ffnet</td>
			<td><span id="opened" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&aring;bnede</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>genommen</td>
			<td><span id="&Oslash;* (numb)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="GE" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>[ &Oslash; ]</td>
			<td><span id="&Oslash;* (take)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (tage)</td>
			<td><span id="ED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>hat</td>
			<td><span id="have" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>har</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>(nachzu)sehen</td>
			<td><span id="see" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>efterse</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>finde</td>
			<td><span id="&Oslash;* (find)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>fandtes</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>findet</td>
			<td><span id="&Oslash;* (find)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (finde)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>ist</td>
			<td><span id="&Oslash;* (is)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (er)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>versucht</td>
			<td><span id="&Oslash;* (seek)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (s&oslash;ge)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>(nachzu)denken</td>
			<td><span id="&Oslash;* (think)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>t&aelig;nke</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>(dahin)geflossen</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>sei</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>k&ouml;nnte</td>
			<td><span id="&Oslash;* (could)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>kunne</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>w&uuml;nschen</td>
			<td><span id="wish" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&oslash;nske</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>steigen</td>
			<td><span id="&Oslash;* (stairs)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>stige</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>tun</td>
			<td><span id="&Oslash;* (do)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="GE" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>ist</td>
			<td><span id="is" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>er</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>kann</td>
			<td><span id="&Oslash;* (can)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>kan</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>(mag)</td>
			<td><span id="&Oslash;* (may)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (m&aring;)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>haben</td>
			<td><span id="have" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>have</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>weckt</td>
			<td><span id="&Oslash;* (waken)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (v&aelig;kker)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>lesen</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>l&aelig;se</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>kann</td>
			<td><span id="can" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>kan</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>wird</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>gestimmt</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>stemt</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>(an)verlobt</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>trolovet</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>h&auml;tte</td>
			<td><span id="has" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>havde</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>sei</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;</td>
			<td><span id="" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>(vor)stellen</td>
			<td><span id="&Oslash;* (stall)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (stald)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>kennt</td>
			<td><span id="&Oslash;* (ken)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>kender</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>gewesen</td>
			<td><span id="&Oslash;* (was)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>v&aelig;ret</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>bringen</td>
			<td><span id="&Oslash;* (bring)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (bringe)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>siehe</td>
			<td><span id="&Oslash;* (see)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>se</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>war</td>
			<td><span id="was" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>war</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>(auf)erstanden</td>
			<td><span id="&Oslash;* (stand)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>st&aring;et</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>hat</td>
			<td><span id="has" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>har</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>spotten</td>
			<td><span id="&Oslash;" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>spotte</td>
			<td><span id="GD" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>wollen</td>
			<td><span id="&Oslash;* (will)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>villet</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>wei&szlig;</td>
			<td><span id="&Oslash;* (wot)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>ved</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>gefunded</td>
			<td><span id="find" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>fandt</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>wandert</td>
			<td><span id="wander" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>vandrer</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>verlassen</td>
			<td><span id="&Oslash; (let)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>forladt</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>(hinter)lassen</td>
			<td><span id="&Oslash;* (let)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>ladet</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>gefunden</td>
			<td><span id="found" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>funden</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>verfolgen</td>
			<td><span id="&Oslash;* (follow)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>forf&oslash;lger</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>findet</td>
			<td><span id="&Oslash;* (find)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>finder</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>erhalten</td>
			<td><span id="&Oslash;* (hold)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>holder</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
		<tr>
			<td>geleiten</td>
			<td><span id="&Oslash;* (lead)" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>&Oslash;* (lede)</td>
			<td><span id="GED" class="btn btn-xs btn-default revealtext">?</span></td>
			<td>n</td>
		</tr>
	</table>
</div>
<script>
// organize cognates page functions

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
$smarty->assign('content',$content);
$smarty->display('index.tpl');
?>