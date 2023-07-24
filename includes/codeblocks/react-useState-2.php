
import { useState } from 'react';

const ComponentName = () =&gt; {
    const [counter, setCounter] = useState(0);

    const counterHandler = (direction) =&gt; {
        let newCounter = counter;
        if (direction === 'up') {
            newCounter++;
        } else {
            newCounter--;
        }
        setCounter(newCounter);
    }

    return (
        &lt;button onClick={() =&gt; counterHandler('up')}&gt;+&lt;/button&gt;
        &lt;button onClick={() =&gt; counterHandler('down')}&gt;-&lt;/button&gt;
        &lt;p&gt;{counter}&lt;/p&gt;
    )
}

export default ComponentName;
