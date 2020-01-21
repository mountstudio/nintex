$(document).ready(function() {
    let count = 0;
    $("#add").click(function() {
        var lastField = $("#buildyourform div:last");
        var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
        fieldWrapper.data("idx", intId);
        count++;
        console.log(count);
        var fName = $("<input type=\"color\" class=\"fieldname form-control\" name=\"colors["+count+"]\" />");
        var fImages = $('<input type="file" name="images['+ count +'][]" multiple />');
        // var removeButton = $(" <button type=\"button\" id=\"remove\">\n" +
        //     "                            <i class=\"fas fa-minus\" id=\"add\"></i>\n" +
        //     "                        </button>");
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
            "                        </button>" +
            "                    </div>\n" +
            "                </div>");
        let button = line.find('.remove');

        button.click(function() {
            $(this).parent().remove();
            count--;
            console.log('count=', count);
        });

        fieldWrapper.append(line);
        fieldWrapper.append(button);

        // $("#rmveButton").append(button);
        $("#buildyourform").append(fieldWrapper);
    });
    $("#preview").click(function() {
        $("#yourform").remove();
        var fieldSet = $("<fieldset id=\"yourform\"><legend>Your Form</legend></fieldset>");
        $("#buildyourform div").each(function() {
            var id = "input" + $(this).attr("id").replace("field","");
            var label = $("<label for=\"" + id + "\">" + $(this).find("input.fieldname").first().val() + "</label>");
            var input;
            switch ($(this).find("select.fieldtype").first().val()) {
                case "checkbox":
                    input = $("<input type=\"checkbox\" id=\"" + id + "\" name=\"" + id + "\" />");
                    break;
                case "textbox":
                    input = $("<input type=\"text\" id=\"" + id + "\" name=\"" + id + "\" />");
                    break;
                case "textarea":
                    input = $("<textarea id=\"" + id + "\" name=\"" + id + "\" ></textarea>");
                    break;
            }
            fieldSet.append(label);
            fieldSet.append(input);
        });

        $("body").append(fieldSet);
    });


});
