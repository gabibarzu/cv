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

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    var mybutton = document.getElementById("languages");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 1) {
        mybutton.style.opacity = "0";
    } else {
        mybutton.style.opacity = "1";
    }
}