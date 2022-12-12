// Navigate to any slide share details and paste it on console.
// Example: https://www.slideshare.net/dust_gh/learning-php-lecture-1

var slides = document.querySelectorAll("div.slide");
var slideSource = [];
slides.forEach(function (slide) {
    var picture = slide.querySelector("picture");
    var source = picture.querySelector("source");
    var srcset = source.getAttribute("srcset");
    var sourceArray = srcset.split(',');
    var largeImageSource = sourceArray[2].split(' ');
    slideSource.push(largeImageSource[1]);
});
console.log(slideSource);