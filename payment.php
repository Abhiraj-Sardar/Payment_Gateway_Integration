<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="payment.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        var i=1;
    </script>
</head>
<body color="red">
    <div class="container">
        
        <div class="form-template">
        <h1 class="text-center">Feel Free To Donate !!!</h1>
        <br>
            <form action="mail.php" method="post">
                <h4>Name<span style="color:red">*</span> : <input type="text" name="name" style="width:300px;"> Email<span style="color:red">*</span> : <input type="email" name="email" style="width:300px;"></h4>
                <br>
                <h4>Phone <span style="color:red">*</span>: <input type="text" name="phone" style="width:300px;"> Date<span style="color:red">*</span> : <input type="date" name="dob" style="width:300px;"></h4>
                <br>
                <h4>Amount<span style="color:red">*</span>: <input type="text" name="amount" style="width:300px;"></h4>
                <br>
                <h4>Select Payment Mode<span style="color:red">*</span>:
                <input type="radio" onChange="creditCard()" name="mode" style="width:100px;">Credit Card<input type="radio" onChange="paypal()" name="mode" style="width:100px;">Paypal</h4>
                     <div id="instruction">
                        <hr>
                        <h4 class="text-center" style="margin:12px 0px;">Please Select an Option</h4>
                    </div>
                    <div id="paypal">
                        <hr>
                        <h4>Card Number<span style="color:red">*</span>&nbsp;&nbsp; : <input type="text" name="pcno" style="width:300px;"></h4>
                        <br>
                        <h4>Name on Card<span style="color:red">*</span> : <input type="text" name="pname" style="width:300px;"></h4>
                        <br>
                        <h4>Bank Name:<span style="color:red">*</span> &nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="pbname" style="width:300px;"></h4>
                        <br>
                        <h4>Expiry Date<span style="color:red">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="date" name="pedate" style="width:300px;">&nbsp; Security Code<span style="color:red">*</span> : <input type="password" name="psc" style="width:120px;"></h4>
                        <br>
                        <h4>Select Country<span style="color:red">*</span> : 
                            <select id="country" name="country" style="width:300px;">
                                <option value="india">India</option>
                                <option value="usa">USA</option>
                                <option value="australia">Australia</option>
                            </select>
                        </h4>
                        <br>
                        <h4>Select State<span style="color:red">*</span>&nbsp;&nbsp;&nbsp;&nbsp;  :&nbsp;
                            <select id="state" name="state"  style="width:300px;">
                                <option value="westbengal">West Bengal</option>
                                <option value="california">California</option>
                                <option value="queensland">Queensland</option>
                            </select>
                        </h4>

                        <br>
                        <h4>Enter Message :</h4>
                        <textarea style="margin:12px 200px;" name="pmsg" rows="4" cols="50" placeholder="Enter Your Message"></textarea>
                        
                        <button class="btn btn-success" style="margin:40px 350px;" name="send" type="submit" >Deposit Amount</button>
                    </div>
                    <div id="credit">
                        <hr>
                        <h4>Card Number<span style="color:red">*</span>&nbsp;&nbsp; : <input type="text" name="ccno" style="width:300px;"></h4>
                        <br>
                        <h4>Name on Card<span style="color:red">*</span> : <input type="text" name="cname" style="width:300px;"></h4>
                        <br>
                        <h4>Bank Name:<span style="color:red">*</span> &nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="cbname" style="width:300px;"></h4>
                        <br>
                        <h4>Expiry Date<span style="color:red">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="date" name="cename" style="width:300px;">&nbsp; Security Code<span style="color:red">*</span> : <input type="password" name="csc" style="width:120px;"></h4>
                        <br>
                        <h4>Enter Message :</h4>
                        <textarea style="margin:12px 200px;" name="pmsg" rows="4" cols="50" placeholder="Enter Your Message"></textarea>
                        
                        <button class="btn btn-success" name="send" type="submit">Deposit Amount</button>
                    <div>
            </form>
        </div>
    </div>
    <script>
        function creditCard(){
            if(document.querySelector("#paypal").style.display=="")
            {
                document.querySelector("#instruction").style.display="none";
                document.querySelector("#credit").style.display="block";
            }
            else{
                document.querySelector("#paypal").style.display="none";
                document.querySelector("#credit").style.display="block";
            }
        }
        function paypal(){
            if(document.querySelector("#credit").style.display=="")
            {
                document.querySelector("#instruction").style.display="none";
                document.querySelector("#paypal").style.display="block";
            }
            else{
                document.querySelector("#credit").style.display="none";
                document.querySelector("#paypal").style.display="block";
            }
        }
        
    </script>
</body>
</html>