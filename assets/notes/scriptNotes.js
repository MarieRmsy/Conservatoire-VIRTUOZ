(function() {
  'use strict';
  let start = document.getElementsByClassName("tickerStart"),
      end = document.getElementsByClassName("tickerEnd"),
      s,
      textLetters = {
        settings: {
          lettersStart: start,
          lettersEnd: end
        },
        init: function() {
          s = this.settings;
          this.bindEvents();
        },
        lettering: function() {
          let text = "",
              possible = "♩♪♫♬";
          for (var i = 0; i < 3; i++)
            text += possible.charAt(textLetters.mathRandom(0, possible.length));
          return text;
        },
        mathRandom: function getRandomIntInclusive(min, max) {
          min = Math.ceil(min);
          max = Math.floor(max);
          return Math.floor(Math.random() * (max - min + 1)) + min;
        },
        bindEvents: function() {
          {
            let offset = 0,
                opacity = 50,
                fontSize = 10,
                integral = 5,
                timeAnimation = 0,
                previousTime = 0,
                delay = 0;
            for (var q = 0; q < s.lettersStart.length; q++) {
              if (integral < 100) {
                if (integral % 2) {
                  opacity = textLetters.mathRandom(2, 9);
                } else {
                  opacity = 99;
                }
                integral += 5;
                fontSize = textLetters.mathRandom(18, 22);
                offset = integral - textLetters.mathRandom(1, 4);
                do {
                  timeAnimation = textLetters.mathRandom(6, 12);
                } while (previousTime === timeAnimation);
                delay = timeAnimation / 2;
                previousTime = timeAnimation;
              }
              let randomText = textLetters.lettering().split("");
              s.lettersStart[q].innerHTML =
                "<p>" + randomText.join("</p><p>") + "</p>";
              s.lettersStart[q].style.cssText =
                "-webkit-animation-duration:" +
                timeAnimation +
                "s;-moz-animation-duration:" +
                timeAnimation +
                "s;-o-animation-duration:" +
                timeAnimation +
                "s;animation-duration:" +
                timeAnimation +
                "s;left:" +
                offset +
                "%;font-size:" +
                fontSize +
                "px;opacity: ." +
                opacity +
                ";";
              s.lettersEnd[q].innerHTML =
                "<p>" + randomText.join("</p><p>") + "</p>";
              s.lettersEnd[q].style.cssText =
                "-webkit-animation-duration:" +
                timeAnimation +
                "s;-moz-animation-duration:" +
                timeAnimation +
                "s;-o-animation-duration:" +
                timeAnimation +
                "s;animation-duration:" +
                timeAnimation +
                "s;animation-delay:" +
                delay.toFixed(6) +
                "s;-o-animation-delay:" +
                delay.toFixed(6) +
                "s;-moz-animation-delay:" +
                delay.toFixed(6) +
                "s;-webkit-animation-delay:" +
                delay.toFixed(6) +
                "s;left:" +
                offset +
                "%;font-size:" +
                fontSize +
                "px;opacity: ." +
                opacity +
                ";";
            }
          }
        }
      };
  textLetters.init();
})();