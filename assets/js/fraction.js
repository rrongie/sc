/*****************************************
**   Matthew C. Roy
**   Big Business Websites
**   For Small Business Prices!
**   http://www.matthewroy.com
**
**   You may use this script freely for
**   non-commercial use as long
**   as this header is left intact.
*****************************************/

var n1, n2, d1, d2, An, Ad, Op;
var neg=1;

function solve(){
  //If all fields are numbers
  if(!isNaN(document.calc.n1.value)&&!isNaN(document.calc.d1.value)&&!isNaN(document.calc.n2.value)&&!isNaN(document.calc.d2.value)){
  //If no fields are blank
  if(document.calc.n1.value!=''&&document.calc.d1.value!=''&&document.calc.n2.value!=''&&document.calc.d2.value!=''){
    //Set variables:
    n1=document.calc.n1.value;// Numerator 1
    d1=document.calc.d1.value;// Numerator 2
    n2=document.calc.n2.value;// Denominator 1
    d2=document.calc.d2.value;// Denominator 2
    Op="+";// Operator
    } else {
    //If blank field
    alert('Please fill-in all fields!');
    }
  } else {
  //If field has non-number
  alert('Please enter only Numbers into the fields!');
  }

  //Which Operation
  
    switch (Op){
  case '+':
    //add fractions using formula ((n1*d2)+(n2*d1)) over (d1*d2)
    An=(n1*d2)+(n2*d1) //Answer Numerator
    Ad=(d1*d2) //Answer Denominator
    if(document.calc.reduce.checked==1){
      reduce();
    } else {
      display();
    }
   break

  case '-':
    //subtract fractions using formula ((n1*d2)-(n2*d1)) over (d1*d2)
    An=(n1*d2)-(n2*d1)//Answer Numerator
    Ad=(d1*d2)//Answer Denominator
    if(document.calc.reduce.checked==1){
      reduce();
    } else {
      display();
    }
   break

  case '*':
    //multiply fractions using formula (n1*n2) over (d1*d2)
    An=n1*n2;//Answer Numerator
    Ad=d1*d2; //Answer Denominator
    if(document.calc.reduce.checked==1){
            reduce();
    } else {
      display();
    }
    break

  case '/':
    //divide fractions using formula (n1*d2) over (d1*n2)
    An=n1*d2;//Answer Numerator
    Ad=d1*n2;//Answer Denominator
    if(document.calc.reduce.checked==1){
      reduce();
    } else {
      display();
    }
   break
  }
}

function reduce() {
  neg=1; //1 if positive, -1 if negative
  //convert to strings
  ng=An+'';
  dg=Ad+''
  if(ng.indexOf('-')!=-1){  //check to see if answer is negative.
    neg=-1
  }
  if(dg.indexOf('-')!=-1){
    neg=-1
  }
  if(ng.indexOf('-')!=-1&&dg.indexOf('-')!=-1)  {//if both numerator and denominator are negative the answer is positive
    neg=1
  }
  var factorX //highest common factor

  if ( An == 0 || Ad == 0 ) {
    factorX=1;
    return;
  }

  An = Math.abs( An );
  Ad = Math.abs( Ad );

  var factorX = 1;

  //Find common factors of Numerator and Denominator
  for ( var x = 2; x <= Math.min( An, Ad ); x ++ ) {
    var check1 = An / x;
    if ( check1 == Math.round( check1 ) ) {
      var check2 = Ad / x;
      if ( check2 == Math.round( check2 ) ) {
        factorX = x;
      }
    }
  }

  An=(An/factorX)*neg;  //divide by highest common factor to reduce fraction then multiply by neg to make positive or negative
  Ad=Ad/factorX;  //divide by highest common factor to reduce fraction
  display();
}

function display(){
  //Display answer
  document.calc.An.value = An;
  document.calc.Ad.value = Ad;
}

// -->