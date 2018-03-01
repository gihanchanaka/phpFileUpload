$(document).ready(function(){   
    
    var itemCount = 3;
    
    $("#btnAppendList").click(function(){
        $("ul").append(`<li>
                        <fieldset class="field-group">
                            <input id="var-name" name="var-name" type="text" value="" placeholder="Variable Name"/>
                            <input id="file" name="file-$itemCount" type="file" value="" placeholder="Variable File"/>
                        </fieldset>
                        </li>`);
    });
});