import axios from "axios";
import Toast from "toastr";
import MicroModal from 'micromodal';
(function () {
    const sendMail = document.getElementById('sendMail')
    const inputName = document.getElementById('inputName')
    const inputPhone = document.getElementById('inputMaskPhone')
    const checkbox =  document.getElementById('checkbox')

    checkbox.addEventListener('click', (e) => {
        if (e.target.checked === false) {
            if (inputName.value === "" || inputPhone.value === "") {
                sendMail.setAttribute('disabled', 'disabled')
            }
        }
        if (e.target.checked === true) {
            if (inputName.value === "" || inputPhone.value === "") {
                sendMail.setAttribute('disabled', 'disabled')
            }
        }
        if (e.target.checked === false) {
            if (inputName.value !== "" || inputPhone.value !== "") {
                sendMail.setAttribute('disabled', 'disabled')
            }
        }
        if (e.target.checked === true) {
            if (inputName.value !== "" || inputPhone.value !== "") {
                sendMail.removeAttribute('disabled')
            }
        }
    })

    sendMail.addEventListener('click', (e) => {
        e.preventDefault()
        if (inputName.value === "") {
            inputName.classList.add("error-input")
        }

        if (inputPhone.value === "") {
            inputPhone.classList.add("error-input")
        }

        if (inputPhone.value !== "" && inputName.value !== "" && checkbox.checked) {
            inputName.classList.remove("error-input")
            inputPhone.classList.remove("error-input")
            axios.post('/form-contacts', {
                name: inputName.value,
                phone: inputPhone.value
            }).then(function (response) {
                if (response) {
                    inputName.value = ""
                    inputPhone.value = ""
                    MicroModal.close('modalForm')
                    document.querySelector('body').classList.remove('lock')
                    Toast.success("Ваше сообщение успешно отправленно", {interval: 3000});
                }
            }).catch(function (error) {
                console.log(error);
            })
        }

    })
})()
