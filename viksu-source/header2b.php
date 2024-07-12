<?php
echo"  <script src=\"./js/datepicker-en-GB.js\"></script>\n";
//echo"  <script src=\"./js/datepicker-fi.js\"></script>\n";
echo"  <script src=\"./js/sha512.js\"></script>\n";
echo"<script>\n";
echo"function help_popup(url, width, height){\n";
echo"if (!width) {\n";
echo"width = 600;\n";
echo"}\n";
echo"if (!height) {\n";
echo"	height = 500;\n";
echo"}\n";
echo"var param = \"toolbar=no,location=no,status=yes,scrollbars=yes,resizable=yes,width=\" + width + \",height=\" + height + \",left=0,top=0\";\n";
echo"var dlgwin = window.open(url, name, param);\n";
echo"if (!dlgwin) {\n";
echo"alert(\"Selain estää popup-ruudun avaamisen / Browser may be blocking popups!\")\n";
echo"}else{\n";
echo"if (typeof win.name == 'undefined') {\n";
echo"	win.name = name;\n";
echo"}\n";
echo"if (typeof win.opener == 'undefined') {\n";
echo"	win.opener = self;\n";
echo"}\n";
echo"}\n";
echo"return win;\n";
echo"}\n";
echo"</script>\n";
echo"</head>\n";
echo"<body>\n";



?>