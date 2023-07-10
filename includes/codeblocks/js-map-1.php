const processedContacts = sampleJson.map((contact) => {
    return {
        id: contact.id,
        firstname: contact.first_name,
        laststname: contact.last_name,
        email: contact.email
    };
});
