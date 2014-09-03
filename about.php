<?php
require_once 'libs.php'; 
$smarty->assign('title','About');
$content = <<<END
<p>Please contact Jim Witte (<a href="mailto:jim@thunderingbison.com" target="_top">jim@thunderingbison.com</a>) with questions or comments about this website. Exercise content
        based on courseware I wrote for Prof. Antonsen, GMC 367, University of Illinois Urbana-Champaign in 1995.
        All errors and typos are mine.</p>
        
<p>Dedicated in grateful memory to Prof. Antonsen.</p>
<p><img src="hypercard.jpg" width="400" height="280" alt="Screenshot of 1995 hypercard courseware"><p>
END;
$smarty->assign('content', $content);
$smarty->display('index.tpl');
?>

