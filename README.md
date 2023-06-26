# page-visit-counter
This is a simple page load counter to add to an html or php file.

# 2 Ways to make a page counter

* Use a self updating page (see selfUpdatingPage.php).
* Find your html webpage 'yourpage.html' you want to count and copy htmlPage.php to a new file and rename it 'yourpage.php'.

## In both cases you must make sure you have an element in your webpage with the id "visit-counter".

* In the second case, 'yourpage.php' will look at its own name, discover it is named yourpage.php and look for the file 'yourpage.html' to include in itself.  It will then update the element with and id 'visit-counter'.

* In either case, the php will make a file if it doesn't exist and save an integer (in text/string form) and will update the number of visits with page loads.  The file will be named 'yourpage-count.txt'.

## Make sure the php files have permissions 640 or better.
