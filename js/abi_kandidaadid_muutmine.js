$(document).ready(function(){
    //set up some basic options for the feedback_me plugin
    fm_options = {
        position: "right-top",
        title_label: "",
        trigger_label: " ABI    ",
        show_form: false,
        custom_html : "<div class='container'><h2>Abi</h2><br>\n\
<h4>Kandidaadi muutmiseks muutke soovitud <br>väljad, mis muutuvad muudatuste indikee-<br>rimiseks hallikaks, ning muudatuste <br> salvestamiseks vajutage salvestamise nupul.<br>Ilma salvestamata muudatusi ellu ei viida. \n\
</h4></div>"
    };
    //init feedback_me plugin
    fm.init(fm_options);
});