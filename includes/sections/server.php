<details>
    <summary class="top-level">Server</summary>
    <div>

        <!-- Configure Xampp for multiple sites --------------------------------------->

            <details>
                <summary>Configure Xampp for multiple sites</summary>
                <div>
                    <ol>
                        <li>
                            Edit C:\xampp\apache\conf\httpd.conf
                            <ol>
                                <li>Add <code class="inline-small">listen xx</code> around line 59, where xx is the port to listen on</li>
                            </ol>
                        </li>
                        <li>
                            Edit C:\Windows\System32\drivers\etc\hosts<br />
                            ** Note : Run notepad or notepad++ in <em>administrator</em> mode
                            <ol>
                                <li>Add reference to new site e.g. <code class="inline-small">127.0.0.1 newsitename.local</code></li>
                            </ol>
                        </li>
                        <li>
                            Edit C:\xampp\apache\conf\extra\httpd-vhosts.conf
                            <ol>
                                <li>
                                    Add reference to new site e.g.
                                    <pre class="code-block"><code><?php include("./includes/codeblocks/configure_xampp_multiple_sites.php") ?></code></pre>
                                </li>
                            </ol>
                        </li>
                        <li>Create directory for new site e.g: C:/sites/newsitename/htdocs</li>
                        <li>Restart EVERYTHING</li>
                        <li>Access site via http://newsitename.local:82/ where '82' is the new listen/VirtualHost you have just added</li>
                    </li>
                </div>
            </details>

        <!-- ----------------------------------------------------------------------- -->

    </div>
</details>
