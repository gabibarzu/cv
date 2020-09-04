var currentLanguage = 2;

function getTranslation(value) {
    var translation;
    try {
        translation = tranlations[value][currentLanguage];
    }
    catch (err) {
        translation = value;
        console.warn(value + " was not found in translations!");
    }
    return translation;
}

function changeLanguage(element) {
    if (element.dataset.value != currentLanguage) {
        currentLanguage = currentLanguage == 1 ? 2 : 1;
        setLanuageIcon();
        changeTranslations();
    }
}

function setLanuageIcon() {
    $('.image-language').each(function () {
        if (this.dataset.value == currentLanguage) {
            $(this).addClass("selected");
        } else {
            $(this).removeClass("selected");
        };
    });
}

function changeTranslations() {
    $("[data-translate]").each(function () {
        var translation = this.dataset.translate;
        if (this.nodeName.toLowerCase() == "input" || this.nodeName.toLowerCase() == "textarea") {
            $(this).attr("placeholder", getTranslation(translation));
        } else {
            $(this).text(getTranslation(translation));
        }
    });
}

setLanuageIcon();
changeTranslations();