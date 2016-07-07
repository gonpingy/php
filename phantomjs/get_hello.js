var page = require('webpage').create();
var url = './hello.html';

page.open(url, function(status) {
    var html = page.evaluate(function () {
        return document.documentElement.outerHTML;
    });

    console.log(html);

    phantom.exit();
});
