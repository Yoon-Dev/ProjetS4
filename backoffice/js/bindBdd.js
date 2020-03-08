window.onload = () => {
    
    const btns_updates = document.querySelectorAll(".btn-update")
    console.log(btns_updates)
    
    btns_updates.forEach(el => {
        console.log(el)
        el.addEventListener("click", e => {
            let rownbr = 1
            
            
            const id = e.currentTarget.getAttribute(('data-input'))
            const input = document.querySelector(id)
            if(input.getAttribute('data-rownbr')){
                rownbr = input.getAttribute('data-rownbr')
            }
            const value = input.value

            const bdd = input.getAttribute('data-bdd')
            const type = input.getAttribute('name')
            
            console.log(id, input, value, bdd, type)
            fetch(`../../src/updateSingleRow.php?bdd=${bdd}&type=${type}&rownbr=${rownbr}`, {
                method: 'POST', // *GET, POST, PUT, DELETE, etc.
                mode: 'same-origin', // no-cors, *cors, same-origin
                // test to checkAcces on the endpoint
                headers: {
                  'Content-Type': 'multipart/form-data'
                },
                referrerPolicy: 'no-referrer', // no-referrer, *client
                body: value // body data type must match "Content-Type" header
            });
            
        })
    })
    
}