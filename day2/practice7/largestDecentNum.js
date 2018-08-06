$("button").click(function () {
    var num_decoder = $("#numDecoder").val();
    var no_of_3s = "3";
    var no_of_5s = "5"
    var max_num  = 0;
    var num_key  = 0;

    switch (num_decoder % 3) {
        case 0:
            max_num = 0;
            break;

        case 1:
            max_num = 2;
            break;

        case 2:
            max_num = 1;
            break;
    }

    if (5 * max_num <= num_decoder) {
        num_key = no_of_5s.repeat(num_decoder - 5 * max_num) + no_of_3s.repeat(5 * max_num)
    }
    else {
        num_key = "-1";
    }

    $("#numKey").val(num_key);
});