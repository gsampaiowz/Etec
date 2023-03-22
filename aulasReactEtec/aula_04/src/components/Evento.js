function Evento({palavra}){
    function meuEvento(){
        console.log(`Opa! Fui ativado! ${palavra}`)
    }

    return(
        <>
            <p>Clique para disparar um evento</p>
            <button onClick={meuEvento}>ATIVAR!</button>
        </>
    )
}

export default Evento;