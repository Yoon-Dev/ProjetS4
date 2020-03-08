window.onload = () => {
    
    const btns_updates = document.querySelectorAll(".btn-update")
    console.log(btns_updates)
    
    btns_updates.forEach(el => {
        console.log(el)
        el.addEventListener("click", e => {
            let rownbr = 1
                
            const id = e.currentTarget.getAttribute(('data-input'))
            console
            const input = document.querySelector(id)
            if(input.getAttribute('data-rownbr')){
                rownbr = input.getAttribute('data-rownbr')
            }
            const value = input.value

            const bdd = input.getAttribute('data-bdd')
            const type = input.getAttribute('name')
            console.log(value, type, input, rownbr, bdd, type)
            sendData(`../../src/updateSingleRow.php?bdd=${bdd}&type=${type}&rownbr=${rownbr}`, value)
            
        })
    })

    async function sendData(url, data) {
        const formData  = new FormData();
      
        formData.append("value", data);
      
        await fetch(url, {
          method: 'POST',
          body: formData
        }); 
        // ...
    }
    
}