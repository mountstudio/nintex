$(document).ready(function() {
    let count = 0;
    $("#add").click(function() {
        var lastField = $("#buildyourform div:last");
        var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + count++ + "\"/>");
        fieldWrapper.data("idx", intId);
        // count++;
        console.log(count);

        var line = $("<div class=\"row\">\n" +
            "                    <div class=\"col-2\">\n" +
            "                        <input type=\"color\" class=\"fieldname color form-control\" name=\"color\">\n" +
            "                    </div>\n" +
            "                    <div class=\"col-4\">\n" +
            "                        <input type=\"file\" name=\"colorsize["+ count +"][]\" multiple>\n" +
            "                    </div>\n" +
            "                    <div class=\"col-2\" class=\"rmveButton\">\n" +
            "                        <button type=\"button\" class=\"remove\">\n" +
            "                            <i class=\"fas fa-minus\"></i>\n" +
            "                        </button>\n" +
            "                    </div>\n" +
            "                </div>");

        let button = line.find('.remove').click(function () {
            fieldWrapper.remove();
            console.log('remove')
            count--;
            console.log('count=', count);
        });
        fieldWrapper.append(line);

        $("#buildyourform").append(fieldWrapper);
    });
});
