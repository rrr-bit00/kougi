import {api} from './API.js';

async function active()
    {
        var hyouzi = document.getElementById('show');
        var text = document.getElementById('searchWord').value;
        var u_te = encodeURIComponent(text);
        var lang = document.getElementById('selectLanguage').value;
        var source = document.getElementById('selectSource').value;
        
        var src = api + u_te +'&source_lang='+source+'&target_lang='+lang+"";
        var response = await fetch(src);
        var data = await response.json();

        var show_txt = data.translations[0].text;
        hyouzi.innerHTML = show_txt;
    }

window.active = active;