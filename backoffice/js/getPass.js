window.onload = () => {

    const username = document.querySelector('#username-identification')
    const password = document.querySelector('#password-identification')
    const btnIdentification = document.querySelector('#admin-identification')
    
    btnIdentification.addEventListener('click', () => {
       let usernameValue = username.value
       let passValue = password.value
       if(usernameValue){
           fetch(`../../src/getAdminPassword.php?username=${usernameValue}&pass=${passValue}`)
            .then( res => {
                return res.json()
            })
            .then( res => {
                console.log(res)
                if(res === "succes"){
                     window.location.href= "/backoffice/admin/index.php"
                }else{
                    alert('Un intru !')
                }
            })
            .catch(error => {
                alert(error)
            })
       }
    })
    
}