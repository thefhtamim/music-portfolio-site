// times for fade animations, in ms
var inTime = 450;
var outTime = 250;

$(function () {
    // fade in page on load
    console.log("fade in");
    $("#wapper").removeClass("hidden");
    $("#wrapper").fadeIn(inTime, "easeInQuad");
    
    // fade out on link click
    $(".link-anim").click(function (link) {
        var href = $(this).attr("href");
        var currentHref = $(location).attr("href");
        // if old link and new one are the same (update this to check more thoroughly)
        if (currentHref != href) {
            link.preventDefault();
            $("#wrapper").fadeOut(outTime, "easeOutQuad", function () {
                $("#wapper").addClass("hidden");
                location.href = href;
            });
        }
    });
});