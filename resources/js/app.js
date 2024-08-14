import 'bootstrap';

import $ from "jquery";
window.$ = $;

$("#JSONInPrettyFormat").click(function() {
  var badJSON = $("#textarea1").val();
  var parseJSON = JSON.parse(badJSON);
  var JSONInPrettyFormat = JSON.stringify(parseJSON, undefined, 4);
  $("#textarea1").val(JSONInPrettyFormat);
});

$("#JSONInPrettyFormat2").click(function() {
  var badJSON = $("#textarea2").val();
  var parseJSON = JSON.parse(badJSON);
  var JSONInPrettyFormat = JSON.stringify(parseJSON, undefined, 4);
  $("#textarea2").val(JSONInPrettyFormat);
});

$("#copytoclip").click(function () {
        var copiedtext = $("#textarea2").val();
        if (navigator.clipboard) {
            navigator.clipboard.writeText(copiedtext)
                .then(() => { alert("JSON Copied"); })
                .catch((error) => { alert("Not copied"); });
        } else {
          alert("Not copied");
        }
});