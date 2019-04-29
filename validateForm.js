function validateForm() {

  var cont = 0;
  var str;
  var vector = new Array();
  var iter = new Array(0,1,2,3,4,5,6,7,8);
  vector[0] = [0,0,0,0,0,0,0,0,0];
  vector[1] = ["Student","Teacher","Language","Attitude","Participation","Speaking","Listening","Writing","Reading"];
  var i;
  var x;
  var mis = new Array();
  var j=0;

  for (i in iter){
    x = document.forms["myForm"][vector[1][i]].value;
    if (x == "") {
    vector[0][1]=1;
    cont = cont + 1;
    mis[j] = vector[1][i];
    j=j+1;  
    }
  }

  if (cont > 0){
    for (i in mis){
      
      if (mis.length == 1){
        str=mis[0];          
      }else{                  
          if (i==mis.length - 1){          
          str = str.concat(" and ", mis[i]);
          }else{
            if (i==0){
              str=mis[0];
          }else{
            str = str.concat(", " ,mis[i]);
          }          
        }      
      }
    }
    if (cont==1){
      alert(str + " is missing!")
      return false;
    }
    if (cont>1){
      alert(str + " are missing!");
      return false;
    }
  }
}

