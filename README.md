<h1>BPC-AKR: Web security vulnerabilities</h1>

<p>Website for demonstration Apache HTTP Server vulnerabilities.</p>
<p>The structure of the interface responds to problematic elements such as untreated user input through the login form (SQL injenction) and the ability to insert content into the website (XSS).</p>

<h2>Project structure</h2>

<ul>
<li>css - Stylesheets (Sass)</li>
<li>functions - Backend
<ul>
<li>comment.php - Comments handler</li>
<li>connect.php - Establish database connection</li>
<li>delete.php - Deleting comments</li>
<li>login.php - Login handler</li>
</ul>
</li>
<li>index.php - Frontpage</li>
</ul>

<h2>Live production websites</h2>

<h3>Apache version 2.2.34 (vulnerable)</h3>
<p>This is an old version of the Apache HTTP Server, it may be vulnerable more to attacks than v2.4. Website is vulnerable to exploits: Cross-site scripting, SQL injection and directory traversal.</p>
<p>http://apache1.willilazarov.cz/</p>
<h4>Login details</h4>
<ul>
<li>username - admin</li>
<li>password - password</li>
<ul>

<h3>Apache version 2.4.43 (vulnerable)</h3>
<p>Current version. Website is vulnerable to exploits: Cross-site scripting and SQL injection.</p>
<p>http://apache2.willilazarov.cz/</p>
<ul>
<li>username - admin</li>
<li>password - password</li>
<ul>

<h3>Apache version 2.4.43 (secure)</h3>
<p>Current version. Website is protected against exploits: Cross-site scripting, SQL injection and directory traversal.</p>
<p>https://apache3.willilazarov.cz/</p>
<ul>
<li>username - xguest20</li>
<li>password - bpc-akr-2020</li>
<ul>

<h2>Requirements</h2>
<ul>
<li>Local or live web server (Apache HTTP Server, Nginx Web Server, ...)</li>
<li>PHP (recommended version 7.4.*)</li>
<li>MariaDB (recommended version 10.5.*)
</ul>

<h2>Installation</h2>
<p>If you want to run websites of your own, follow steps below.</p>
<p>1. Clone repository in the disired directory:</p>
<pre>git clone https://github.com/larescze/bpc-akr-web.git</pre>
<p>2. Move files to root directory of webserver (web hosting, XAMPP, WampServer etc.)<p>
<p>3. Create MySQL database with encoding utf8 and import SQL file bpc-akr.sql</p>
<p>4. Open PHP script in functions/connect.ph and fill the database login details order to connect to the MySQL database server.</p>
<pre>
$db_host = "";
$db_username = "";
$db_password = "";
$db_name = "";
</pre>
<p>5. Start server and test vulnerabilites with https://github.com/larescze/bpc-akr-python</p>
