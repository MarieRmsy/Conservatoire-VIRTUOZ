const isEmpty = str => !str.trim().length;

document.getElementById("formFirstnameRegister").addEventListener("input", function() {
    if( isEmpty(this.value) ) {
        console.log( "NAME is invalid (Empty)" )
    } else {
        console.log( `NAME vddalue is: ${this.value}` );
        $('#nom').text(`${this.value}`);
    }
});