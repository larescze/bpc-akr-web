<h1>BPC-AKR Web security vulnerabilities</h1>

<p>Web part of the project to demonstrate the vulnerabilities of Apache HTTP Server.</p>
<p>Web interface where part of the selected attacks will be demonstrated. The structure of the interface normally responds to problematic elements such as untreated user input through the login form and the ability to insert your own content into the website.</p>

<h2>Project structure</h2>
<ul>
<li>css - stylesheets (Sass)</li>
<li>db.php - establish database connection</li>
<li>index.html - frontpage</li>
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
