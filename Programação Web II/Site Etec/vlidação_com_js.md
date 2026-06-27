<div align="center">

# Video demonstração da validação do formulario com JS
  
https://github.com/user-attachments/assets/54a7a55d-5b5c-4698-b3ac-9bae70e77c4f

---

## Código usado na validação

```
document.addEventListener("DOMContentLoaded", () => {
const form = document.getElementById("form");
const nome = document.getElementById("idNome");
const email = document.getElementById("idEmail");
const assunto = document.getElementById("idAssunto");
const mensagem = document.getElementById("idMens");

form.addEventListener("submit", (e) => {
let valido = true;
let erros = [];

    const formdata = {
        nome: nome.value.trim(),
        email: email.value.trim(),
        assunto: assunto.value.trim(),
        mensagem: mensagem.value.trim()
    }

    if(!formdata.nome){
        erros.push("O nome é obrigatório");
        console.log("O nome é obrigatório");
        valido = false;
    }

    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!formdata.email){
        erros.push("O e-mail é obrigatório");
        valido = false;
    } else if(!regexEmail.test(formdata.email)){
        erros.push("E-mail inválido");
        valido = false;
    }

    if(!formdata.assunto){
        erros.push("O assunto é obrigatório");
        valido = false;
    }
    
    if(!formdata.mensagem){
        erros.push("A mensagem é obrigatória");
        valido = false;
    } else if(formdata.mensagem.length < 10){
        erros.push("A mensagem deve ter no mínimo 10 caracteres");
        valido = false;
    }

    console.log("Dados do formulario: ", formdata);

    if(!valido){
        e.preventDefault();
        alert("Formulário não enviado\n\n" + erros.join("\n"));
    } else{
        alert("Mensagem enviada com sucesso!");
    }
});
});
```

</div>
