<img src="https://media.giphy.com/media/MDJ9IbxxvDUQM/giphy.gif">

# Save the cats

This is our first school project that we upload on github. My website is about homeless cats (all made up). The website should countain at least two loops, two functions and different types of arrays among other things. You can visit my website if you go to www.linneaannaeriksson.se

# Installation

1. You can clone this repo and open it with your favourite code-editor.
2. Open a localhost in your terminal by writing: php -S localhost:8000
3. Visit the localhost in your browser.
4. Enjoy!

# Code Review

Code review written by [Neo Lejondahl](https://github.com/NeoIsRecursive).

1. `arrays.php:$cats` The castrated value could be a boolean, instead of a string.
2. `footer.php` Right now you are putting everything in a `<p>` tag, maybe a `<ul>` for the cities?
3. `functions.php:28 informationSaved` Do you really need the $animal variable, will there be a different animal?
4. `functions.php:33-45` Some variables have a capital first letter others don't, maybe change to lowercase.
5. `directories` I think you could have made som folders for your php files, ex a 'functions' folder with the functions.php & arrays.php in it.
6. `readability` Your code is very nice to look at and well structured, good job!

# Testers

Tested by the following people:

1.  Hanna Rosenberg
2.  Neo Lejondahl
