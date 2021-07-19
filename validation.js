var form = document.querySelector("#test")

form.addEventListener('submit', function(event){
    var name = document.querySelector("#name").value
    var lname = document.querySelector("#lastname").value
    var company = document.querySelector("#Company").value
    var tel = document.querySelector("#phone").value
    var email = document.querySelector("#mail").value
    var website = document.querySelector("#url").value

    var form_table = [name, lname, company, tel, email, website]

    for (var i = 0; i < form_table.length; i++){

        var err = document.querySelector(`#err${i}`)

        if (form_table[i] == ""){
            err.setAttribute("src", "Images/x-circle.svg")
            event.preventDefault()
        }else {
            err.setAttribute("src", "Images/check2-circle.svg")
        }
    }
})





    