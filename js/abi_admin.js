$(document).ready(function(){
    //set up some basic options for the feedback_me plugin
    fm_options = {
        position: "right-top",
        title_label: "",
        trigger_label: " ABI    ",
        show_form: false,
        custom_html : "<div class='container'><h1>Abi</h1>\n\
<h4>Kandidaadi lisamiseks vajutage üleval pa-<br>remal paikneval Lisa kandidaati nupul.<br> \n\
Kandidaadi muutmiseks või kustutamiseks <br>vajutage kandidaadi rea lõpus paikneval vas-<br>taval nupul.\n\
<br><br>Tabeli filtreerimiseks täitke soovitud väljad <br>tabelist vasakul ja tabel filtreerib end ise.<br>\n\
</h4></div>"
    };
    //init feedback_me plugin
    fm.init(fm_options);
});