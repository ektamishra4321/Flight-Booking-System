<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    button:hover
    {
        background-color:green;
    }
    td.one
    {
        border-width:0px ;
        
    }
    table
    {
        border-style:dashed ;
        border-width:5px ;
        margin-left:100px;
        
    }
    body
    {
        background-color: rgb(66, 61, 55) ;
    }
    
</style>
<body>
    <div style="margin-top:80px ">
<table cellspacing="10" >
    <tr>
        <td class="one" >
            <button style="height:60px;width:80px" onclick="bt1()" id="1">1</button>
        </td>
        <td class="one">
            <button style="height:60px;width:80px" onclick="bt2()" id="2" >2</button>
        </td>
    </tr>
    <tr>
        <td class="one">
            <button style="height:60px;width:80px" onclick="bt3()" id="3">3</button>
        </td>
        <td class="one">
            <button style="height:60px;width:80px" onclick="bt4()" id="4" >4</button>
        </td>
    </tr>
    <tr>
        <td class="one">
            <button style="height:60px;width:80px" onclick="bt5()" id="5">5</button>
        </td>
        <td class="one">
            <button style="height:60px;width:80px" onclick="bt6()" id="6" >6</button>
        </td>
    </tr>
    <tr>
        <td class="one">
            <button style="height:60px;width:80px" onclick="bt7()" id="7">7</button>
        </td>
        <td class="one">
            <button style="height:60px;width:80px" onclick="bt8()" id="8" >8</button>
        </td>
    </tr>
    <tr>
        <td class="one">
            <button style="height:60px;width:80px" onclick="bt9()" id="9">9</button>
        </td>
        <td class="one">
            <button style="height:60px;width:80px" onclick="bt10()" id="10" >10</button>
        </td>
    </tr>


</table> 
</div>
      

<script>
function bt1()
{
   document.getElementById("1").style.backgroundColor="blue";
   alert("You have selected seat 1");
   alert("your price total is Rs.5500");
}
function bt2()
{
   document.getElementById("2").style.backgroundColor="blue";
   alert("You have selected seat 2");
   alert("your price total is Rs.5500");
}
function bt3()
{
   document.getElementById("3").style.backgroundColor="blue";
   alert("You have selected seat 3");
   alert("your price total is Rs.5500");
}
function bt4()
{
   document.getElementById("4").style.backgroundColor="blue";
   alert("You have selected seat 4");
   alert("your price total is Rs.5500");
}
function bt5()
{
   document.getElementById("5").style.backgroundColor="blue";
   alert("You have selected seat 5");
   alert("your price total is Rs.5500");
}
function bt6()
{
   document.getElementById("6").style.backgroundColor="blue";
   alert("You have selected seat 6");
   alert("your price total is Rs.5500");
}
function bt7()
{
   document.getElementById("7").style.backgroundColor="blue";
   alert("You have selected seat 7");
   alert("your price total is Rs.5500");
}
function bt8()
{
   document.getElementById("8").style.backgroundColor="blue";
   alert("You have selected seat 8");
   alert("your price total is Rs.5500");
}
function bt9()
{
   document.getElementById("9").style.backgroundColor="blue";
   alert("You have selected seat 9");
   alert("your price total is Rs.5500");
}
function bt10()
{
   document.getElementById("10").style.backgroundColor="blue";
   alert("You have selected seat 10");
   alert("your price total is Rs.5500");
}

</script>
</body>
</html>