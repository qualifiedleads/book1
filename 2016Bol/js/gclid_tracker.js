$("div.right-content a").click(function(e){
    e.preventDefault();

    function updateParam(uri, key, value) {
        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = uri.indexOf('?') !== -1 ? "&" : "?";
        if (uri.match(re)) {
            return uri.replace(re, '$1' + key + "=" + value + '$2');
        }
        else {
            return uri + separator + key + "=" + value;
        }
    }

    function getParam(p) {
        var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
        return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
    }

    var affiliate_link = $(this).attr('href');
    var gclid = getParam('gclid');
    top.location = updateParam(affiliate_link, 'subid', gclid);
    //console.log(updateParam(affiliate_link, 'subid', gclid));
});