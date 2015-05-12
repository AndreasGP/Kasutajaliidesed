$(document).ready(function(){
    //set up some basic options for the feedback_me plugin
    fm_options = {
        position: "right-top",
        title_label: "",
        trigger_label: " ABI    ",
        show_form: false,
        custom_html : "<div class='container'><h2>Abi</h2><br>\n\
<h4>Kandidaadi kustutamiseks kirjutage <br>kustutamise põhjendus ning seejärel<br> kinnitage kustutamine. Teilt küsitakse enne<br> kandidaadi kustutamist veel üks kord <br>kinnitust. \n\
</h4></div>"
    };
    //init feedback_me plugin
    fm.init(fm_options);
});