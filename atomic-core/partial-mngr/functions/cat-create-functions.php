<?php





function createPageIncludeFile($dirName)
{
	fopen("../categories/$dirName/$dirName.php", 'x+') or die("can't open file");
}



function createScssCatDirAndFile($dirName)
{
	mkdir("../../scss/$dirName");
	$fileHandle = fopen("../../scss/$dirName/_$dirName.scss", 'x+') or die("can't open file");
}



function createStringForMainScssFile($dirName)
{
	$includeString ='@import "'.$dirName.'/'.$dirName.'";'; 
	
	$includeString = "\n$includeString\n";
	
	$fileHandle = fopen('../../scss/main.scss', 'a') or die("can't open file");
	fwrite($fileHandle, $includeString);
	
	file_put_contents('../../scss/main.scss', implode(PHP_EOL, file('../../scss/main.scss', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
}



function createAtomicCategoryDir($dirName )
{
    mkdir("../categories/$dirName");
}


function createCompCatDir($dirName)
{
    
	mkdir("../../components/$dirName");
}







function createPageTemplate($dirName)
{

	$includeString = 
	'
<?php include ("head.php");?>
	<body class="'.$dirName.'">
	
	
	<div class="grid-row atoms-container">
			<?php include ("sidebar.php");?>
			
			
			<div class="atoms-main">
					<h1 id="'.$dirName.'" class="atomic-h1">'.$dirName.'</h1>
	
	
							<?php include ("categories/'.$dirName.'/'.$dirName.'.php");?>
              
	
	
			</div>
	</div>
	<div class="ad_js-actionDrawer ad_actionDrawer">
	<div class="ad_actionDrawer__wrap">
	    <div class="ad_js-actionClose  ad_actionDrawer__close"><i class="fa fa-times fa-3x"></i></div>
	    <div id="js_actionDrawer__content" class="actionDrawer__content"></div>
	<div/>
  </div>
	<?php include ("footer.php");?>
'
	;
	
	$includeString = "\n$includeString\n";
	
	$fileHandle = fopen('../'.$dirName.'.php', 'x+') or die("can't open file");
	fwrite($fileHandle, $includeString);
	
	file_put_contents('../'.$dirName.'.php', implode(PHP_EOL, file('../'.$dirName.'.php', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
	
	
}


function createSidebarIncludeAndFile($dirName)
{
	
	$includeString = 
'<li class="ad_dir <?php if ($current_page == "'.$dirName.'.php"){ echo "active "; }?>">
		<div class="ad_dir__dirNameGroup">
			<i class="ad_dir__dirNameGroup__icon  fa fa-folder-o"></i>
			<a class="ad_dir__dirNameGroup__name" href="atomic-core/'.$dirName.'.php">'.$dirName.'</a>
		</div>
		<ul class="ad_fileSection">
      <li class="ad_addFileItem">
        <a class="ad_addFile ad_js-actionOpen ad_actionBtn" href="atomic-core/categories/'.$dirName.'/form-'.$dirName.'.php"><span class="fa fa-plus"></span> Add Component</a>
      </li>
			<?php
				$orig = "../components/'.$dirName.'";
				if ($dir = opendir($orig)) {
				while ($file = readdir($dir)) {
				$ok = "true";	
				$filename = $file;
				$filename = basename($filename, ".php");
				if ($file == "."){
				$ok = "false";
				}
				else if ($file == ".."){
				$ok = "false";	
				}
				if ($ok == "true"){
				echo "<li class=\'ad_fileSection__file\'><a class=\'ad_js-actionOpen ad_actionBtn fa fa-pencil-square-o\' href=\'atomic-core/categories/'.$dirName.'/form-$filename.php\'></a><a href=\'#$filename\'>$filename</a></li>";
				}
				}
				closedir($dir);
				}
			?>
		</ul>
</li>'		
;

	$includeString = "\n$includeString\n";

	
	$fileHandle = fopen('../categories/'.$dirName.'/navItem-'.$dirName.'.php', 'a') or die("can't open file");
	fwrite($fileHandle, $includeString);
	
	/*file_put_contents('../includes/_sidebar.php', implode(PHP_EOL, file('../includes/_sidebar.php', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));*/
  
	
}



function writeNavItem($dirName)
{
	
	//create @import string
	$importString = "<?php include ('$dirName/navItem-$dirName.php');?>";
	$importString = "\n$importString\n";
	
	//open parent scss file and write @import string to it
	$fileHandle = fopen('../categories/atomic-nav.php', 'a') or die("can't open file");
	fwrite($fileHandle, $importString);
    fclose($fileHandle);   
	
	//remove any extra line breaks from file
	file_put_contents('../categories/atomic-nav.php', implode(PHP_EOL, file('../categories/atomic-nav.php', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));       
}







function createAjaxIncludeAndFile($dirName)
{
	
	$includeString = 
'<div id="form-create-file" class="ad_fileFormGroup">
    <form id="form-create-file" class="ad_fileForm " action="/atomic-core/'.$dirName.'.php" method="post">
      <div class="inputBtnGroup">
        <label class="ad_label">What\'s your component\'s name?</label>
        <button class="ad_btn ad_btn-pos" type="submit" >Add</button>
        <div class="inputBtnGroup__inputWrap"><input type="text" class="form-control" name="fileCreateName"></div>
      </div>
      <input type="hidden" name="compDir" value="'.$dirName.'"/>
      <input type="hidden" name="create" value="create"/>
    </form>
</div>'		
;

	$includeString = "\n$includeString\n";
  
  	
	
	$fileHandle = fopen('../categories/'.$dirName.'/form-'.$dirName.'.php', 'x+') or die("can't open file");
	fwrite($fileHandle, $includeString);
	
	file_put_contents('../categories/'.$dirName.'/form-'.$dirName.'.php', implode(PHP_EOL, file('../categories/'.$dirName.'/form-'.$dirName.'.php', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
	
}





?>