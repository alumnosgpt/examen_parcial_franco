const botoncerrar = document.getElementById('cerrarsesion')

const cerrarsesion = async () => {

   
    const url = `/login/cerrarsesion`;
    const config = {
        method: 'GET'
    };

    try {
        const respuesta = await fetch(url, config);
        const data = await respuesta.json();
        
   
        if(data == true){

            window.location.href= '/login/'
        }


     

        

        
    } catch (error) {
        console.log(error);
    }
};







botoncerrar.addEventListener('click', cerrarsesion)
