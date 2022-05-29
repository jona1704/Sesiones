function login(){
    let formulario = document.querySelector('#forma_login');
    let nombre = document.querySelector('#usuario');
    let pass = document.querySelector('#pass');
    formulario.addEventListener('submit', (event) => {
        event.preventDefault();
        //alert("Formulario trabajando");
        datos(nombre, pass);
    })
}

function datos(nombre, pass){
    let data = new FormData();
    data.append("nombre", nombre.value);
    data.append("pass", pass.value);

    fetch('php/validar.php', {
        method : 'post',
        body: data
    })
    .then(response => response.json())
    .then(({exito}) => {
        if(exito === 1) location.href = "views/home.php";
        else alert("Error en los datos")
    })
}


login();
