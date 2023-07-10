<h2>Javascript</h2>

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
<!-- ----------------------------------------------------------------------- -->

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
<!-- ----------------------------------------------------------------------- -->

<!-- Sample map functions ----------------------------------------------------->
    <details>
        <summary>map function samples</summary>
        <div>
            <h3>Sample JSON data</h3>
            <pre class="code-block"><code><?php include('./includes/codeblocks/js-map-json.php') ?></code></pre>
            <h3>Sample 1</h3>
            <p>Converts the raw data into an object with name-value pairs of our choice</p>
            <pre class="code-block"><code><?php include('./includes/codeblocks/js-map-1.php') ?></code></pre>
            <h3>Sample 2</h3>
            <p>Converts the raw data into React components</p>
            <pre class="code-block"><code><?php include('./includes/codeblocks/js-map-2.php') ?></code></pre>
        </div>
    </details>
<!-- ----------------------------------------------------------------------- -->
