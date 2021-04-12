<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Desk</title>
<link type='text/css' rel='stylesheet' href='main.css' />

</head>
<body>


<div>I want a desk that can be utilized for 3 specific purposes: work, quilting, putting puzzles together.
I want more than just a flat surface as I want the option of standing or sitting to do my work.  I want the stand up part of the desk to be part
of the desk and I want to be able to remove that part without having to find a place to store it.
</div>

<div style="margin:20px;">
<button onclick="doShow('standup');">Stand Up</button>
<button onclick="doShow('sitdown');">Sit Down</button>
<button onclick="doShow('plain');">Plain Top</button>
<button onclick="doShow('puzzle');">Puzzle</button>
<button onclick="doShow('dimensions');">Components &amp; Dimensions</button>
</div>

<div id="standup" style="margin:30px 0 0 0">
	<div style="float:left;width:900px;"><img id="standup_main" src="img/standupConfigTopRight.png" width="900px">
	</div>
	<div style="float:right;width:100px;background-color:#ffdddd;display:inline;">
		<img src="img/standupConfigTopRight.png" width="100px;" title="click to enlarge front right view" onclick="doSwitch('standup_main','img/standupConfigTopRight.png');">
		<img src="img/standupConfigFront.png" width="100px;" title="click to enlarge front view" onclick="doSwitch('standup_main','img/standupConfigFront.png');">
		<img src="img/standupConfigTop.png" width="100px;" title="click to enlarge top view" onclick="doSwitch('standup_main','img/standupConfigTop.png');">
		<img src="img/standupConfigBack.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('standup_main','img/standupConfigBack.png');">
		<img src="img/standupSideFunctional.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('standup_main','img/standupSideFunctional.png');">
		<img src="img/standupFunctional.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('standup_main','img/standupFunctional.png');">
	</div>
</div>

<div id="sitdown" style="margin:30px 0 0 0;display:none;" >
	<div style="float:left;width:900px;"><img id="sitdown_main" src="img/sitdownConfigTopFront.png" width="900px">
	</div>
	<div style="float:right;width:100px;background-color:#ffdddd;display:inline;">
		<img src="img/sitdownConfigFront.png" width="100px;" title="click to enlarge front right view" onclick="doSwitch('sitdown_main','img/sitdownConfigFront.png');">
		<img src="img/sitdownConfigTopFront.png" width="100px;" title="click to enlarge front view" onclick="doSwitch('sitdown_main','img/sitdownConfigTopFront.png');">
		<img src="img/sitdownConfigBack.png" width="100px;" title="click to enlarge top view" onclick="doSwitch('sitdown_main','img/sitdownConfigBack.png');">
		<img src="img/sitdownConfigTop.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('sitdown_main','img/sitdownConfigTop.png');">
		<img src="img/sitdownFunctional.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('sitdown_main','img/sitdownFunctional.png');">
		<img src="img/sitdownFrontFunctional.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('sitdown_main','img/sitdownFrontFunctional.png');">
		<img src="img/sitdownsewingfonrt.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('sitdown_main','img/sitdownsewingfonrt.png');">
		<img src="img/sitdownsewingside.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('sitdown_main','img/sitdownsewingside.png');">
	</div>
</div>

<div id="plain" style="margin:30px 0 0 0;display:none;" >
	<div style="float:left;width:900px;"><img id="plain_main" src="img/puzzleConfigTopRight.png" width="900px">
	</div>
	<div style="float:right;width:100px;background-color:#ffdddd;display:inline;">
		<img src="img/puzzleConfigFront.png" width="100px;" title="click to enlarge front right view" onclick="doSwitch('plain_main','img/puzzleConfigFront.png');">
		<img src="img/puzzleConfigTopRight.png" width="100px;" title="click to enlarge front view" onclick="doSwitch('plain_main','img/puzzleConfigTopRight.png');">
		<img src="img/puzzleConfigBack.png" width="100px;" title="click to enlarge top view" onclick="doSwitch('plain_main','img/puzzleConfigBack.png');">
		<img src="img/sitdownConfigTop.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('plain_main','img/sitdownConfigTop.png');">
		<img src="img/sewingmachinefront.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('plain_main','img/sewingmachinefront.png');">
		<img src="img/sewingmachineside.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('plain_main','img/sewingmachineside.png');">
		<img src="img/puzzleFunctional.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('plain_main','img/puzzleFunctional.png');">
		<img src="img/puzzleFunctionalSide.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('plain_main','img/puzzleFunctionalSide.png');">
	</div>
</div>

<div id="puzzle" style="margin:30px 0 0 0;display:none;" >
	<div style="float:left;width:900px;"><img id="puzzle_main" src="img/puzzleConfigDrawerTopRight.png" width="900px">
	</div>
	<div style="float:right;width:100px;background-color:#ffdddd;display:inline;">
		<img src="img/puzzleConfigDrawerFront.png" width="100px;" title="click to enlarge front right view" onclick="doSwitch('puzzle_main','img/puzzleConfigDrawerFront.png');">
		<img src="img/puzzleConfigDrawerTopRight.png" width="100px;" title="click to enlarge front view" onclick="doSwitch('puzzle_main','img/puzzleConfigDrawerTopRight.png');">
		<img src="img/puzzleConfigDrawerBack.png" width="100px;" title="click to enlarge top view" onclick="doSwitch('puzzle_main','img/puzzleConfigDrawerBack.png');">
		<img src="img/puzzleConfigDrawerTop.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('puzzle_main','img/puzzleConfigDrawerTop.png');">
		<img src="img/puzzleConfigDrawerOpening.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('puzzle_main','img/puzzleConfigDrawerOpening.png');">
	</div>
</div>

<div id="dimensions" style="margin:30px 0 0 0;display:none;" >
	<div style="float:left;width:900px;"><img id="dimensions_main" src="img/components.png" width="900px">
	</div>
	<div id="standup" style="float:right;width:100px;background-color:#ffdddd;display:inline;">
		<img src="img/standupConfigDimensions.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('dimensions_main','img/standupConfigDimensions.png');">
		<img src="img/standupDimensions.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('dimensions_main','img/standupDimensions.png');">
		<img src="img/standupDimensionsTopRight.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('dimensions_main','img/standupDimensionsTopRight.png');">
		<img src="img/puzzleDrawerExplodedDimensions.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('dimensions_main','img/puzzleDrawerExplodedDimensions.png');">
		<img src="img/deskLegExplodedDimensionsFrontLeft.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('dimensions_main','img/deskLegExplodedDimensionsFrontLeft.png');">
		<img src="img/deskLegExplodedDimensionsFront.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('dimensions_main','img/deskLegExplodedDimensionsFront.png');">
		<img src="img/components.png" width="100px;" title="click to enlarge back view" onclick="doSwitch('dimensions_main','img/components.png');">
	</div>
</div>

</body>
</html>

<script>
function doShow(divname) {
	document.getElementById("sitdown").style.display = "none";
	document.getElementById("standup").style.display = "none";
	document.getElementById("plain").style.display = "none";
	document.getElementById("puzzle").style.display = "none";
	document.getElementById("dimensions").style.display = "none";

	document.getElementById(divname).style.display = "inline";	
}

function doSwitch(divname, imgname) {
	document.getElementById(divname).src = imgname;
}

</script>
