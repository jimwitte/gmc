<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>{$title}</title>
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<link href="styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">GMC</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{if {$title} == 'Start'}active{/if}"><a href="index.php">Start</a></li>
            <li class="{if {$title} == 'Find Cognates'}active{/if}"><a href="cognates.php">1. Find Cognates</a></li>
            <li class="{if {$title} == 'Classification'}active{/if}"><a href="organize.php">2. Classification</a></li>
            <li class="{if {$title} == 'Historical Derivations'}active{/if}"><a href="historical.php">3. Historical Derivations</a></li>
            <li class="{if {$title} == 'About'}active{/if}"><a href="about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
    </div>
