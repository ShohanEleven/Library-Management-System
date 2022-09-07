
            function validateForm (){
                let a = document.getElementById("book_id").value;
                let b = document.getElementById("book_name").value;
                let c = document.getElementById("writer_name").value;
                let d = document.getElementById("book_type").value;
                
                if(a=="" ){

                  document.getElementById("show").innerHTML = "Please fill up book id" ;
                  return false;
                }
                else if(b=="")
                {
                    document.getElementById("show").innerHTML = "Please fill up book name" ;
                  return true;
                }
               else if(c=="")
                {
                    document.getElementById("show").innerHTML = "Please fill up writer name" ;
                  return true;
                }
               else if(d=="")
                {
                    alert("Book Type required");
                }
                else{
                      document.getElementById("show").innerHTML = "submitted" ;
                    return true;

            }
        
        }

           // if(a=="" && b=="" && c==""&& d==""){

                //document.getElementById("show").innerHTML = "Please fill up all the option" ;
                //return false;
              //}else{
                //  document.getElementById("show").innerHTML = "submitted" ;
                //return true;
              //}
        