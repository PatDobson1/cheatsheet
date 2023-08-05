var data = [&quot;Sugar&quot;, &quot;Flour&quot;, &quot;Eggs&quot;, &quot;Water&quot;, &quot;Dates&quot;];

let output = &quot;&lt;ul&gt;&quot;

data.forEach((ingredient) =&gt; {
    output += `&lt;li&gt;${ingredient}&lt;/li&gt;`;
});

output += &quot;&lt;/ul&gt;&quot;

console.log(output);
