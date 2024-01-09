
// International telephone format
// $("#phone").intlTelInput();
// get the country data from the plugin
document.addEventListener("DOMContentLoaded", function () {
    var countryData = window.intlTelInputGlobals.getCountryData(),
        input = document.querySelector("#phone"),
        addressDropdown = document.querySelector("#country");

    // init plugin
    var iti = window.intlTelInput(input, {
        hiddenInput: "full_phone",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // just for formatting/placeholders etc
    });

    // populate the country dropdown
    for (var i = 0; i < countryData.length; i++) {

        var country = countryData[i];
        var optionNode = document.createElement("option");
        optionNode.value = country.iso2;
        var textNode = document.createTextNode(country.name);
        optionNode.appendChild(textNode);
        addressDropdown.appendChild(optionNode);
    }
    // set it's initial value
    addressDropdown.value = iti.getSelectedCountryData().iso2;

    // listen to the telephone input for changes
    input.addEventListener('countrychange', function (e) {
        addressDropdown.value = iti.getSelectedCountryData().iso2;
    });

    // listen to the address dropdown for changes
    addressDropdown.addEventListener('change', function () {
        iti.setCountry(this.value);
    });
    //Append Value To Phone Field
    $("#phone").prop('value', '+1 ');
    document.querySelector(".iti--allow-dropdown").classList.add("col-12");
    document.querySelector(".iti--allow-dropdown").classList.add("mb-3");
});
