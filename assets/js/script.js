/**
 *
 * @param {*} n
 * @returns
 */
var projects = 15;

function setProjectsDelivered() {
  $("#projects-delivered").text(projects);
}

function setLinesOfCodes() {
  $("#lines-of-codes").text(projects * 18193);
}

function setCoffees() {
  var diff = Math.floor((Date.now() - new Date("2016-11-16")) / 86400000);
  var coffees = diff * 1.8;
  $("#coffees").text(coffees);
}

function setProgrammingYears() {
  var diff = Math.floor((Date.now() - new Date("2016-11-16")) / 86400000);
  var years = Math.ceil(diff / 365);
  $("#programming-years").text(years);
}

function setRandomWallpaper() {
  const parallaxElements = document.querySelectorAll(".parallax");

  parallaxElements.forEach((parallaxElement) => {
    const randomNumber = Math.floor(Math.random() * 4) + 1;
    const imageUrl = `./assets/img/wallpaper-${randomNumber}.jpg`;
    parallaxElement.style.backgroundImage = `url(${imageUrl})`;
  });
}

setProjectsDelivered();
setLinesOfCodes();
setCoffees();
setProgrammingYears();
setRandomWallpaper();

Number.prototype.format = function (n) {
  var r = new RegExp("\\d(?=(\\d{3})+" + (n > 0 ? "\\." : "$") + ")", "g");
  return this.toFixed(Math.max(0, Math.floor(n))).replace(r, "$&,");
};

$(".count").each(function () {
  $(this)
    .prop("counter", 0)
    .animate(
      {
        counter: $(this).text(),
      },
      {
        duration: 10000,
        step: function (step) {
          $(this).text("" + step.format());
        },
      }
    );
});

window.onscroll = function () {
  hideLanguages();
};

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

function validateEmail(email) {
  const re =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

function sendMessage(button) {
  var sendMessage = true;

  var name = $("#inputName");
  var email = $("#inputEmail");
  var message = $("#inputMessage");
  var button = $(button);
  var form = $("#form");
  var formTitle = $("#formTitle");

  if (name.val() == "") {
    name.parent().addClass("has-error");
    sendMessage = false;
  } else {
    name.parent().removeClass("has-error");
  }
  if (email.val() == "" || !validateEmail(email.val())) {
    email.parent().addClass("has-error");
    sendMessage = false;
  } else {
    email.parent().removeClass("has-error");
  }
  if (message.val() == "") {
    message.addClass("has-error");
    sendMessage = false;
  } else {
    message.removeClass("has-error");
  }
  if (sendMessage) {
    Email.send({
      SecureToken: "ef544092-7e06-47c5-bdb4-c4952f5c38fc",
      To: "gabrielbarzu1994@gmail.com",
      From: email.val(),
      Subject: "Personal website form",
      Body: message.val(),
    }).then((reponse) => {
      name.val("");
      email.val("");
      message.val("");

      name.parent().removeClass("has-error");
      email.parent().removeClass("has-error");
      message.removeClass("has-error");

      form.addClass("section-success");
      formTitle.text(getTranslation("[lblMessageSent]"));
      button.text(getTranslation("[btnSendNewMessage]"));
    });

    $.get(
      "templates/" + getTranslation("[mailTemplate]") + ".txt",
      function (html_string) {
        var body = html_string.replace("{{name}}", name.val());
        Email.send({
          SecureToken: "ef544092-7e06-47c5-bdb4-c4952f5c38fc",
          To: email.val(),
          From: "gabrielbarzu1994@gmail.com",
          Subject: getTranslation("[lblThankMessage]"),
          Body: body,
        });
      },
      "text"
    );
  }
}
