
            function validateForm (){
                let a = document.getElementById("staff_id").value;
                let b = document.getElementById("staff_name").value;
                let c = document.getElementById("phn").value;
                let d = document.getElementById("email").value;
                let e = document.getElementById("loc").value;


                if(a=="" ){

                  document.getElementById("show").innerHTML = "Please fill up staff id" ;
                  return false;
                }
              else  if(b=="")
                {
                    document.getElementById("show").innerHTML = "Please fill up staff name" ;
                  return true;
                }
              else  if(c=="")
                {
                    document.getElementById("show").innerHTML = "Please fill up phone number" ;
                  return true;
                }
              else  if(d=="")
                {
                    document.getElementById("show").innerHTML = "Please fill up email" ;
                  return true;
                }
              else  if(e=="")
                {
                    document.getElementById("show").innerHTML = "Please fill up location" ;
                  return true;
                }
                else{
                      document.getElementById("show").innerHTML = "submitted" ;
                    return true;

            }
        
        }
