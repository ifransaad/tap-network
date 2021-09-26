window.addEventListener("scroll", check_values);

    repeat = false;

    function check_values() {
        var sec5Top = document.getElementsByClassName('section5_2');
        var windowHeight = window.innerHeight;
        var posn = sec5Top[0].getBoundingClientRect().top;
        if (posn - windowHeight <= 0) {
            if (repeat == false) {
                co()
            }

        }

    }

    function co() {
        var c = new CountUp("counter", 0, 7200000,0,5);
        c.start()
        repeat = true;

    }