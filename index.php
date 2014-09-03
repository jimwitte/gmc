<?php
require_once 'libs.php'; 
$smarty->assign('title','Start');
$content = <<<END
<h2>Introduction</h2>

<p>
These course materials, together with classroom instruction, are intended to give an introductory comparative and historical survey of the Germanic Languages, and an overview of the methods and accomplishments of comparative and historical Germanic linguistics.
</p>

For more information:
<ul>
	<li><a href="http://en.wikipedia.org/wiki/Comparative_method">http://en.wikipedia.org/wiki/Comparative_method</a></li>
	<li><a href="http://en.wikipedia.org/wiki/Proto-Germanic_language">http://en.wikipedia.org/wiki/Proto-Germanic_language</a></li>
	<li><a href="http://en.wikipedia.org/wiki/Grimm's_law">Germanic Consonant Shift</a> (Grimm's Law)</li>
	<li><a href="http://en.wikipedia.org/wiki/Verner%27s_Law">Verner's Law</a></li>
</ul>

<p>
This website consists of three exercises:
</p>

<ol>
	<li>Find Cognates</li>
	<li>Classifications</li>
	<li>Historical Derivations</li>
</ol>

<h2>1. Finding Cognates</h2>

<p>
This exercise displays a prepared text in three languages simultaneously, German, English, and Danish. You are to read through the sentences carefully, paying special attention to the nouns and verbs in the three languages. The meaning of the sentences will always be the same in all three languages; however, the words used and the word order may vary considerably. Therefore, in order to simplify matters somewhat, you will be provided with a German word to use as a basis of comparison with the English and Danish.
</p>

<p>
These German words will be provided in the order in which they occur in the German text, though some words may be skipped over because of redundancy, etc. For each German word you are then to decide whether or not the corresponding English and Danish words, respectively, are cognate with the German word. Remember, although the words in each language may have the same meaning, cognates are defined as being descended from the same ancestral language, i.e. genetically related in their origin to a common form or prototype, in other words literally the "same word".
</p>


<h2>2. Classifications</h2>

<p>
You're finished with your "field work", and are ready to classify your data. But unlike the language researchers of the 1800's, you have a computer to help you!
</p>

<p>
You are presented with a list of the cognates you found in the first exercise. Cognates from each language are arranged in a column. For each row across, you will supply a "classification code". The letters G,E,D are used to indicate the presence of a cognate in German, English, or Danish in the text. Thus, the classification code 'GED' indicates that the cognate is present in our text in all three languages.
</p>

<p>
Some cognate entries will be marked with a zero (&Oslash;). This means that there is no cognate for that language. Cognate entries marked (&Oslash;*) mean that a cognate DOES exist for the language, but does not appear in our text.
</p>

<p>
You are asked to supply English cognates. We've supplied the Danish cognates for you. Some of the English cognates you are asked to supply are low frequency words, so don't worry too much if you are not familiar with some of the words.
</p>

<p>
Several cognates are actually loan words from non-Germanic languages, like Latin. If two or morel languages borrow the same word, they appear to be cognate. However, you can usually tell that the word is not native by looking at the phonology of the word.
</p>

<p>
For example, we know that /d/ in English usually corresponds to /t/ in German -- for example Eng. <em>daughter</em>, Ger. <em>Tochter</em>. But Eng. <em>Title</em> and Ger. <em>Titel</em> do not show this correspondence -- both languages adopted the word from Latin, or a romance language such as French or Italian.
</p>

<h2>3. Historical Derivations</h2>

<p>
When language researchers of the 19th century compared European languages to each other, they found that these languages share quite a few cognates. They postulated that these languages were descendant from an ancient parent language which does not exist anymore. This ancient parent language became known as "Indo-European," because researchers found descendant languages in the area reaching from India (the Sanskrit language) all the way to Europe.
</p>

<p>
After further study, researchers were able to formalize the correspondences between languages as RULES, and they eventually developed a hypothetical reconstruction of the sound system of Indo-European.
</p>

<p>
This exercise help you become familiar with the rules which describe the sound correspondences between PIE (Proto-Indo-European) and Proto-Germanic. Both of these languages are reconstructed, so forms in this exercise are always preceded by a star (*).
</p>

<p>
You will be presented with PIE forms. You are asked to apply the following phonological rules in order:
</p>

<ol>
	<li><a href="http://en.wikipedia.org/wiki/Grimm's_law">Germanic Consonant Shift</a> (Grimm's Law)</li>
	<li><a href="http://en.wikipedia.org/wiki/Verner%27s_Law">Verner's Law</a></li>
	<li>Germanic Accent Shift</li>
	<li>Germanic Vowel Shift</li>
	<li>Nasal Assimilation</li>
</ol>      
END;
$smarty->assign('content',$content);
$smarty->display('index.tpl');
?>
