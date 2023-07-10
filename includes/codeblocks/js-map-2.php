const contactList = sampleJson.map((contact) => (
    const contactName = contact.first_name + ' ' + contact.last_name;
    &lt;ContactCard
        key={contact.id}
        id={contact.id}
        name={contactName}
        email={contact.email}
    /&gt;
));
