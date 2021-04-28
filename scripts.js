// times for fade animations, in ms
var inTime = 450;
var outTime = 250;

var parallaxSpeed = -1.0;
var screenSize = $(window).width();
var imgPos = "50% 50%";

function randomNumber(min, max) { return Math.floor((Math.random() * max) + min); }


// on page load
$(function () {

    
    // fade out on link click
    $(".link-anim").click(function (link) {
        var href = $(this).attr("href");
        var currentHref = $(location).attr("href");
        if (currentHref != href) {
            link.preventDefault();
            $("#wrapper").fadeOut(outTime, "easeOutQuad", function () {
                $("#wapper").addClass("hidden");
                location.href = href;
            });
        }
    });

    // slow parallax for extra small screens
    if (screenSize < 576) {  
        parallaxSpeed = 1.0;
    }

    // adjust image offset for the projects page
    if (document.title == "Projects") {
        imgPos = "0 50%";
    }
    // parallax scroll init
    $(".jarallax").jarallax({
        speed: parallaxSpeed,
        imgPosition: imgPos,
    });
    

    // validate contact form
    $("#send").click(function (event) {
        var isValid = true;

        // validate the name entry
        if ($("#name").val().trim() == "") {
            $("#name").next().text("Oops! Looks like you forgot your name.");
            isValid = false;
        } else {
            $("#name").next().text("");
        }

        // validate the email entry with a regular expression
        var emailPattern = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b/;
        var email = $("#email").val().trim();
        if (email == "" || !emailPattern.test(email)) {
            $("#email").next().text("Oops! Please enter a valid email address.");
            isValid = false;
        } else {
            $("#email").next().text("");
        }

        // validate the comments entry
        var comments = $("#comments").val().trim();
        if (comments == "") {
            $("#comments").next().text("Hmm. Surely you have something to say... Right?");
            isValid = false;
        } else {
            $("#comments").next().text("");
        }

        // prevent the default action of submitting the form if any entries are invalid 
        if (isValid == false) {
            $("#email").next().addClass("text-warning");
            $("#name").next().addClass("text-warning");
            $("#comments").next().addClass("text-warning");
            //event.preventDefault();
        } else {
            var delayMs = randomNumber(400, 800);

            $("#email").next().removeClass("text-warning");
            $("#name").next().removeClass("text-warning");
            $("#comments").next().removeClass("text-warning");

            $("#loading").modal("show");
        
            setTimeout(function () {
                console.log("sent");
                $("#contactForm").submit();
                // reset form fields
                $("#name").val("");
                $("#email").val("");
                $("#comments").val("");
            }, delayMs);

            // backup email send method
            // window.open("mailto:" + address + "?subject=" + subject + "&body=" + body);           
    }
    });


});