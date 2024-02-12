const s_categories = document.getElementsByName("select-categories")[0];
const s_filter = document.getElementsByName("select-filter")[0];
const form = document.getElementById("form-filter");

if (typeof(Get_Cookie("c_value")) != "undefined") s_categories.options[s_categories.selectedIndex].text = Get_Cookie("c_value");
if (typeof(Get_Cookie("f_value")) != "undefined") s_filter.options[s_filter.selectedIndex].text = Get_Cookie("f_value");

function Get_Cookie(cookie)
{
    let name = cookie + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++)
    {
        let c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
}

s_categories.addEventListener("change", () => {
    document.cookie = `c_value=${s_categories.options[s_categories.selectedIndex].text}`;
    form.submit();   
});

s_filter.addEventListener("change", () => {
    document.cookie = `f_value=${s_filter.options[s_filter.selectedIndex].text}`;
    form.submit();
});