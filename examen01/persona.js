class Persona {
    constructor (nombre, apellido, dni){
        this.nombre=nombre;
        this.apellido=apellido;
        this.dni=dni;
    }

    mostrarPersona = () => {
        document.write(this.nombre + " " + this.apellido + " " + this.dni + "<br>"); 
    }
}
