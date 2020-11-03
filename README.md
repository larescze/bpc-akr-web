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
<h3>Apache version 2.2 (vulnerable)</h3>
<p>This is an old version of the Apache HTTP Server, it may be vulnerable more to attacks than v2.4. Website is vulnerable to exploits: Cross-site scripting, SQL injection and directory traversal.</p>
<p>http://apache1.willilazarov.cz/</p>
<h3>Apache version 2.4 (vulnerable)</h3>
<p>Current version. Website is vulnerable to exploits: Cross-site scripting, SQL injection and directory traversal.</p>
<p>http://apache2.willilazarov.cz/</p>
<h3>Apache version 2.4 (protected)</h3>
<p>Current version. Website is protected against exploits: Cross-site scripting, SQL injection and directory traversal.</p>
<p>https://apache3.willilazarov.cz/</p>
