$(function () {
    $("#demo_0").ionRangeSlider({
        skin: "big",
        min: 100,
        max: 1000,
        from: 550
    });



    $("#demo_1").ionRangeSlider({
        skin: "big",
        type: "double",
        grid: true,
        min: 0,
        max: 1000,
        from: 200,
        to: 800,
        prefix: "$"
    });



    $("#demo_2").ionRangeSlider({
        skin: "big",
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500
    });



    $("#demo_3").ionRangeSlider({
        skin: "big",
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500,
        step: 250
    });



    $("#demo_4").ionRangeSlider({
        skin: "big",
        type: "double",
        grid: true,
        min: -12.8,
        max: 12.8,
        from: -3.2,
        to: 3.2,
        step: 0.1
    });



    var custom_values = [0, 10, 100, 1000, 10000, 100000, 1000000];
    var my_from = custom_values.indexOf(10);
    var my_to = custom_values.indexOf(10000);

    $("#demo_5").ionRangeSlider({
        skin: "big",
        type: "double",
        grid: true,
        from: my_from,
        to: my_to,
        values: custom_values,
        force_edges: true
    });



    $("#demo_6").ionRangeSlider({
        skin: "big",
        grid: true,
        from: new Date().getMonth(),
        values: [
            "Jan", "Feb", "Mar", "Apr", "May", "Jun",
            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ],
        force_edges: true
    });



    var $d7 = $("#demo_7");
    var $d7_buttons = $(".js-btn__d7");
    $d7.ionRangeSlider({
        skin: "big",
        grid: true,
        min: 1000,
        max: 1000000,
        from: 100000,
        step: 1000,
        prettify_enabled: true
    });

    var d7_instance = $d7.data("ionRangeSlider");
    $d7_buttons.on("click", function () {
        var $this = $(this);

        var o = {
            prettify_enabled: true,
            prettify_separator: " "
        };

        var type = $this.data("type");

        o.prettify_separator = type;
        if (!type) o.prettify_enabled = false;

        d7_instance.update(o);

        $this.addClass("--active").siblings().removeClass("--active");
    });



    function my_prettify (n) {
        var num = Math.log2(n);
        return n + " &rarr; " + (+num.toFixed(3));
    }

    $("#demo_8").ionRangeSlider({
        skin: "big",
        grid: true,
        min: 1,
        max: 1024,
        from: 256,
        prettify: my_prettify
    });



    var $d9 = $("#demo_9");
    var $d9_buttons = $(".js-btn__d9");

    $d9.ionRangeSlider({
        skin: "big",
        grid: true,
        min: 0,
        max: 100,
        from: 50,
        step: 5,
        max_postfix: "+",
        prefix: "$"
    });

    var d9_instance = $d9.data("ionRangeSlider");
    $d9_buttons.on("click", function () {
        var $this = $(this);

        var prefix = $this.data("prefix");
        var postfix = $this.data("postfix");

        var o = {
            prefix: prefix || "",
            postfix: postfix || ""
        };

        d9_instance.update(o);

        $this.addClass("--active").siblings().removeClass("--active");
    });



    $("#demo_10").ionRangeSlider({
        skin: "big",
        grid: true,
        min: 0,
        max: 100,
        from: 21,
        max_postfix: "+",
        prefix: "Age: ",
        postfix: " years"
    });



    var $d11 = $("#demo_11");
    var $d11_buttons = $(".js-btn__d11");

    $d11.ionRangeSlider({
        skin: "big",
        type: "double",
        grid: true,
        min: 0,
        max: 100,
        from: 47,
        to: 53,
        prefix: "Weight: ",
        postfix: " million pounds"
    });

    var d11_instance = $d11.data("ionRangeSlider");
    $d11_buttons.on("click", function () {
        var $this = $(this);
        var o = {};
        var v = $this.data("variant");
        var s = $this.data("sep");

        if (v !== undefined) {
            o.decorate_both = !+v;
        }

        if (s !== undefined) {
            o.values_separator = s;
        }

        d11_instance.update(o);

        $this.addClass("--active").siblings().removeClass("--active");
    });



    var $d12 = $("#demo_12");
    var $d12_buttons = $(".js-btn__d12");

    $d12.ionRangeSlider({
        skin: "big",
        type: "double",
        grid: true,
        min: -100000,
        max: 100000,
        from: -100000,
        to: 50000,
        step: 10000
    });

    var d12_instance = $d12.data("ionRangeSlider");
    $d12_buttons.on("click", function () {
        var $this = $(this);
        var v = $this.data("variant");

        var o = {
            grid: true,
            force_edges: false,
            hide_min_max: false,
            hide_from_to: false,
            block: false
        };

        switch (v) {
            case 1:
                o.force_edges = true;
                break;

            case 2:
                o.grid = false;
                break;

            case 3:
                o.hide_min_max = true;
                break;

            case 4:
                o.hide_from_to = true;
                break;

            case 5:
                o.block = true;
                break;

            case 6:
                o.grid = false;
                o.hide_min_max = true;
                o.hide_from_to = true;
                break;
        }

        d12_instance.update(o);

        $this.addClass("--active").siblings().removeClass("--active");
    });
});
