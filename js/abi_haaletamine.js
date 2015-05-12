$(document).ready(function(){
    //set up some basic options for the feedback_me plugin
    fm_options = {
        position: "right-top",
        title_label: "",
        trigger_label: " ABI    ",
        show_form: false,
        custom_html : "<div class='container'>\n\
<h4>Kandidaadi valimiseks vajutage soovitud <br> kandidaadi nimel vasakus ääres asuvas<br> \n\
 valikukastis. Veenduge, et paremasse äärde <br>ilmus soovitud kandidaadi info ning hääle <br>\n\
edastamiseks vajutage 'Kinnitan hääle' nuppu,<br> mille peale teilt küsitakse ID-kaardi teist pini.<br>\n\
Peale Pin-koodi sisestamist on teie hääl <br>edukalt edastatud.<br><br>\n\
Peale hääletamist võite oma häält muuta siin<br>samas. Sellisel juhul teie eelmine hääl tühis-<br>tatakse. \n\
Te võite peale hääletamist ka eel-<br>mise hääle tühistada ilma uut kandidaati <br>valimata. Selleks järgige ekraanil asuvaid <br>juhiseid.\n\
</h4></div>"
    };
    //init feedback_me plugin
    fm.init(fm_options);
});