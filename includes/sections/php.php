<details>
    <summary class="top-level">PHP</summary>
    <div>
        <!-- Hashed passwords ------------------------------------------------->
            <details>
                <summary>Create and use hashed passwords</summary>
                <div>
                    <h2>Create and use hashed passwords</h2>
                    <p>Create:</p>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/php-hashedPassword-create.php') ?></code></pre>
                    <p>Result: $2y$10$XpTB2aSsvcG6a.kzskFZXOhzINxxf/iwMbSaSrZeW4u3optyeFRki</p>
                    <p>Check password:</p>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/php-hashedPassword-use.php') ?></code></pre>
                    <p>Result: boolean true|false 1|0</p>
                </div>
            </details>
        <!--------------------------------------------------------------------->

        <!-- PDO insert ------------------------------------------------------->
            <details>
                <summary>PDO insert</summary>
                <div>
                    <h2>Insert data using a PDO statement</h2>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/php-pdo-insert.php') ?></code></pre>
                    <p>This uses named variables.</p>
                    <p>'lastInsertId()' returns the ID of the inserted query.</p>
                </div>
            </details>
        <!--------------------------------------------------------------------->
    </div>
</details>
