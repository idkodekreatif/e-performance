$(document).ready(function () {
    // Add new row
    $("#rowAdder").on("click", function () {
        var rowCount = $(".row-question").length; // menghitung jumlah baris yang sudah ada dan menambahkannya dengan 1
        var newRow =
            '<div class="row mt-2 row-question row-hitung">' +
            '<div class="col-md-3 mt-2">' +
            '<input type="text" name="jenisPekerjaan[]" class="form-control input-default jenis-pekerjaan" placeholder="Keterangan Pekerjaan">' +
            "</div>" +
            '<div class="col-md-6 mt-2">' +
            '<div class="row mt-3">' +
            '<div class="col-md">' +
            '<input type="radio" class="question" name="question[' +
            rowCount +
            ']" id="question1" value="1" onclick="sumQuestion();">' +
            "</div>" +
            '<div class="col-md">' +
            '<input type="radio" class="question" name="question[' +
            rowCount +
            ']"  id="question2" value="2" onclick="sumQuestion();">' +
            "</div>" +
            '<div class="col-md">' +
            '<input type="radio" class="question" name="question[' +
            rowCount +
            ']"  id="question3" value="3" onclick="sumQuestion();">' +
            "</div>" +
            '<div class="col-md">' +
            '<input type="radio" class="question" name="question[' +
            rowCount +
            ']"  id="question4" value="4" onclick="sumQuestion();">' +
            "</div>" +
            '<div class="col-md">' +
            '<input type="radio" class="question" name="question[' +
            rowCount +
            ']"  id="question5" value="5" onclick="sumQuestion();">' +
            "</div>" +
            "</div>" +
            "</div>" +
            '<div class="col-md-2 mt-2">' +
            '<input type="number" name="jumlahBobot[]" class="form-control input-default bobot" placeholder="Jumlah Bobot (%)">' +
            "</div>" +
            '<div class="col-md-1 mt-2">' +
            '<button type=button class="btn btn-danger btn-sm deleteRow"><i class="fa-sharp fa-solid fa-trash"></i></button>' +
            "</div>" +
            "</div>";
        $(".parent-col").append(newRow);
    });

    // Delete row
    $(".parent-col").on("click", ".deleteRow", function () {
        // get the value of the deleted row's bobot input
        var deletedBobotValue = parseInt(
            $(this).closest(".row-question").find(".bobot").val()
        );

        // subtract the deletedBobotValue from the totalBobot
        var totalBobot = parseInt($(".jumlah-bobot").val()) - deletedBobotValue;

        // update the value of the jumlah-bobot input
        $(".jumlah-bobot").val(totalBobot);

        if (
            $(".parent-col").length === 0 ||
            ($(".jumlah-bobot").val() !== "" && totalBobot <= 0) ||
            totalBobot < 10 ||
            totalBobot > 100
        ) {
            // disable the Save button
            $("button.save").prop("disabled", true);

            // show the warning message
            $(".warning-message").text(
                "Total Bobot must be equal or greater than 100 to save the data"
            );
        } else {
            // enable the Save button
            $("button.save").prop("disabled", false);

            // clear the warning message
            $(".warning-message").text("");
        }

        // remove the deleted row
        $(this).closest(".row-question").remove();
    });

    // Fungsi untuk menghitung jumlah poin
    function sumQuestion() {
        var rowCount = $(".row-question").length;
        var poin1 = 0;
        var poin2 = 0;
        var poin3 = 0;
        var poin4 = 0;
        var poin5 = 0;

        for (var i = 1; i <= rowCount; i++) {
            var question = $('input[name="question[' + i + ']"]:checked');
            var nilaiValuePoin = question.val();
            if (
                typeof nilaiValuePoin === "string" &&
                !isNaN(parseInt(nilaiValuePoin))
            ) {
                nilaiValuePoin = parseInt(nilaiValuePoin);
                if (question.attr("id") == "question1") {
                    poin1 += nilaiValuePoin;
                } else if (question.attr("id") == "question2") {
                    poin2 += nilaiValuePoin;
                } else if (question.attr("id") == "question3") {
                    poin3 += nilaiValuePoin;
                } else if (question.attr("id") == "question4") {
                    poin4 += nilaiValuePoin;
                } else if (question.attr("id") == "question5") {
                    poin5 += nilaiValuePoin;
                }
            }
        }

        $(".poin1").val(poin1);
        $(".poin2").val(poin2);
        $(".poin3").val(poin3);
        $(".poin4").val(poin4);
        $(".poin5").val(poin5);
    }

    $(".parent-col").on("click", ".question", sumQuestion);

    function sumBobot() {
        var totalBobot = 0;
        $(".parent-col .bobot").each(function () {
            var nilaiBobotValue = parseInt($(this).val());
            if (!isNaN(nilaiBobotValue)) {
                totalBobot += nilaiBobotValue;
            }
        });

        $(".jumlah-bobot").val(totalBobot);
        // console.log("Total Bobot: " + totalBobot);

        if (
            $(".parent-col").length === 0 ||
            ($(".jumlah-bobot").val() !== "" && totalBobot <= 0) ||
            totalBobot < 100 ||
            totalBobot > 100
        ) {
            // disable the Save button
            $("button.save").prop("disabled", true);

            // show the warning message
            $(".warning-message").text(
                "Total Bobot must be equal or greater than 100% to save the data"
            );
        } else {
            // enable the Save button
            $("button.save").prop("disabled", false);

            // clear the warning message
            $(".warning-message").text("");
        }
    }

    // call the sumBobot function on keyup event of .bobot element
    $(".parent-col").on("keyup", ".bobot", sumBobot);

    $(".parent-col").on("keyup change", ".question, .bobot", function () {
        var rowCount = $(".row-hitung").length;
        var totalPoinXBobot = 0; // inisialisasi variabel total
        $(".row-hitung").each(function (index) {
            var resultValuePoin =
                parseInt(
                    $(
                        'input[name="question[' + (index + 1) + ']"]:checked'
                    ).val()
                ) || 0;
            var resultNilaiBobotValue =
                parseFloat($(this).find(".bobot").val()) || 0;

            var nilaiPersen = resultNilaiBobotValue / 100; // convert to percentage

            var totalValue = resultValuePoin * nilaiPersen;
            var resultTotalValuePoinXBobot = parseFloat(totalValue.toFixed(2));
            console.log(
                "Total Value Poin X Bobot " +
                    (index + 1) +
                    ": " +
                    resultTotalValuePoinXBobot
            );

            totalPoinXBobot += resultTotalValuePoinXBobot; // menambahkan nilai ke variabel total
            var resultSum = totalPoinXBobot.toFixed(2); // memformat angka hingga 2 desimal
            $(".total-sum").val(resultSum); // output interfaces: Total SUM: 4.30
            // console.log("Total SUM: " + resultSum); // output: Total SUM: 4.30

            var kaliDelapanPuluPersen = (resultSum * 80) / 100;
            var resultKaliDelapanPuluPersen = kaliDelapanPuluPersen.toFixed(2); // memformat angka hingga 2 desimal
            $(".total-presentase").val(resultKaliDelapanPuluPersen);
            // console.log("Total Persentase: " + resultKaliDelapanPuluPersen); // output: Total Persentase: 3.44
        });

        sumQuestion();
        sumBobot();
    });
});
