// $(".point").keyup(function () {
//     var totalScore =
//         parseInt($("#Point1").val()) + parseInt($("#Point2").val());
//     var bil2 = parseInt($("#Point2").val());

//     var hasil = bil1 / 2;
//     $("#hasil").attr("value", hasil);
// });
// $(".point").keyup(function () {
//     var Point1 = parseInt($(".Point1").val());
//     var totalScore = Point1 * 20;
//     var gpa = totalScore / 4;
//     $("#hasil").val(totalScore);
//     $("#gpa").val(gpa);
// });

$(document).ready(function () {
    $("#mis").keyup(function () {
        var totalScore =
            parseInt($("#point1").val()) + parseInt($("#point2").val());
        var gpa = totalScore / 5;
        $("#resultScore").val(totalScore);
        $("#gpa").val(gpa);
    });
});
