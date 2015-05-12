$(document).ready(function(){
    //set up some basic options for the feedback_me plugin
    fm_options = {
        position: "right-top",
        title_label: "",
        trigger_label: " ABI    ",
        show_form: false,
        custom_html : "<div class='container'><h2>Abi</h2>\n\
<h4>Vajutage vasakul asuvas menüüs olevatel <br> piirkondadel, et näha selle piirkonna<br> \n\
 kandidaate. Kõigi kandidaatide nägemiseks<br> vajutage valikul 'Kõik'.<br>\n\
Kandidaatide tabeli sorteerimiseks vajutage <br>tabeli päises tulba pealkirjal.<br><br>\n\
Nimekirjas otsimiseks, vajutage 'Otsi <br>kandidaati' nupul. \n\
Te ei pea otsimiseks <br>täitma kõiki välju. Peale otsingu mõistete <br>sisestamist, vajutage uuesti 'Otsi kandidaati'<br> nupul.\n\
</h4></div>"
    };
    //init feedback_me plugin
    fm.init(fm_options);
});