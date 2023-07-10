<h2>General issues</h2>
<details>
    <summary>How to unblock a print queue</summary>
    <div>
        <h2>How to unblock a print queue</h2>
        <ol>
            <li>Press Windows key + R, type services.msc and press Enter.</li>
            <li>Scroll down to the Print Spooler service and right-click on it and select Stop. In order to do this, you need to be logged in as Administrator.</li>
            <li>Next you need to go to the following directory: C:\WINDOWS\System32\spool\PRINTERS. Delete all the files in this folder. This will clear all print queues.</li>
            <li>Now you can go back to the Services console and right-click and select Start for the Print Spooler service.</li>
        </ol>
    </div>
</details>
