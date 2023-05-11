import MicroModal from "micromodal";
import inputMask from "inputmask";
(() => {
    const inputMaskPhone = document.getElementById("inputMaskPhone");
    if (inputMaskPhone)
        inputMask("+7 (999) 999 99-99").mask(inputMaskPhone);

    try{
        MicroModal.init({
            openTrigger: 'data-custom-open',
        });
    }
    catch(e){
        console.log('micromodal error: ',e);
    }


})()

