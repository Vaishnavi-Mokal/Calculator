<!DOCTYPE html>
<html>
  <head>
      <title>
          Calculator
      </title>

    <link rel="stylesheet" href="cal.css" />
    
    <?php include("head.php")?>
  </head>
  <body>
    <?php include("nav.php")?>
    <!--section to create a calculator UI-->
    <section class="container">
       
      <div class="row">
        <div class="col-md-6">
            
          <form name="calculator" class="cal">
            <input type="text" id="number" class="display form-control">
            <br>
            <input type="button" class="btn btn-light"  onclick="cancel()" value="C">
            <input type="button" class="btn btn-light ml-3" onclick="back()" value="B">
            <input type="button" class="btn btn-warning ml-3" onclick="display('**')" value="e" />

            <input type="button" class="btn btn-warning ml-3" onclick="display('+')"  value="+">
            <br></br>

            <input type="button" class="btn btn-light " onclick="display('9')" value="9">
            <input type="button" class="btn btn-light ml-3" onclick="display('8')" value="8">
            <input type="button" class="btn btn-light ml-3" onclick="display('7')" value="7">
            <input type="button" class="btn btn-warning ml-3" onclick="display('-')" value="-">
            <br></br>

            <input type="button" class="btn btn-light" onclick="display('6')" value="6" />
            <input type="button" class="btn btn-light ml-3" onclick="display('5')" value="5" />
            <input type="button" class="btn btn-light ml-3" onclick="display('4')" value="4" />
            <input type="button" class="btn btn-warning ml-3" onclick="display('*')" value="*" />
            <br></br>

            
            <input type="button" class="btn btn-light" onclick="display('3')" value="3" />
            <input type="button" class="btn btn-light ml-3" onclick="display('2')" value="2" />
            <input type="button" class="btn btn-light ml-3" onclick="display('1')" value="1" />
            <input type="button" class="btn btn-warning ml-3" onclick="display('/')" value="/" />
            <br></br>

            <input type="button" class="btn btn-light" onclick="display('0')" value="0" />
            
            <input type="button" class="btn btn-light ml-3" onclick="display('.')" value="." />
            <input type="button"class="btn btn-success ml-3" onclick="solution()" value="="/>
           
          </form>
        </div>
        <!--to show the history-->
        <div class="col-md-6 history">
            <h3>History</h3>
            <hr>
           <ul  id="history">

           </ul>
           
            
    
        </div>
      </div>


    </section>


    <?php       
            include("foot.php");
    ?>

    <script>
        

        var arr=[];

        //create a function to display the button value on calculator
        function display(val)
        {
            document.getElementById('number').value+=val;
        }

        //create a function to clear the value on text field
        function cancel()
        {
            document.getElementById('number').value="";
        }


        //create a function to backspace the value on text field

        function back()
        {
            var num=document.getElementById('number').value;
            num=num.slice(0,-1);
            document.getElementById('number').value=num;
        }


        //create a function to calculate the value with addition,substraction,multiplication,division,exponent


        function solution()
        {
            var temp=document.getElementById('number').value;
            
            //eval function is to evaluate the expression 
            var solve=eval(temp);
            document.getElementById('number').value=solve;
            

            history(temp,solve);
            
        
        }

        //create a function to show hsitory of calculations 
        function history(x,y){
            var task = x +" = "+y
            console.log(task)

            arr.push(task);
            console.log(arr);
            var list=document.getElementById('history');
            var li = document.createElement('li');

            //to looping the history in list format
            arr.forEach(function(val,ind){
                li.innerHTML=val
                list.appendChild(li);
            })
        }







    </script>
  </body>
</html>


