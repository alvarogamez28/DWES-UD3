class paciente extends Persona {
    constructor(dni,nombre,apellido,numAfil,mutualista){
        super(dni,nombre,apellido);
        this.numAfil = numAfil;
        this.mutualista = mutualista;
    }
    mostrarPaciente (){
        
    }
}