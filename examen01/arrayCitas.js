var medico1 = new medico("1212125421H","alvaro","gamez","AB104");
var medico2 = new medico("457842159H","pedro","jimenez","AB104");
var medico3 = new medico("782143625V","javier","delgado","AB104");

var paciente1 = new paciente("884512003P","antonio","vega",155541,true);
var paciente2 = new paciente("656965865V","lucas","perez",85470,false);
var paciente3 = new paciente("894613254L","juan","ruiz",552478,false);



var introduceCita = (nuevaCita, arrayCitas) => {
    var encontrada = buscarCita(nuevaCita.paciente.dni, arrayCitas);
    if (encontrada == null){
    }
}


function mostrarCita(arrayCitas){
    var cad= "";
    for (var i = 0; i < arrayCitas.lenght; i++){
        document.write("<br><br>Cita" + (i+1)+"<br>");
        arrayCitas[i].paciente.mostrarPersona();
        arrayCitas[i].paciente.mostrarPaciente();
        document.write(".<br>");
        arrayCitas[i].medico.mostrarMedico();
        document.write("<br>fechaHora: " + arrayCitas[i].fechaHora);
    }
}



function buscarCita(){
    return arrayCitas.find((cita)=>cita.paciente.dni == dni);
}



function eliminarCita(dni,arrayCitas){
    var encontrada = buscarCita(dni,arrayCitas);
    /*if(encontrada!= -1){
        arrayCitas.splice(encontrada,1);
    }else{
        document.write("La cita no ha sido encontrada");
    }*/
    if (encontrada != undefined){
        var indice = arrayCitas.indexOf(encontrada);
        arrayCitas.splice(indice,1)
    }else{
        document.write("La cita no ha sido encontrada");
    }
}