function toggleSearch(){
    var options = document.getElementById("search_options");
    if (options.value == 0){
        options.value = 1;
        options.innerHTML = "";
    } else {
        options.value = 0;
        options.innerHTML = '\
            <table class="miles_range">\
                <tr>\
                    <td>\
                        <label for="miles" id="distance">Max Range (mi)</label>\
                    </td>\
                    <td>\
                        <input type="range" class="range_red" id="miles" min="1" max="50" step="1" value="1" oninput="this.nextElementSibling.value = this.value"><output id="distance">1</output>\
                    </td>\
                </tr>\
            </table>\
            <table>\
                <tr>\
                    <td><label for="min_price" class="p_range">Min Price</label></td>\
                    <td><label for="max_price" class="p_range">Max Price</label></td>\
                </tr>\
                <tr>\
                    <td><input type="text" id="min_price" name="min_price" class="p_range"></td>\
                    <td><input type="text" id="max_price" name="max_price" class="p_range"></td>\
                </tr>\
            </table>';
    }
}