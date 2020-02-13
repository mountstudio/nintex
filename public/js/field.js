$(document).ready(function () {
    let count = 0;
    $("#add").click(function () {
        var lastField = $("#buildyourform div:last");
        var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + count++ + "\"/>");
        fieldWrapper.data("idx", intId);
        // count++;
        console.log(count);

        var line = $("<div class=\"row\" style='padding-top: 5px;'>\n" +
            "                    <div class=\"col-2\">\n" +
            "                        <input type=\"color\" class=\"fieldname color form-control\" name=\"\">\n" +
            "                    </div>\n" +
            "                    <div class=\"col-4\">\n" +
            "                        <input type=\"file\" name=\"colorsize[" + count + "][]\" multiple>\n" +
            "                    </div>\n" +
            "                    <div class=\"col-2\" class=\"rmveButton\">\n" +
            "                        <button type=\"button\" class=\"remove\">\n" +
            "                            <i class=\"fas fa-minus\"></i>\n" +
            "                        </button>\n" +
            "                    </div>\n" +
            "                </div>");

        line.find('.remove').click(function () {
            fieldWrapper.remove();
            console.log('remove')
            count--;
            console.log('count=', count);
        });
        fieldWrapper.append(line);

        $("#buildyourform").append(fieldWrapper);
    });

    $("#add-wholesale").click(function () {
        var lastField = $("#buildyourform div:last");
        var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + count++ + "\"/>");
        fieldWrapper.data("idx", intId);
        // count++;
        console.log(count);

        var line = $("<div class=\"row\" style='padding-top: 5px;'>\n" +
            "                    <div class=\"col-2\">\n" +
            "                        <input type=\"color\" class=\"fieldname colorbutton form-control\">\n" +
            "                    </div>\n" +
            "                    <div class=\"col-auto\">" +
            "                       <label for=\"qty1"+count+"\">Количество</label>" +
            "                    </div>\n" +
            "                    <div class=\"col-3\">" +
            "                       <input type=\"text\" id=\"qty1\" class=\"quantity form-control\" required>" +
            "                    </div>" +
            "                    <div class=\"col-4\">\n" +
            "                        <input type=\"file\" class='filebtn' name=\"color[" + count + "][]\" multiple>\n" +
            "                    </div>\n" +
            "                    <div class=\"col-1\" class=\"rmveButton\">\n" +
            "                        <button type=\"button\" class=\"rmve\">\n" +
            "                            <i class=\"fas fa-minus\"></i>\n" +
            "                        </button>\n" +
            "                    </div>\n" +
            "                </div>");

        line.find('.rmve').click(function () {
            fieldWrapper.remove();
            console.log('remove')
            count--;
            console.log('count=', count);
        });
        fieldWrapper.append(line);

        $("#buildyourform2").append(fieldWrapper);


    });
});
