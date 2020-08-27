window.onload = () => {
const form = document.querySelector('form');
const input = document.querySelector("form > input[type='text']");

window.history.pushState({'signin':'signin'}, 'signin', 'signin');

function submitData(e){
    e.preventDefault();
   

    let controller = 'register';
    let method = 'user';
    let params = escape(input.value.trim());
    let url = 'http://localhost/GitHub%20Repository/PHP/Sistema%20de%20Rotas/'+controller+'/'+method+'/'+params;
    window.history.pushState({'signin':'register'}, 'register', 'register');
    

    fetch(url, {
        method:'POST',
        headers:{
            'Content-type':'aplication/json; charset="iso-8859-1"'
        },
    }).then((response) => {
        return response.json();
    }).then((text) => {
        console.log(text);
    });
}
form.addEventListener('submit', submitData);
window.onpopstate = function(e){
    console.log(e.state);
}
}