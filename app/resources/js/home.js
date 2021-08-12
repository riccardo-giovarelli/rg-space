$(function () {
    // Load apod data
    if ($("#apod").length) {
        $.ajax({
            type: "GET",
            url: "/get-apod",
            success: function (result) {
                const apod_info = [];
                if (result.date) apod_info.push(result.date);
                if (result.copyright) apod_info.push(result.copyright);
                $("#apod_info").text(apod_info.join(" - "));

                $("#apod_title-right").text(result.title);
                $("#apod_description").text(result.explanation);

                switch (result.media_type) {
                    case "image":
                        $("#apod_image").attr("src", result.url);
                        $("#apod_image_link").attr("href", result.hdurl);
                        break;
                    case "video":
                        $("#apod_image").hide();
                        $("#apod_video").show();
                        $("#apod_video").attr(
                            "src",
                            result.url + "?autoplay=1&loop=1"
                        );
                        break;
                }
            },
        });
    }
});
