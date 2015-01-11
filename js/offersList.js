/**
 * Created by wolf on 12/12/2014.
 */

$("#btnInsertOffer").on("click" ,function() {
    $.ajax({
        type: "POST",
        data: {action: 'takeOffers'},
        url: "profile.php",
        dataType: "json",
        success: function(JSONObject) {
            var offerHTML = "";

            // Loop through Object and create offerHTML
            for (var key in JSONObject) {
                if (JSONObject) {
                    offerHTML += "<ul>";
                    offerHTML += "<li>" + JSONObject + "</li>";
                    offerHTML += "<li>" + JSONObject + "</li>";
                    offerHTML += "</ul>";
                }
            }
            $("#offersList ul").html(offerHTML);
        }
    });
});
