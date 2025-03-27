<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manidhar Silks | Ecommerce Website Design</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="  background: radial-gradient(#ffffff,#ffd6d6);">
    <div class="container">
    
    <div class="logo">
        <img src="manidhar.png"  width="150px" alt="logo">&emsp;&emsp;&emsp;&emsp;
        <bdi> 𝔼𝔦𝔭𝔢𝔰𝔞𝔣 𝔪𝔢𝔧𝔤𝔨𝔲 </bdi>
    </div>
</div>
       

<!----------------------form-------------------------->
<form action="end.php" method="post" id="form">
    <table align="center" cellpadding="6" border="4" cellspacing="0px">
    <tr><td align="center" colspan="4"><h1>SHOPPING ADDRESS</h1></td></tr>
    <tr>
    <td><label>USERNAME:</label></td>
    <td><input type="text" name="uname" id="uname"></td><br>
    <td><span id="error" style="color: red;"></span></td><br><br>
    </tr>
    <tr>
    <td><label>EMAIL:</label></td>
    <td><input type="text" name="mail" id="email"></td><br><br>
    <td><span id="merror" style="color: red;"></span></td>
    </tr>
    <tr>
    <td><label>PHONE NUMBER:</label></td>
    <td><input type="tel" name="number" id="no" size="10" minlength="1" maxlength="10"></td><br>
    <td><span id="terror" style="color: red;"></span></td><br><br>
    </tr>
    <tr>
    <td><label>PRODUCT NAME:</label></td>
    <td><input type="text" name="product_name" id="product_name" required></td>
    <td><span id="perror" style="color: red;"></span></td>
    </tr>
    <tr>
    <td><label>ADDRESS</td>
    <td><textarea rows="5" rows="7" name="address"></textarea></td>
    </tr>
    <tr>
    <td colspan="5" align="center">
    <button type="submit" value="submit">submit</button>
    <button type="reset" value="reset">reset</button>
    </td>
    </tr>
    </table>
    </form>
        <script>
            let form=document.getElementById('form');
    
            let uname=document.getElementById('uname');
            let utel=document.getElementById('no');
            let umail=document.getElementById('email');
            let upname=document.getElementById('product_name');
    
            let uerror=document.getElementById('error');
            let terror2=document.getElementById('terror');
            let merror2=document.getElementById('merror');
            let perror=document.getElementById('perror');
         
            form.addEventListener("submit",event=>{event.preventDefault();validate();})
            function validate(){
    
                let name=uname.value.trim();
                let telph=utel.value.trim();
                let em=umail.value.trim();
                let pname=upname.value.trim();
    
                if(pname===""||pname==null){
                    perror.innerText="Product name is required";
                } else if (!pname.match(/^[a-zA-Z0-9 ]{3,50}$/)) {
                    perror.innerText="Must be 3-50 characters long and contain only letters, numbers, and spaces";
                } else {
                    perror.innerText="";
                }
    
                if(name===""||name==null){
                    uerror.innerText="cant be empty";
                }
                 else if(name.length<3){
                    uerror.innerText="must be conatin 3 letters";
                    }
               else if(!isNaN(name)){
                    uerror.innerText="only alphabets";
                }
                
                else if(telph===""||telph==null){
                    terror2.innerText="telphone cant be empty";
                }
                else if(!telph.match(/[6-9][0-9]{9}/)){
                    terror2.innerText="invalid number";
                }
                else if(em===""||em==null){
                    merror2.innerText="email cant be empty";
                }
                else if(!(em.match(/^[a-zA-Z0-9_/.-]+@[a-zA-Z0-9_-]+(?:\.[a-z]{2,6})$/))){
                    merror2.innerText="invalid mail";
                }
                else{
                       form.submit();
                   }
            } 
        </script>
</body>
</html>
