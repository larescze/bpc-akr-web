<h1>BPC-AKR: Web security vulnerabilities</h1>

<p>Website for Apache HTTP Server vulnerabilities demonstration.</p>
<p>Web interface where part of the selected attacks will be demonstrated. The structure of the interface responds to problematic elements such as untreated user input through the login form (SQL injenction) and the ability to insert your own content into the website (XSS).</p>

<h2>Project structure</h2>
<ul>
<li>css - Stylesheets (Sass)</li>
<li>db.php - Establish database connection</li>
<li>index.html - Frontpage</li>
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
