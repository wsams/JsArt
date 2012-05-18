<?php
$html .= <<<eof
<!--
Copyright (C) 2011 by Weldon Sams

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>JsArt Examples</title>
<style type="text/css">
body {
    font-family:sans-serif;
    font-size:100%;
    color:#404040;
    text-align:center;
    background-color:#9EC096;
}
div#container {
    width:500px;
    text-align:left;
    margin-left:auto;
    margin-right:auto;
    margin-top:32px;
    margin-bottom:16px;
    padding:16px;
    background-color:white;
    -moz-border-radius:16px;
    -webkit-border-radius:16px;
    -moz-box-shadow: 0px 0px 16px #000;
    -webkit-box-shadow: 0px 0px 16px #000;
    -o-box-shadow: 0px 0px 16px #000;
    box-shadow: 0px 0px 16px #000;
}
input {
    padding:3px; 
    border:1px solid #404040;
}
input:focus {
    background-color:#E6E7D7;
}
.smalltext {
    font-size:.75em;
    color:#35354D;
}
a, a:link {
    color:black;
    text-decoration:underline;
}
a:hover {
    text-decoration:none;
}
a:visited {
    color:#875251;
}
</style>
</head>
<body>
<div id="container">
<h1>JSArt</h1>
<p>JSArt is an HTML5, Javascript (jQuery), CSS3 application that generates images using the <code>canvas</code> element and mathematical expressions. They can then be downloaded in png or jpeg format in any resolution.</p>
<!--<p><strong><a href="https://github.com/wsams/JsArt">Download</a></strong> the source at my github repository.</p>-->
<p><strong><a href="http://jsart.wjsams.com/builds/jsart-0.1.tar.gz">Download</a></strong> the source.</p>
<p>It is licensed under the MIT open source license.</p>
<h2>Interactive Designer</h2>
<p>If you would like to create your own art you can use the <strong><a href="jsart-interactive.html">Interactive Designer</a></strong>.</p>
<p class="smalltext">Note: The interactive designer can be slow or cause your browser to appear inactive. Small images around 200x200 to 400x400 render in a few seconds whereas a 1920x1080 image can take dozens of seconds. This is due to using the javascript <code>eval()</code> function. The static images render many times faster.</p>
<h2>Current Static Art</h2>
<p class="smalltext"><a href="README">Read</a> about the following art.</p>
<p>
<a href="examples/jsart-038.html">jsart-038.html</a> &#160; 
<a href="examples/jsart-037.html">jsart-037.html</a> &#160; 
<a href="examples/jsart-036.html">jsart-036.html</a> &#160; 
<a href="examples/jsart-035.html">jsart-035.html</a> &#160; 
<a href="examples/jsart-034.html">jsart-034.html</a> &#160; 
<a href="examples/jsart-033.html">jsart-033.html</a> &#160; 
<a href="examples/jsart-032.html">jsart-032.html</a> &#160; 
<a href="examples/jsart-031.html">jsart-031.html</a> &#160; 
<a href="examples/jsart-030.html">jsart-030.html</a> &#160; 
<a href="examples/jsart-029.html">jsart-029.html</a> &#160; 
<a href="examples/jsart-028.html">jsart-028.html</a> &#160; 
<a href="examples/jsart-027.html">jsart-027.html</a> &#160; 
<a href="examples/jsart-026.html">jsart-026.html</a> &#160; 
<a href="examples/jsart-025.html">jsart-025.html</a> &#160; 
<a href="examples/jsart-024.html">jsart-024.html</a> &#160; 
<a href="examples/jsart-023.html">jsart-023.html</a> &#160; 
<a href="examples/jsart-022.html">jsart-022.html</a> &#160; 
<a href="examples/jsart-021.html">jsart-021.html</a> &#160; 
<a href="examples/jsart-020.html">jsart-020.html</a> &#160; 
<a href="examples/jsart-019.html">jsart-019.html</a> &#160; 
<a href="examples/jsart-018.html">jsart-018.html</a> &#160; 
<a href="examples/jsart-017.html">jsart-017.html</a> &#160; 
<a href="examples/jsart-016.html">jsart-016.html</a> &#160; 
<a href="examples/jsart-015.html">jsart-015.html</a> &#160; 
<a href="examples/jsart-014.html">jsart-014.html</a> &#160; 
<a href="examples/jsart-013.html">jsart-013.html</a> &#160; 
<a href="examples/jsart-012.html">jsart-012.html</a> &#160; 
<a href="examples/jsart-011.html">jsart-011.html</a> &#160; 
<a href="examples/jsart-010.html">jsart-010.html</a> &#160; 
<a href="examples/jsart-009.html">jsart-009.html</a> &#160; 
<a href="examples/jsart-008.html">jsart-008.html</a> &#160; 
<a href="examples/jsart-007.html">jsart-007.html</a>
</p>
<p>View more examples at <strong><a href="http://www.flickr.com/photos/70149100@N08/">my flickr</a></strong>.</p>
<p class="smalltext">Copyright (c) 2011 Weldon Sams - <a href="mailto:wjsams@gmail.com">wjsams@gmail.com</a></p>
</div><!--container-->
</body>
</html>
eof;
print($html);
