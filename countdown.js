jQuery(document).ready(function($) {
    // Set the date and time to count down to (year, month - 1, day, hour, minute, second)
    let countdownDate = new Date("2024-02-12 10:00:00").getTime();

    let x = setInterval(function() {
        let now = new Date().getTime();
        let distance = countdownDate - now;

        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

        // Replace 'countdown-timer' with the ID or class of the element where you want to display the countdown
        $("#countdown-timer").html(days + " " + hours + " " + minutes);

        if (distance < 0) {
            clearInterval(x);
            $("#countdown-timer").html("EXPIRED");
        }
    }, 1000);
});