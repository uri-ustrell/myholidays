
(in progress)

Organize vacation for each department


INSTALL
--------------

1. It is important to have an access local linux server. It will render php docs and some other scripts that our browser can't interpret.

# don't pànic I'll show you the easiest and faster way: install XAMPP.
(Its size is almost nothing and the results always satisfying)

-> For Linux, MAC & Windows go to: https://www.apachefriends.org/es/download.html

-> download and install version **7.2.11 / PHP 7.2.11**
	->if the image is not woking or whatever, you can download 7.1 version or even 7.0...
(It'll take 2-5 minutes)

2. XAMPP manager to activate server environment.

->windows:
	-double click on **xampp(blabla).exe**
	-follow steps

->MAC:
	-double click on **xampp(blabla).dmg**
	-follow steps

->Linux
	-it is a "very windows" installer
	-just: cd ~/Downloads/ (or whatever you download XAMPP)
	-chmod +x xampp-linux-x64-...(bla bla bla)
	-sudo ./xampp-linux-x64-...(bla bla bla)
	-FOLLOW "very windows" steps

**make sure you include PHP and SQL packs during instalation**


3. Open XAMPP manager

->LINUX
	(there is a manager app like other OS, but it's absolutely faster by console)
	-**sudo /opt/lampp/lampp start**
	(sudo /opt/lampp/lampp stop)<- to finish local server


->windows:
	-"windows apps" + type XAMPP + enter
	-once manager is opened: 
		-go to **manage servers** (tag at the top)
		-**start** APACHE service
		-**start** MySQL service 

->MAC:
	-Apps screen
	-folder: **XAMPP (Other)**
	-click: **manager-osx** <<<you can open it by cmd using this name>>>
	-once manager is opened: 
		-**start** APACHE service
		-**start** MySQL service 


4. Go to HTDOCS

before doing this, if you open your brouser and type "locahost", you'll see a nice wellcome from XAMPP;
Let's go delet this and pull our GitHub content

->WINDOWS:
	-**C:\xampp\htdocs\myholidays**
	or, go to manager app and clilc **explorer**
		(remove every content in there)
->MAC:
	-Go to: Applications/XAMPP/htdocs
		or, go to manager app and clilc **manage servers>open application folder**
		(remove every content in there)
->LINUX
	-cd /opt/lampp/htdocs
		(remove every content in there)

5. PULL from github

I guess every one of you now how to PULL from uri-ustrell/myholidays; so you're already collaborators.

Just make sure you init git and CLONE contents to **/htdocs**

6. Browser
->go to your favorite browser
->type **localhost**

Now, you should be able to see and navigate through the app.

-----------------------

MAKE SURE YOU CLICK ON EVERY LINK IN THERE. 

I also had time to add a little validation for user profile form. 

All data is loaded from DummyDataCreator function on Models, because I couldn't reach that point in 1 week :D