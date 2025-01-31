function aviso(){
    alert("la nota del estudiante fue guardado correctamente");
}






function nota(){
var nota1=0;
var nota2=0;
var nota3=0;
resultado=0;

nota1= prompt("nota acumulada de modulo1:");
document.getElementById("demo1").innerHTML= nota1;

nota2= prompt("nota acumulada de modulo2:");
document.getElementById("demo2").innerHTML= nota2;

nota3= prompt("nota acumulada de modulo3:");
document.getElementById("demo3").innerHTML= nota3;

resultado= (Number(nota1)+Number(nota2)+Number(nota3))/3;
document.getElementById("demo").innerHTML=resultado; 

if(resultado < 10){
   alert("suspenso");
   
}else{
    alert("aprobado");
    
}




}