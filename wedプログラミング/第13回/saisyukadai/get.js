import {api} from './API.js';

async function active()
    {
        var hyouzi = document.getElementById('show');
        var text = document.getElementById('searchWord').value;
        var u_te = encodeURIComponent(text);
        
        const src = api + u_te +'&target_lang=JA';
        const response = await fetch(src);
        const data = await response.json();

        var show_txt = data.translations[0].text;
        hyouzi.innerHTML = show_txt;
    }

window.active = active;