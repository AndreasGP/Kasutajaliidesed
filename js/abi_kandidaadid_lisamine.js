$(document).ready(function(){
    //set up some basic options for the feedback_me plugin
    fm_options = {
        position: "right-top",
        title_label: "",
        trigger_label: " ABI    ",
        show_form: false,
        custom_html : "<div class='container'><h2>Abi</h2><br>\n\
<h4>Kandidaadi lisamiseks täitke ära kõik <br>kohustuslikud väljad ning lisake kommentaar, <br>mis põhjustel antud kandidaat lisati.<br><br>\n\
<br>Pildi failina võib kasutada .png, .jpg ja .jpeg <br>laiendiga faile. \n\
</h4></div>"
    };
    //init feedback_me plugin
    fm.init(fm_options);
});