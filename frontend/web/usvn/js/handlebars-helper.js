Handlebars.registerHelper('lang', (text, lang) => {
    return LANGUAGES[lang][text];
});
