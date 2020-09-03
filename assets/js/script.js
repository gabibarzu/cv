Number.prototype.format = function (n) {
    var r = new RegExp('\\d(?=(\\d{3})+' + (n > 0 ? '\\.' : '$') + ')', 'g');
    return this.toFixed(Math.max(0, Math.floor(n))).replace(r, '$&,');
};

$('.count').each(function () {
    $(this).prop('counter', 0).animate({
        counter: $(this).text()
    }, {
        duration: 10000,
        step: function (step) {
            $(this).text('' + step.format());
        }
    });
});

window.onscroll = function () { hideLanguages() };

function hideLanguages() {
    var languages = document.getElementById("languages");
    var btn = document.getElementById("translate");
    if (document.documentElement.scrollTop > 1) {
        btn.style.transform = "translateX(0px)";
        languages.style.transform = "translateX(200px)";
    } else {
        btn.style.transform = "translateX(200px)";
        languages.style.transform = "translateX(0px)";
    }
}

function showLanguages() {
    document.getElementById("languages").style.transform = "translateX(0px)";
    document.getElementById("translate").style.transform = "translateX(200px)";
}