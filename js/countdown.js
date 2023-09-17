jQuery(document).ready(function($) {
    // Set the date and time to count down to (year, month - 1, day, hour, minute, second)
    let countdownDate = new Date("2024-02-12 10:00:00").getTime();

    let x = setInterval(function() {
        let now = new Date().getTime();
        let distance = countdownDate - now;
        let day = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hour = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let min = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

        // Replace 'countdown-timer' with the ID or class of the element where you want to display the countdown
        document.querySelector("#day").innerHTML = day;
        document.querySelector("#hour").innerHTML = hour;
        document.querySelector("#min").innerHTML = min;

        if (distance < 0) {
            clearInterval(x);
            $("#countdown-timer").html("EXPIRED");
        }
    }, 1000);
});