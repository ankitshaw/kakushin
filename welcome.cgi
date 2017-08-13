#!/usr/bin/perl -w

print "Content-type: text/html\n\n";
print "<html>\n<body>\n";
print "<div style=\"width: 100%; font-size: 30px; font-weight: bold; text-align: center;\">\n";
print "Welcome to CGI";
print "<br>";
print "<div style=\"width: 100%; font-size: 20px; font-weight: bold; text-align: left;\">\n";
print "Current date is ";
print $time = (localtime),"\n"; 
print "\n</div>\n";
print "</body>\n</html>\n";
