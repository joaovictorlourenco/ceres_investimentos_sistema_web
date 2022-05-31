/* cel mask */

const cel = document.querySelector("#inputCell");


cel.addEventListener("keydown", (e) => {
  let celInputValue = e.target.value;
  
  celInputValue = celInputValue.replace(/\D/g, "");
  celInputValue = celInputValue.replace(/(^\d{2})(\d)/, "($1) $2");
  celInputValue = celInputValue.replace(/(\d{5})(\d{4}$)/, "$1-$2");
  
  e.target.value = celInputValue;
});
/* Confirma CPF */

function getCPF(){

  const inputCPF = document.querySelector("#inputCPF")
  const btn = document.querySelector("#btn")

  let CPF = inputCPF.value

   result = validarCPF(CPF)

  if(result){
    alert("CPF É VALIDO")
    btn.removeAttribute('disabled','')

  }else{

    alert("O CPF É INVÁLIDO")
    btn.setAttribute('disabled','')
    
  }

}

function validatePass(){
  const getBarra = document.querySelector("#barra")
  const getBarra1 = document.querySelector("#barra_1")
  const getBarra2 = document.querySelector("#barra_2")
  const password = document.querySelector("#inputPassword").value

   let resultLength = passwordlength(password)
   
  /* checa se tem pelo menos 6 caracteres */
    if(resultLength == false){
      getBarra.style.color = "red"
      btn.setAttribute('disabled','')
    }
    else{
      getBarra.style.color = "green"
      btn.removeAttribute('disabled','')
    }

    /* checa pelo menos uma letra maiúscula */

    let resultMai = passwordMai(password)

    if(resultMai == false){
      getBarra1.style.color = "red"
      btn.setAttribute('disabled','')
    }else{
      getBarra1.style.color = "green"
      btn.removeAttribute('disabled','')
    }

    /*Verifica se tem pelo menos um caractere especial */
    let resultEspecial = caracterEspecial(password)

    if(resultEspecial == false){

      getBarra2.style.color = "red"
      btn.setAttribute('disabled','')

    }else{

      getBarra2.style.color = "green"
      btn.removeAttribute('disabled','')

    }

    
}