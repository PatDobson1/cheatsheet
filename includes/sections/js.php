<details>
    <summary class="top-level">Javascript</summary>
        <div>

        <!-- Sample async function ---------------------------------------------------->
            <details>
                <summary>Sample async function</summary>
                <div>
                    <pre class="code-block"><code><?php include("./includes/codeblocks/js-sample-async-function.php") ?></code></pre>

                    <ol>
                        <li>Get data</li>
                        <li>Once data [response] is fetched, run this</li>
                        <li>[temporary] Pause async function for 2 seconds</li>
                        <li>Once data [responseData] is parsed to JSON, run this</li>
                        <li>React code to set state i.e. do something with the resultant data</li>
                        <li>Run the async function 'fetchMeals</li>
                </div>
            </details>
        <!----------------------------------------------------------------------------->

        <!-- Convert array to string -------------------------------------------------->
            <details>
                <summary>Convert an array of values to a string list</summary>
                <div>
                    <ol>
                        <li>[create the array]<code class="inline-small">const array = ['data1', 'data2', 'data3', 'data4', 'data5'];</code></li>
                        <li>[join the array]<code class="inline-small"> array.join();</code></li>
                        <li>[output]<code class="inline-small">data1,data2,data3,data4,data5</code></li>
                        <li>[join the array with commas & spaces]<code class="inline-small"> array.join(', ');</code></li>
                        <li>[output]<code class="inline-small">data1, data2, data3, data4, data5</code></li>
                    </ol>
                </div>
            </details>
        <!---------------------------------------------------------------------------->

        <!-- Sample map functions ----------------------------------------------------->
            <details>
                <summary>map function samples</summary>
                <div>
                    <h3>Sample JSON data</h3>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-map-json.php') ?></code></pre>
                    <p>Extra: sample data can be generated here: <a href="https://www.mockaroo.com/" target="_blank">Mockaroo</a></p>
                    <h3>Sample 1</h3>
                    <p>Converts the raw data into an object with name-value pairs of our choice</p>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-map-1.php') ?></code></pre>
                    <h3>Sample 2</h3>
                    <p>Converts the raw data into React components</p>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-map-2.php') ?></code></pre>
                </div>
            </details>
        <!----------------------------------------------------------------------------->

        <!-- Regex -------------------------------------------------------------------->
            <details>
                <summary>Regex's</summary>
                <div>
                    <h3>Alphanumeric only</h3>
                    <pre class="code-block"><code>var b = a.replace(/[^a-z0-9]/gi, '');</code></pre>
                    <p>(Replaces everything with '')</p>
                </div>
            </details>
        <!----------------------------------------------------------------------------->

        <!--Object loops -------------------------------------------------------------------->
            <details>
                <summary>Object loops</summary>
                <div>
                    <h3>Sample JSON data</h3>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-map-json.php') ?></code></pre>
                    <h3>forEach</h3>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-loop-1.php') ?></code></pre>
                    <h3>for-of</h3>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-loop-2.php') ?></code></pre>
                </div>
            </details>
        <!----------------------------------------------------------------------------->

        <!-- Object deconstruction --------------------------------------------------->
            <details>
                <summary>Object deconstruction</summary>
                <div>
                    <h3>Sample JSON data</h3>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-deconstruct-json-1.php') ?></code></pre>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-deconstruct-1.php') ?></code></pre>
                    <p>Variables as specified are then available</p>
                </div>
            </details>
        <!---------------------------------------------------------------------------->

        <!-- Array filtering --------------------------------------------------------->
            <details>
                <summary>Array filtering</summary>
                <div>
                    <h3>Sample JSON data</h3>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-filter-json-1.php') ?></code></pre>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-filter-1.php') ?></code></pre>
                    <p>Returns:</p>
                    <pre class="code-block"><code>[ "wolf.jpg" ]</code></pre>
                </div>
            </details>
        <!---------------------------------------------------------------------------->

        <!-- String literal ---------------------------------------------------------->
            <details>
                <summary>String literals</summary>
                <div>
                    <h3>String literals</h3>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-string-literal-1.php') ?></code></pre>
                    <p>*Note use backticks `</p>
                </div>
            </details>
        <!---------------------------------------------------------------------------->

        <!-- Array loops ------------------------------------------------------------->
            <details>
                <summary>Array loops</summary>
                <div>
                    <h3>Array loops</h3>
                    <h4>forEach loop</h4>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-array-loop-1.php') ?></code></pre>
                    <h4>for-of loop</h4>
                    <pre class="code-block"><code><?php include('./includes/codeblocks/js-array-loop-2.php') ?></code></pre>
                </div>
            </summary>
        <!---------------------------------------------------------------------------->

        </div>
</details>
