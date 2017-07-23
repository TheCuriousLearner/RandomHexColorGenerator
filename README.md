# RandomHexColorGenerator
A simple educational php script which shows a random color in background and it's hex code.
## Installation and Usage
Just upload the rcol.php file to your shared hosting account or web server root folder. A random color is generated each time you visit the page.
## About the code
### PHP Functions Used
**rand()** to generates a integer between the hex numbers 0x000000 and 0xFFFFFF, this is the range of web colors(from black to white).

**dechex()** to convert base 10 numbers(decimals) into base 16 numbers (hexadecimals).
### Variables Used
**colorCode** to store the hex code generated randomly.
## To Do List
- [x] Make the code DRY compatible by implementing function
- [ ] Also show RGB value of the color besides hex code
- [ ] Show complementary colors
- [ ] Some UI improvements
## Reference
I've refered these articles for developing this script. These might be useful to you as well :)
[https://appendto.com/2017/02/rgb-to-hex-understanding-the-major-web-color-codes/](https://appendto.com/2017/02/rgb-to-hex-understanding-the-major-web-color-codes/) 

Coded just for fun, enjoy :)
