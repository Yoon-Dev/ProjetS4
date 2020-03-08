window.onload = () => {
    
    const btns_updates = document.querySelectorAll(".btn-update")
    console.log(btns_updates)
    
    btns_updates.forEach(el => {
        console.log(el)
        el.addEventListener("click", e => {
  
            const id = e.currentTarget.getAttribute(('data-input'))
            const input = document.querySelector(id)
            const value = input.value
            
            const bdd = input.getAttribute('data-bdd')
            const type = input.getAttribute('name')
            sendData(`../../src/updateSingleRow.php?bdd=${bdd}&type=${type}`, value)
            
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

    const jsonObj2phpObj = object => {
        let json = "{"
        for(property in object) {
            let val = object[property]
            if(typeof(val) == "string") {
                json += '"'+property+'":"'+val+'",'
            }
        }
        return json.substr(0,json.length-1) + "}";
    }
    
}