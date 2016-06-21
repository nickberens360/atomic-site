<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/normalize.min.css">
<link rel="stylesheet" href="css/main.css">
<?php include ("atomic-head.php");?>
</head>
<body>
<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div class="banner">
  <h1 class="logo">Atomic Docs</h1>
  <h2 class="banner__sub">A living styleguide generator and component manager.</h2>
  <img class="demoImg" src="img/demo1.gif" />
  <div id="particles-js"></div>
</div>
<div class="main main-blue">
  <div class="main-inner">
    <div class="main-content">
      <!--<div class="headingList">
        <h3 class="headingList__heading h3">Requirements</h3>
        <ul>
          <li>A local PHP enviornment</li>
          <li>A CSS preprocessor, either SASS or LESS.</li>
          <li>That's it!</li>
        </ul>
        <p class="introText">Just write html and css (or sccs/less). That's it. There's no need for wonky jade markup or complex json files.</p>
      </div>-->
      
        <div class="headingList">
          <h3 class="headingList__heading h3">Benefits of a styleguide</h3>
          <ul>
            <li>Show all of your frontend elements in an organized, scanable, defined and fully functioning way.</li>
            <li>Have full documentation to hand off to other teams.</li>
            <li>Promotes modular and reusable elements.</li>
          </ul>
        </div>
    </div>
  </div>
</div>
<div class="main main-wht">
  <div class="main-inner">
    <div class="main-content">
      <h3 class="h3">Project Structure</h3>
      <ul class="ascii ascii-main">
        <li><span class="ascii__mainDir">atomic-docs/</span>
          <ul>
            <li>atomic-core/</li>
            <li>components/</li>
            <li>css/
              <ul>
                <li>main.css</li>
              </ul>
            </li>
            <li>scss/
              <ul>
                <li>main.scss</li>
              </ul>
            </li>
            <li>.htaccess</li>
            <li>config.php</li>
            <li>index.php</li>
          </ul>
        </li>
      </ul>
      <dl class="dlList">
        <dt>atomic-docs/</dt>
        <dd>The root project directory. Change to whatever the name of your project is.</dd>
        <dt>atomic-core/</dt>
        <dd>The directory that holds the atomic-docs application logic. (I'm stricly a front-end programmer, view my janky backend code at your own risk)</dd>
        <dt>components/</dt>
        <dd>This directory holds the component files where you will be authoring your html. For example, if you create a component named "box", you would find box.html in this directory.</dd>
        <dt>css/</dt>
        <dd>Nothing fancy here. Just the usual css directory that your sass/less files will be preprocessed into.</dd>
        <dt>scss/</dt>
        <dd>The scss directory where you author the styles for your components. For example, if you create a component named "box", you would find _box.scss in this directory. You can change this directory name to whatever you want. Just make sure to update the name in the config.php file.</dd>
        <dt>.htaccss</dt>
        <dd>Used to turn output_buffering to on to solve error issues in osx. Need to find a better solution, this works for now however.</dd>
        <dt>config.php</dt>
        <dd>Change certain defaults here. You can change the name of the scss dir to less here. You can change the .scss file extension to .less as well. Also you can change the component extension from .php to .html or .mustache or whatever you'd like.</dd>
        <dt>index.php</dt>
        <dd>Your projects index file. </dd>
      </dl>
    </div>
  </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script> 
<script src="js/min/site.min.js"></script>
<?php include ("atomic-foot.php");?>
</body>
</html>
