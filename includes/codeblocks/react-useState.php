
import { useState } from 'react';

const ComponentName = () =&gt; {
    const [showSomething, setShowSomething] = useState(false);

    const showSomethingHandler = () =&gt; {
        setShowSomething(!showSomething);
    }

    return (
        &lt;&gt; &lt;p&gt;Always shown content&lt;/p&gt;
        {showSomething &amp;&amp;
            &lt;p&gt;Content controlled by 'showSomething'&lt;/p&gt;
        }
        &lt;button onClick={showSomethingHandler}&gt;Show/Hide&lt;/button&gt; &lt;/&gt;
    )
}

export default ComponentName;
