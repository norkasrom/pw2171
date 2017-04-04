
//variable global
var operador="";

function borrar(){
	operador="";
	document.calculadora.operando1.value=0;
	document.calculadora.operando2.value=0;
	document.calculadora.resultado.value=0;

}

function igual()
{
	var valor1=docuemnt.calculadora.operando1.value;
	var valor1=docuemnt.calculadora.operando2.value;
		document.calculadora.resultado.value=eval(valor1+operador+valor2);
	}

}
function operadores (ope)
{
	operador=ope
}
function numeros(num)
{
 if(operador=="") //escribir en el operando1
 {
 		var valorInical=document.calculadora.operando1.value;
 		if(valorInical=="0")
 		{
 			//elimino el cero
 			document.calculadora.operando1.value="";
 		}
 		//cancatena los valores de nuim con los operando1
 		document.calculadora.operando1.value=
 		document.calculadora.operando1.value + num;
}
 }
 else{//escribo el operando 2
 		var valorInical=document.calculadora.operando2.value;
 		if(valorInical=="0")
 		{
 			//elimino el cero
 			document.calculadora.operando2.value="";
 		}
 		//cancatena los valores de nuim con los operando1
 		document.calculadora.operando1.value=
 		document.calculadora.operando1.value + num;
 }
 