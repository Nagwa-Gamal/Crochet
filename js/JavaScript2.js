
    var productid=document.querySelector('#product-id');
    var username=document.querySelector('#user-name');
    var usernumber=document.querySelector('#user-number');
    var purButton=document.querySelector('#user-login-button');
    purButton.onclick=()=>{
                    if(productid.value!==''&&username.value!==''&&usernumber.value!==''){
                        alert('done');
            }
            else{
                alert('Error');
            }
    }


